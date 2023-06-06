


<?php $__env->startSection('content'); ?>
<style>
    svg {
        display: none;
    }
    .shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    display: none;
    }
</style>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Permissions List</h2>
        </div>
        <div class="pull-right">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
            <a class="btn btn-success" href="<?php echo e(route('permission.create')); ?>"> Create New Role</a>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($permission->name); ?></td>
        <td>
            <a class="btn btn-info" href="<?php echo e(route('permission.show',$permission->id)); ?>">Show</a>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                <a class="btn btn-primary" href="<?php echo e(route('permission.edit',$permission->id)); ?>">Edit</a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                <?php echo Form::open(['method' => 'DELETE','route' => ['permission.destroy', $permission->id],'style'=>'display:inline']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<?php echo $permissions->render(); ?>


        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\erps\resources\views/general/permission/index.blade.php ENDPATH**/ ?>
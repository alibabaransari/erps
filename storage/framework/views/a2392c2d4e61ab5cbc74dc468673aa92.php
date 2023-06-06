  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <ul><li>    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         <?php echo e(__('Logout')); ?>

     </a></li></ul>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

        </a>


        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
  </aside>
  <!-- /.control-sidebar --><?php /**PATH C:\xampp8\htdocs\erps\resources\views/layouts/penal/control_side.blade.php ENDPATH**/ ?>
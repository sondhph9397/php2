<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo e(getClientURL('')); ?>" class="brand-link">
    <img src="<?php echo e(getAssetUrl('adminlte/dist/img/default-image.jpg')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo e(getAssetUrl('adminlte/dist/img/default-image.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo e(getClientURL('')); ?>" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
            <p>
              Người dùng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(getClientURL('user')); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(getClientURL('add-user')); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm Mới</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-box-open"></i>
            <p>
              Sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(getClientURL('product')); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(getClientURL('add-product')); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm Mới</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-boxes"></i>
            <p>
              Loại sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(getClientURL('category')); ?>" class="nav-link">
                <i class="fas fa-list-ul nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(getClientURL('add-category')); ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Thêm Mới</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\Assignment\app\views/layouts/_share/sidebar.blade.php ENDPATH**/ ?>
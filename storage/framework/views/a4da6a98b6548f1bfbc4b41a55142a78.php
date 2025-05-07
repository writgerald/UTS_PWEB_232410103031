<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">Klinik Hetty</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('profile')); ?>">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('pengelolaan')); ?>">Pengelolaan Janji</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php /**PATH D:\Kuliah\Semester 4\PWEB\klinik_hetty\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>
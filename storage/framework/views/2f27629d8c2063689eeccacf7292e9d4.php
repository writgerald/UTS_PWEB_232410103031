<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Klinik Hetty</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard?username=<?php echo e($username); ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile?username=<?php echo e($username); ?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pengelolaan?username=<?php echo e($username); ?>">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/login">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\Kuliah\Semester 4\PWEB\klinik_hetty\resources\views/components/navbar.blade.php ENDPATH**/ ?>
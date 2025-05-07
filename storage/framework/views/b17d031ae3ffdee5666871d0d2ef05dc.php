<!DOCTYPE html>
<html>
<head>
    <title>Klinik Hetty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center">Login Admin</h3>
                <?php if(session('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                <?php endif; ?>
                <form action="<?php echo e(route('login.submit')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>
            </div>
        </div>

    </div>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\Kuliah\Semester 4\PWEB\klinik_hetty\resources\views/login.blade.php ENDPATH**/ ?>
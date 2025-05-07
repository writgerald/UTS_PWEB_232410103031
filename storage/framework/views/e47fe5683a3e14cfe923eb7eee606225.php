<!DOCTYPE html>
<html>
<head>
    <title>Klinik Hetty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php echo $__env->make('components.navbar', ['username' => request()->query('username')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\Kuliah\Semester 4\PWEB\klinik_hetty\resources\views/layouts/app.blade.php ENDPATH**/ ?>
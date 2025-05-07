<?php
    $username = request('username');
?>
<?php $__env->startSection('content'); ?>
    <h2>Profil Dokter</h2>
    <div class="card">
    <div class="card-body text-center">
        <img src="<?php echo e(asset('images/hetty.png')); ?>" alt="Foto drg. Hetty Pratiwi" class="img-fluid rounded mb-3" style="max-width: 200px;">
    <div class="card">
        <div class="card-body">
            <h4>drg. Hetty Pratiwi</h4>
            <p>Email: hettypratiwi@gmail.com</p>
            <p>Spesialis: Dokter Gigi</p>
            <p>No. STR: 1234567890</p>
            <p>Alamat Praktek: Jl. Mangkubumi 1 No 143, Jember</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\PWEB\klinik_hetty\resources\views/profile.blade.php ENDPATH**/ ?>
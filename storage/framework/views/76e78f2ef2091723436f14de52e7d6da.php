<?php $__env->startSection('content'); ?>
    <h1>Selamat datang, <?php echo e($username); ?>!</h1>
    <img src="<?php echo e(asset('images/hetty.png')); ?>" alt="Foto drg. Hetty Pratiwi" class="img-fluid rounded mb-3" style="max-width: 400px;">
    <p>Ini adalah halaman dashboard Klinik Hetty.</p>

<p>Berikut adalah jadwal praktik Anda:</p>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>Hari</th>
            <th>Jam</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item['hari']); ?></td>
            <td><?php echo e($item['jam']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<h3>Jadwal Pasien Hari Ini</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Keluhan</th>
            <th>Waktu Kunjungan</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($patient['name']); ?></td>
                <td><?php echo e($patient['complaint']); ?></td>
                <td><?php echo e($patient['appointment']); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div class="links">
    <a href="#">Go Back To Top</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 4\PWEB\klinik_hetty\resources\views/dashboard.blade.php ENDPATH**/ ?>
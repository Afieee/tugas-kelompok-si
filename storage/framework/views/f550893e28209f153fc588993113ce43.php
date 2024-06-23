    

    <?php $__env->startSection('konten'); ?>
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href="/sekretariat/view-matakuliah-sekretariat" class="btn btn-primary">Halaman view-matakuliah</a>
            <a href="/sekretariat/view-dosen-sekretariat" class="btn btn-primary">Halaman view-dosen</a>
            <a href="/sekretariat/view-mahasiswa-sekretariat" class="btn btn-primary">Halaman view-Mahasiswa</a>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\tugas-kelompok-si\resources\views/sekretariat/index.blade.php ENDPATH**/ ?>
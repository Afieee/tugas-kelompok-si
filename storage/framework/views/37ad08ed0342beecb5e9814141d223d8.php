<?php $__env->startSection('konten'); ?>

<!-- START FORM -->
<form action='<?php echo e(url("sekretariat-matakuliah/$data->id_matakuliah")); ?>' method='post'>
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_matakuliah" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <?php echo e($data->id_matakuliah); ?>

            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_matakuliah" class="col-sm-2 col-form-label">Nama Matakuliah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_matakuliah' id="nama_matakuliah" value="<?php echo e($data->nama_matakuliah); ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='sks' id="sks" value="<?php echo e($data->sks); ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='semester' id="semester" value="<?php echo e($data->semester); ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="perkuliahan" class="col-sm-2 col-form-label">Perkuliahan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='perkuliahan' id="perkuliahan" value="<?php echo e($data->perkuliahan); ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nip" class="col-sm-2 col-form-label">Dosen</label>
            <div class="col-sm-10">
                <select class="form-control" name='nip' id="nip">
                    <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->nip); ?>" <?php echo e($item->nip == $data->dosen->nip ? 'selected' : ''); ?>>
                            <?php echo e($item->nip); ?> - <?php echo e($item->nama_dosen); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="id_jurusan" class="col-sm-2 col-form-label">Id Jurusan</label>
            <div class="col-sm-10">
                <select class="form-control" name='id_jurusan' id="id_jurusan">
                    <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jsn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($jsn->id_jurusan); ?>" <?php echo e($jsn->id_jurusan == $data->id_jurusan ? 'selected' : ''); ?>>
                            <?php echo e($jsn->id_jurusan); ?> - <?php echo e($jsn->nama_jurusan); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                <a href="<?php echo e(url('sekretariat')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
    <!-- AKHIR FORM -->
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\tugas-kelompok-si\resources\views/sekretariat/edit-matakuliah.blade.php ENDPATH**/ ?>
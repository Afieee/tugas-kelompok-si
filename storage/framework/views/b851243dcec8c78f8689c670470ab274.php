<?php $__env->startSection('konten'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="pb-3">
        <form class="d-flex" action="<?php echo e(url('sekretariat-mahasiswa')); ?>" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    <div class="pb-3">
        <a href='<?php echo e(url('sekretariat-mahasiswa/create')); ?>' class="btn btn-primary">+ Tambah Data Dosen</a>
        <a href="<?php echo e(url('sekretariat')); ?>" class="btn btn-secondary">Kembali</a>
    </div>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-1">NIM</th>
                <th class="col-md-3">Nama Mahasiswa</th>
                <th class="col-md-1">Email</th>
                <th class="col-md-1">Password</th>
                <th class="col-md-2">Gender</th>
                <th class="col-md-4">No Handphone</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->nim); ?></td>
                <td><?php echo e($item->nama_mahasiswa); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->password); ?></td>
                <td><?php echo e($item->gender); ?></td>
                <td><?php echo e($item->no_handphone); ?></td>
                <td class="d-flex">
                    <a href='<?php echo e(url('sekretariat-mahasiswa/'.$item->nim.'/edit')); ?>' class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(url('sekretariat-mahasiswa/'.$item->nim)); ?>" class="d-inline" method="post" onsubmit="return confirm('Apakah anda ingin menghapus data?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" name="submit" class="btn btn-danger btn-sm ms-1">Del</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($data->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\tugas-kelompok-si\resources\views/sekretariat/view-mahasiswa.blade.php ENDPATH**/ ?>
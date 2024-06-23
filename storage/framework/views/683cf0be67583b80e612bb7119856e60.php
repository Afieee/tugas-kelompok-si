<?php $__env->startSection('konten'); ?>


        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                    <div class="pb-3">
                    <form class="d-flex" action="<?php echo e(url('sekretariat-matakuliah')); ?>" method="get">
                        <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                    </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <a href='<?php echo e(url('sekretariat-matakuliah/create')); ?>' class="btn btn-primary">+ Tambah Data Matakuliah</a>
                    <a href="<?php echo e(url('sekretariat')); ?>" class="btn btn-secondary"> kembali</a>

                </div>
                <table class="table table-striped" border="1">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-3">Nama Matakuliah</th>
                            <th class="col-md-1">SKS</th>
                            <th class="col-md-1">Semester</th>
                            <th class="col-md-2">Perkuliahan</th>
                            <th class="col-md-4">Dosen</th>
                            <th class="col-md-2">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->id_matakuliah); ?></td>
                            <td><?php echo e($item->nama_matakuliah); ?></td>
                            <td><?php echo e($item->sks); ?></td>
                            <td><?php echo e($item->semester); ?></td>
                            <td><?php echo e($item->perkuliahan); ?></td>
                            <td><?php echo e($item->dosen->nama_dosen); ?></td>
                            <td class="d-flex">
                                <a href='<?php echo e(url('sekretariat-matakuliah/'.$item->id_matakuliah. '/edit')); ?>' class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(url('sekretariat-matakuliah/'.$item->id_matakuliah)); ?>" class="d-inline" method="post" onsubmit="return confirm('Apakah anda ingin menghapus data?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm ms-1">Del</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <!--page halaman slider -->
                <?php echo e($data->links()); ?>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\tugas-kelompok-si\resources\views/sekretariat/view-matakuliah.blade.php ENDPATH**/ ?>
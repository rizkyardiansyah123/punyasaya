
<?php $__env->startSection('content'); ?>

<?php
$ar_judul = ['NO', 'NIP', 'NAMA', 'GENDER', 'EMAIL', 'FOTO', 'ACTION'];
$no = 1;
?>

<h3 class="fw-bold">Data Staff</h3>
<a href="<?php echo e(route('staff.create')); ?>"
   class="btn btn-primary btn-sm mb-3"
   title="Tambah Data">
    Tambah Data Staff
</a>

<div class="table-responsive">
    <table class="table table-striped table-bordered align-middle">
        <thead class="table-primary text-center">
            <tr>
                <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th scope="col"><?php echo e($jdl); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $ar_staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <!-- No -->
                <th scope="row"><?php echo e($no++); ?></th>

                <!-- Data -->
                <td><?php echo e($row->nip); ?></td>
                <td><?php echo e($row->nama); ?></td>
                <td><?php echo e($row->gender); ?></td>
                <td><?php echo e($row->email); ?></td>

                <!-- Foto -->
                <td class="text-center">

                    <img src="<?php echo e(asset('storage/' . ($row->foto ?? 'profile.jpg'))); ?>"
                         width="80"
                         height="80"
                         class="img-thumbnail object-fit-cover"
                         alt="Foto Staff">

                </td>

                <!-- Action -->
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                          action="<?php echo e(route('staff.destroy', $row->id)); ?>"
                          method="POST">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <a class="btn btn-info btn-sm"
                           href="<?php echo e(route('staff.show', $row->id)); ?>"
                           title="Detail Staff">

                            <i class="bi bi-eye"></i>
                        </a>

                        <a class="btn btn-warning btn-sm"
                           href="<?php echo e(route('staff.edit', $row->id)); ?>"
                           title="Ubah Staff">

                            <i class="bi bi-pencil-fill"></i>
                        </a>

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                title="Hapus Staff">

                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/staff/index.blade.php ENDPATH**/ ?>
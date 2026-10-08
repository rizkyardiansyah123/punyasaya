

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <br />

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <h5 class="card-title fw-bold">Form Edit Staff</h5>

        <!-- Form Edit -->
        <form class="row g-3"
              method="POST"
              action="<?php echo e(route('staff.update', $row->id)); ?>"
              enctype="multipart/form-data">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- NIP -->
            <div class="col-md-12">
                <label class="form-label">NIP</label>

                <input type="text"
                       class="form-control"
                       name="nip"
                       value="<?php echo e(old('nip', $row->nip)); ?>"
                       placeholder="NIP">

                <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Nama -->
            <div class="col-md-12">
                <label class="form-label">Nama</label>

                <input type="text"
                       class="form-control"
                       name="nama"
                       value="<?php echo e(old('nama', $row->nama)); ?>"
                       placeholder="Nama Staff">

                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Gender -->
            <div class="col-md-12">
                <label class="form-label">Jenis Kelamin</label>

                <?php $__currentLoopData = $ar_gender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                        <input class="form-check-input"
                               type="radio"
                               name="gender"
                               value="<?php echo e($g); ?>"
                               <?php echo e(old('gender', $row->gender) == $g ? 'checked' : ''); ?>>

                        <label class="form-check-label">
                            <?php echo e($g); ?>

                        </label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Alamat -->
            <div class="col-md-12">
                <label class="form-label">Alamat</label>

                <textarea class="form-control"
                          name="alamat"
                          rows="5"
                          placeholder="Alamat Staff"><?php echo e(old('alamat', $row->alamat)); ?></textarea>

                <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Email -->
            <div class="col-md-12">
                <label class="form-label">Email</label>

                <input type="email"
                       class="form-control"
                       name="email"
                       value="<?php echo e(old('email', $row->email)); ?>"
                       placeholder="Email">

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Foto -->
            <div class="col-md-12">
                <label class="form-label">Foto</label>

                <div class="mb-2">
                    <img src="<?php echo e(asset('storage/' . ($row->foto ?? 'profile.jpg'))); ?>"
                         width="120"
                         class="img-thumbnail"
                         alt="Foto Staff">
                </div>

                <input type="file"
                       class="form-control"
                       name="foto">

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti foto
                </small>

                <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Tombol -->
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary btn-sm">
                    Update
                </button>

                <a href="<?php echo e(url('/staff')); ?>"
                   class="btn btn-secondary btn-sm">
                    Batal
                </a>
            </div>

        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/staff/form_edit.blade.php ENDPATH**/ ?>
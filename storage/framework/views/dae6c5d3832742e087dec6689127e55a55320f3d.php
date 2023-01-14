

<?php $__env->startSection('title'); ?>Edit Akun
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Edit Akun</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Daftar Akun</li>
        <li class="breadcrumb-item active">Edit Akun</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Akun</h5>
					</div>
					<form class="form theme-form" action="<?php echo e(route('akun.update', $akun->id_akun)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NAMA AKUN</label>
										<input class="form-control <?php $__errorArgs = ['nama_akun'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_akun" value="<?php echo e($akun->nama_akun); ?>" required autocomplete="nama_akun" autofocusid="exampleFormControlInput1" type="text"/>
                                        <?php $__errorArgs = ['nama_akun'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">JENIS AKUN</label>
										<select class="form-select digits" name="jenis_akun" id="exampleFormControlSelect9">
											<option value="Email" <?php if($akun->jenis_akun === 'Email'): ?>  selected <?php endif; ?>>Akun Email</option>
											<option value="Perizinan" <?php if($akun->jenis_akun === 'Perizinan'): ?>  selected <?php endif; ?>>Akun Perizinan</option>
											<option value="Sosmed" <?php if($akun->jenis_akun === 'Sosmed'): ?>  selected <?php endif; ?>>Akun Sosmed</option>
                                            <option value="Lainnya" <?php if($akun->jenis_akun === 'Lainnya'): ?>  selected <?php endif; ?>>Akun Lainnya</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">LINK</label>
										<input class="form-control" name="link" id="exampleFormControlInput1" value="<?php echo e($akun->link); ?>" required type="text"/>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">USERNAME</label>
										<input class="form-control" name="username" id="exampleFormControlInput1" value="<?php echo e($akun->username); ?>" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">EMAIL</label>
										<input class="form-control" name="email" id="exampleFormControlInput1" value="<?php echo e($akun->email); ?>" required type="text"  />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">PASSWORD</label>
										<input class="form-control" name="password" id="exampleFormControlInput1" value="<?php echo e($akun->password); ?>" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">KETERANGAN</label>
										<input class="form-control" name="ket" id="exampleFormControlInput1" value="<?php echo e($akun->ket); ?>" required type="text"  />
                                       
									</div>
								</div>
							</div>
							
							
						</div>
						<div class="card-footer text-end">
							<button class="btn btn-primary" type="submit">Submit</button>
							<input class="btn btn-light" type="reset" value="Cancel" />
						</div>
					</form>
				</div>
				
				
			</div>
		</div>
	</div>
	
	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/admin/akun/edit.blade.php ENDPATH**/ ?>
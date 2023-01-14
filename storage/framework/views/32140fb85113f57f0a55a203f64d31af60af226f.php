

<?php $__env->startSection('title'); ?>Tambah Supplier
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Tambah Supplier</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Vendor</li>
        <li class="breadcrumb-item active">Tambah Supplier</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Edit Supplier</h5>
					</div>
                    <form action="<?php echo e(route('vendor.update', $vendor->id_supplier)); ?>" method="POST" >
                        <?php echo csrf_field(); ?> 
                        <?php echo method_field('PUT'); ?>
                        <div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NAMA SUPPLIER</label>
										<input class="form-control <?php $__errorArgs = ['nama_supplier'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_supplier" value="<?php echo e($vendor->nama_supplier); ?>"required autocomplete="nama_supplier" autofocus type="text"/>
                                        <?php $__errorArgs = ['nama_supplier'];
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
										<label class="form-label" for="exampleFormControlSelect9">JENIS VENDOR</label>
										<select class="form-select digits" name="jenis_vendor" id="exampleFormControlSelect9">
											<option value="Bahan" <?php if($vendor->jenis_vendor=== 'Bahan'): ?>  selected <?php endif; ?>>Vendor Bahan</option>
											<option value="Lainnya" <?php if($vendor->jenis_vendor=== 'Lainnya'): ?>  selected <?php endif; ?>>Vendor Lainnya</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NPWP</label>
										<input class="form-control" name="npwp" id="exampleFormControlInput1" value="<?php echo e($vendor->npwp); ?>"required type="text"/>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">ALAMAT</label>
										<input class="form-control" name="alamat" id="exampleFormControlInput1" value="<?php echo e($vendor->alamat); ?>" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TELP</label>
										<input class="form-control" name="telp" id="exampleFormControlInput1" value="<?php echo e($vendor->telp); ?>" required type="text"  />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">REKENING</label>
										<input class="form-control" name="rekening" id="exampleFormControlInput1" value="<?php echo e($vendor->rekening); ?>" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">KETERANGAN</label>
										<input class="form-control" name="keterangan" id="exampleFormControlInput1" value="<?php echo e($vendor->keterangan); ?>" required type="text"  />
                                       
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/admin/vendor/edit.blade.php ENDPATH**/ ?>
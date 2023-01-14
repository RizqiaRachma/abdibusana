

<?php $__env->startSection('title'); ?>Tambah Input Kasbon
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Tambah Input Kasbon</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Karyawan</li>
		<li class="breadcrumb-item">Kasbon</li>
        <li class="breadcrumb-item active">Tambah Data</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Input Kasbon</h5>
					</div>
					<form class="form theme-form" action="<?php echo e(route('kasbon.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Tanggal</label>
										<input class="form-control"  value="Hari ini" disabled>
              
</select>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Nama Karyawan</label>
										<select class="form-control" name="nama_karyawan" id="exampleFormControlInput1" required>
               <?php $__currentLoopData = $karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($u->nama_karyawan); ?>"> <?php echo e($u->nama_karyawan); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Nominal Pengajuan</label>
										<input class="form-control" name="pengajuan" id="exampleFormControlInput1" required type="text" autofocus placeholder="Input Nominal Pengajuan" />
                                       
									</div>
								</div>
</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Alasan</label>
										<input class="form-control" name="alasan" id="exampleFormControlInput1" required type="text" autofocus placeholder="Masukkan Alasan" />
                                       
									</div>
								</div>
</div>
                            
									</div>
								</div>
							</div>
							
							
							
						</div>
						<div class="card-footer text-end">
							<button class="btn btn-primary" type="submit">Submit</button>
							<input class="btn btn-light" type="reset" value="Reset" />
						</div>
					</form>
				</div>
				</div>
            </div>
		</div>
	</div>
	
	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\swi\resources\views/admin/kasbon/inputkasbon.blade.php ENDPATH**/ ?>
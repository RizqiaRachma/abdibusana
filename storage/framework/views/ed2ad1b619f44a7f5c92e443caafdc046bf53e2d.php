

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
        <li class="breadcrumb-item active">Edit Data</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Input Kasbon</h5>
					</div>
					<form class="form theme-form" action="<?php echo e(route('kasbon.update', $Kasbon->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        
                        <?php echo method_field('PUT'); ?>

                        <div class="card-body">
                            
						
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Nama Karyawan</label>
										<input class="form-control" name="nama_karyawan" id="exampleFormControlInput1" value="<?php echo e($Kasbon->nama); ?>" /> 

                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
									<label class="form-label" for="exampleFormControlInput1">Nominal Pengajuan</label>
										<input class="form-control" name="nominal_persetujuan" id="exampleFormControlInput1" value="<?php echo e($Kasbon->nominal); ?>" /> 


                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
									<label class="form-label" for="exampleFormControlInput1">Nominal Persetujuan</label>
										<input class="form-control" name="nominal_persetujuan" id="exampleFormControlInput1" value="" /> 


                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
									<label class="form-label" for="exampleFormControlInput1">Alasan Persetujuan</label>
										<input class="form-control" name="keterangan" id="exampleFormControlInput1" value="" /> 


                                       
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\swi\resources\views/admin/kasbon/acc.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title'); ?>Tambah Jenis BPJS Kesehatan
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Jenis BPJS Kesehatan</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">BPJS</li>
		<li class="breadcrumb-item">Program BPJS</li>
        <li class="breadcrumb-item active">Tambah Data</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Edit Jenis BPJS Kesehatan</h5>
					</div>
					<form class="form theme-form" action="<?php echo e(route('bpjs-kesehatan.updatejenis', $jenis_bpjskesehatan->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">JENIS</label>
										<select class="form-select digits" name="jenis" id="exampleFormControlSelect9">
											<option value="BPJS-KSP"  <?php if($jenis_bpjskesehatan->jenis === 'BPJS-KSP'): ?>  selected <?php endif; ?>>BPJS KESEHATAN (PERUSAHAAN)</option>
											<option value="BPJS-KSM" <?php if($jenis_bpjskesehatan->jenis === 'BPJS-KSM'): ?>  selected <?php endif; ?>>BPJS KESEHATAN (MANDIRI)</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TARIF</label>
										<input class="form-control" name="tarif" value="<?php echo e($jenis_bpjskesehatan->tarif); ?>" id="exampleFormControlInput1" type="text" autofocus />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TANGGUNGAN (yang di cover perusahaan)</label>
										<input class="form-control" name="tanggungan" value="<?php echo e($jenis_bpjskesehatan->tanggungan); ?>" id="exampleFormControlInput1" type="text" autofocus />
									</div>
								</div>
							</div>
							<button class="btn btn-primary" type="submit">Submit</button>
							<input class="btn btn-light" type="reset" value="Cancel" />
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/admin/BPJS_KS/edit_jenis.blade.php ENDPATH**/ ?>
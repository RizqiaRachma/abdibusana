

<?php $__env->startSection('title'); ?>Edit Program BPJS
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Program BPJS</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">BPJS</li>
		<li class="breadcrumb-item">Program BPJS</li>
        <li class="breadcrumb-item active">Edit Data</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Edit Program BPJS Ketenagakerjaan</h5>
					</div>
					<form class="form theme-form" action="<?php echo e(route('bpjstk.updateprogram', $jenis_bpjstk->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">JENIS PROGRAM</label>
										<select class="form-select digits" name="jenis" id="exampleFormControlSelect9">
											<option value="JKK"  <?php if($jenis_bpjstk->jenis === 'JKK'): ?>  selected <?php endif; ?>>Jaminan Kecelakaan Kerja (JKK)</option>
											<option value="JHTP" <?php if($jenis_bpjstk->jenis === 'JHTP'): ?>  selected <?php endif; ?>>Jaminan Hari Tua (JHT) yang dibayar oleh perusahaan</option>
											<option value="JHTK" <?php if($jenis_bpjstk->jenis === 'JHTK'): ?>  selected <?php endif; ?>>Jaminan Hari Tua (JHT) yang dibayar oleh karyawan</option>
                                            <option value="JKM" <?php if($jenis_bpjstk->jenis === 'JKM'): ?>  selected <?php endif; ?>>Jaminan Kematian</option>
											<option value="JP" <?php if($jenis_bpjstk->jenis === 'JP'): ?>  selected <?php endif; ?>>Jaminan Pensiun</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TARIF (%)</label>
										<input class="form-control" name="tarif" value="<?php echo e($jenis_bpjstk->tarif); ?>" id="exampleFormControlInput1" type="text" autofocus />
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/admin/BPJS_TK/editprogram.blade.php ENDPATH**/ ?>
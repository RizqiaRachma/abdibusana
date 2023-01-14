

<?php $__env->startSection('title'); ?>Tambah Kategori BPJS
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Kategori BPJS</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">BPJS</li>
		<li class="breadcrumb-item">Kategori BPJS</li>
        <li class="breadcrumb-item active">Tambah Data</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Kategori BPJS </h5>
					</div>
					<form class="form theme-form">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Kategori</label>
										<input class="form-control" id="exampleFormControlInput1" type="text" autofocus />
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">Jenis</label>
										<select class="form-select digits" id="exampleFormControlSelect9">
                                            <option value="Ketenagakerjaan">Ketenagakerjaan</option>
                                            <option value="Kesehatan">Kesehatan</option>
										</select>
                                        
									</div>
								</div>
							</div>
							
							<button class="btn btn-primary" type="submit">Submit</button>
                            <a href="<?php echo e(route('program_bpjs.create')); ?>"><button type="button" class="btn btn-light">Cancel</button></a>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/admin/BPJS_TK/create_kategori.blade.php ENDPATH**/ ?>
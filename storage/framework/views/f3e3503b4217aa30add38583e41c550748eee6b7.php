

<?php $__env->startSection('title'); ?>Program BPJS
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatable-extension.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Program BPJS Ketenagakerjaan dan Kesehatan</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">BPJS</li>
		<li class="breadcrumb-item active">Program BPJS</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Program BPJS Ketenagakerjaan dan Kesehatan</h5>
						<div class="col-md-6">
							<a href="<?php echo e(route('program_bpjs.create')); ?>"><button type="button" class="btn btn-primary">+ Tambah</button></a>
							<br>
							<?php if(session('success')): ?>
							<div class="alert alert-success" role="alert">
								<?php echo e(session('success')); ?>

							</div>
							<?php endif; ?>
						</div>
					</div>
	                <div class="card-body">
						
	                    <div class="dt-ext table-responsive">
	                        <table class="display" id="responsive">
	                            <thead>
	                                <tr>
	                                    <th>Kategori</th>
	                                    <th>Program</th>
	                                    <th>Tarif</th>
	                                    <th>#</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($u->nama_kategori); ?></td>
                                    <td><?php echo e($u->nama_program); ?></td>
                                    <td><?php echo e($u->tarif); ?></td>
                                    <td> 
                                       <form action="<?php echo e(route('program_bpjs.destroy', $u->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?> 
                                        <?php echo method_field('delete'); ?>
                                        <a href="<?php echo e(route('program_bpjs.edit', $u->id)); ?>" class="btn btn-success btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button></td>
	                                </tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Kategori</th>
	                                    <th>Program</th>
	                                    <th>Tarif</th>
	                                    <th>#</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/admin/BPJS_TK/program_bpjs.blade.php ENDPATH**/ ?>
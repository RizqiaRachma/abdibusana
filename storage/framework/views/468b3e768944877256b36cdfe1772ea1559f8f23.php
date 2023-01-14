

<?php $__env->startSection('title'); ?>Halaman Gaji Pegawai
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatable-extension.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Halaman Kasbon Karyawan</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">General</li>
		<li class="breadcrumb-item">Karyawan</li>
		<li class="breadcrumb-item active">Kasbon Karyawan</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
					<span>
							<a href="<?php echo e(route('kasbon.input')); ?>"><button type="button" class="btn btn-warning">+ Tambah</button></a>
							<br>
							
							<?php if(session('success')): ?>
							<div class="alert alert-success" role="alert">
								<?php echo e(session('success')); ?>

							</div>
							<?php endif; ?>
	                    </span>
	               
	                </div>
	                <div class="card-body">
	                    <div class="dt-ext table-responsive">
	                        <table class="display" id="responsive">
	                            <thead>
	                                <tr>
	                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nominal</th>
										<th>Alasan</th>
										<th>#</th>
										
                                        
	                                </tr>
	                            </thead>
                                <tbody>
                                    <?php $__currentLoopData = $kasbonz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($u->tanggal); ?></td>
                                    <td><?php echo e($u->nama); ?></td>
                                    <td><?php echo e($u->nominal); ?></td>
                                    <td><?php echo e($u->alasan); ?></td>
									<td><a href="<?php echo e(route('kasbon.acc',$u->id)); ?>"><b>ACC</b></a> | <a href="<?php echo e(route('kasbon.del',$u->id)); ?>">DEL</a<</td>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            </tbody>
	                            <tfoot>
                                    <tr>
                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nominal</th>
										<th>Alasan</th>
										<th>#</th>
										
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	                
	            </div>
	        </div>
	    
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
					<span>
							<h3>Tabel Persetujuan</h3>
							<br>
							
							<?php if(session('success')): ?>
							<div class="alert alert-success" role="alert">
								<?php echo e(session('success')); ?>

							</div>
							<?php endif; ?>
	                    </span>
	               
	                </div>
	                <div class="card-body">
	                    <div class="dt-ext table-responsive">
	                        <table class="table" id="responsive">
	                            <thead>
	                                <tr>
	                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nominal</th>
                                        <th>Nominal Persetujuan</th>
										<th>Keterangan</th>
										<th>Status</th>
										
                                        
	                                </tr>
	                            </thead>
                                <tbody>
                                    <?php $__currentLoopData = $kasbon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($u->tanggal); ?></td>
                                    <td><?php echo e($u->nama); ?></td>
                                    <td><?php echo e($u->nominal); ?></td>
                                    <td><?php echo e($u->nominal_persetujuan); ?></td>
                                    <td><?php echo e($u->keterangan); ?></td>
									<td><?php echo e($u->status); ?></td>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            </tbody>
	                            <tfoot>
                                    <tr>
                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nominal</th>
                                        <th>Nominal Persetujuan</th>
										<th>Keterangan</th>
										<th>Status</th>
										
	                                </tr>
	                            </tfoot>
	                        </table>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\swi\resources\views/admin/kasbon/index.blade.php ENDPATH**/ ?>
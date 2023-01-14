

<?php $__env->startSection('title'); ?>Halaman Gaji Pegawai
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatable-extension.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Halaman Gaji Pegawai</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">General</li>
		<li class="breadcrumb-item">Gaji</li>
		<li class="breadcrumb-item active">Gaji Karyawan</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
					<span>
							<a href="<?php echo e(route('gaji.inputgaji')); ?>"><button type="button" class="btn btn-warning">+ Tambah</button></a>
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
	                                    <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Nama Karyawan</th>
                                        <th>Gaji</th>
										<th>Uang Lembur</th>
										<th>Total</th>
										<th>Uang Makan</th>
										<th>Keterlambatan</th>
                                        <th>Tambahan</th>
                                        <th>Total</th>
										<th>Potongan Lain</th>
										<th>Pot. BPJSTK</th>
										<th>Pot. BPJSKS</th>
										<th>Upah diterima</th>
										<th>Kasbon</th>4
										<th>Sisa Upah</th>
	                                </tr>
	                            </thead>
                                <tbody>
                                    <?php $__currentLoopData = $gaji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>Bulan</td>
                                    <td>Tahun</td>
                                    <td><?php echo e($u->nama_karyawan); ?></td>
                                    <td><?php echo e($u->gaji); ?></td>
                                    <td><?php echo e($u->lembur); ?></td>
									<td><?php echo e($u->total); ?></td>
									<td><?php echo e($u->makan); ?></td>
									<td><?php echo e($u->keterlambatan); ?></td>
									<td><?php echo e($u->tambahan); ?></td>
									<td><?php echo e($u->total); ?></td>
									<td><?php echo e($u->potongan_lain); ?></td>
									<td><?php echo e($u->potbpjstk); ?></td>
									<td><?php echo e($u->potbpjsks); ?></td>
									<td><?php echo e($u->upah_diterima); ?></td>
									<td><?php echo e($u->kasbon); ?></td>
									<td><?php echo e($u->sisa_upah); ?></td>
	                                </tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            </tbody>
	                            <tfoot>
                                    <tr>
                                    th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Nama Karyawan</th>
                                        <th>Gaji</th>
										<th>Uang Lembur</th>
										<th>Total</th>
										<th>Uang Makan</th>
										<th>Keterlambatan</th>
                                        <th>Tambahan</th>
                                        <th>Total</th>
										<th>Potongan Lain</th>
										<th>Pot. BPJSTK</th>
										<th>Pot. BPJSKS</th>
										<th>Upah diterima</th>
										<th>Kasbon</th>4
										<th>Sisa Upah</th>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\swi\resources\views/admin/gaji/index.blade.php ENDPATH**/ ?>
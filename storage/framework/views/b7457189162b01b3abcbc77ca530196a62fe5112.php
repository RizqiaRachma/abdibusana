

<?php $__env->startSection('title'); ?>Karyawan
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Data User</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Karyawan</li>
		<li class="breadcrumb-item active">Data Karyawan</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                <a href="<?php echo e(route('karyawan.create')); ?>"><button type="button" class="btn btn-primary">+ Tambah Karyawan</button></a>
                <br>
                <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="display" id="advance-1">
                    <?php echo csrf_field(); ?>
                    <thead>
                      <tr>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>NO HP</th>
                        <th>E-MAIL</th>
                        <th>NO REKENING</th>
                        <th>KEPEGAWAIAN</th>
                        <th>#</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($u->nik); ?></td>
                            <td><?php echo e($u->nama_karyawan); ?></td>
                            <td><?php echo e($u->no_hp); ?></td>
                            <td><?php echo e($u->email); ?></td>
                            <td><?php echo e($u->no_rek); ?></td>
                            <td><?php echo e($u->kepegawaian); ?></td>
                            <td></td>
                            <td> 
                               <form action="<?php echo e(route('karyawan.destroy', $u->nik)); ?>" method="POST">
                                <?php echo csrf_field(); ?> 
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>                                    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                   
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- DOM / jQuery  Ends-->
          <!-- DataTables events  Starts-->
          
            </div>
          </div>
        </div>
    </div>
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\swi\resources\views/admin/karyawan/index.blade.php ENDPATH**/ ?>
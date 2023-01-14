

<?php $__env->startSection('title'); ?>Tambah Karyawan
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Tambah Karyawan</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Karyawan</li>
        <li class="breadcrumb-item active">Tambah Karyawan</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Karyawan</h5>
					</div>
					<form class="form theme-form" action="<?php echo e(route('karyawan.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NIK</label>
										<input class="form-control <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nik" value="<?php echo e(old('nik')); ?>" required autocomplete="nik" autofocus type="text" placeholder="321xxxx" />
                                        <?php $__errorArgs = ['nik'];
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
										<label class="form-label" for="exampleFormControlInput1">NAMA</label>
										<input class="form-control" name="nama_karyawan" id="exampleFormControlInput1" required type="text" autofocus placeholder="Nama Karyawan" />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NO. Handphone</label>
										<input class="form-control" name="no_hp" id="exampleFormControlInput1" required type="text" autofocus placeholder="Nama Karyawan" />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">E-mail</label>
										<input class="form-control" name="email" id="exampleFormControlInput1" required type="text" autofocus placeholder="Nama Karyawan" />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">BANK - NO REKENING</label>
										<input class="form-control" name="no_rek" id="exampleFormControlInput1" required type="text" autofocus placeholder="Nama Karyawan" />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">STATUS</label>
										<select class="form-select digits" name="status" id="exampleFormControlSelect9">
											<option value="Kawin">KAWIN</option>
											<option value="Belum Kawin">BELUM KAWIN</option>
										</select>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">KEPEGAWAIAN</label>
										<select class="form-select digits" name="kepegawaian" id="exampleFormControlSelect9">
											<option value="Pegawai">Pegawai</option>
											<option value="Penjahit">Penjahit</option>
											<option value="Subkon">Subkon</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Jumlah Anggota Keluarga</label>
										<input class="form-control" name="jml_kk" id="exampleFormControlInput1" required type="text" autofocus placeholder="Anggota keluarga yang tercantum pada KK" />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">GAJI POKOK</label>
										<input class="form-control" name="gaji_pokok" id="exampleFormControlInput1" required type="text" autofocus placeholder="Anggota keluarga yang tercantum pada KK" />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">GAJI (yang terdaftar di bpjs ketenagakerjaan)</label>
										<input class="form-control" name="gaji_bpjs" id="exampleFormControlInput1" required type="text" autofocus placeholder="Masukan Gaji Pokok jika status PEGAWAI"/>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TUNJANGAN TETAP</label>
										<input class="form-control" name="tunjangan_tetap" id="exampleFormControlInput1" required type="text" autofocus placeholder="Anggota keluarga yang tercantum pada KK" />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">BPJS KESEHATAN</label>
										<select class="form-select digits" name="bpjs_ks" id="exampleFormControlSelect9">
                                            <?php $__currentLoopData = $jenis_bpjskesehatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($u->id); ?>"><?php echo e($u->jenis); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">BPJS KETENAGAKERJAAN</label>
										<select class="form-select digits" name="bpjs_tk" id="exampleFormControlSelect9">
                                            <?php $__currentLoopData = $jenis_bpjstk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($u->id); ?>"><?php echo e($u->jenis); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
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
	
	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/admin/karyawan/create.blade.php ENDPATH**/ ?>
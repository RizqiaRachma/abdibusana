

<?php $__env->startSection('title'); ?>Input Gaji
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Input Gaji Karaywan</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Gaji</li>
        <li class="breadcrumb-item active">Input Gaji Karyawan</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Input Gaji</h5>
					</div>
					<form class="form theme-form" action="" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Tanggal</label>
										<input type="date" class="form-control" name="tanggal" id="exampleFormControlInput1" required>
             
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Nama Karyawan</label>
										<select class="form-control" name="nama_karyawan" id="nama_karyawan" required>
											<option>--- Pilih Karyawan ---</option>
               <?php $__currentLoopData = $karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value=" <?php echo e($u->nama_karyawan); ?>"> <?php echo e($u->nama_karyawan); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Gaji Pokok</label>
										<input class="form-control" name="gajipokok" id="jipok" required type="text" autofocus placeholder="Gaji Pokok" />
                                       
									</div>
								</div>
</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Tunjangan Tetap</label>
										<input class="form-control" name="tunjangan" id="exampleFormControlInput1" required type="text" autofocus placeholder="Tunjangan Tetap" />
                                       
									</div>
								</div>
</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Bonus</label>
										<input class="form-control" name="bonus" id="exampleFormControlInput1" required type="text" autofocus placeholder="Input Bonus / THR" />
									
									</div>
								</div>
							</div>
								<div class="row">
									<div class="col">
										<div class="mb-3">
											<label class="form-label" for="exampleFormControlInput1">Lembur /Jam</label>
											<input class="form-control" name="absensi" id="absen" required type="text" autofocus placeholder="Input berapa jam karyawan lembur" />
										
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="mb-3">
											<label class="form-label" for="exampleFormControlInput1">Uang Lembur</label>
											<input class="form-control" name="uang_lembur" id="uang_lembur" required type="text" autofocus placeholder="Uang Lembur" />
										
										</div>
									</div>
								</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Ketidakhadiran</label>
										<input class="form-control" name="absensi" id="absen" required type="text" autofocus placeholder="Input berapa hari karyawan tidak masuk kerja" />
									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Potongan Ketidakhadiran</label>
										<input class="form-control" name="pot_absensi" id="pot_absensi" required type="text" autofocus placeholder="Potongan Ketidakhadiran" />
									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Potongan BPJS TK</label>
										<input class="form-control" name="potonganbpjstk" id="bjstk" required type="text" autofocus placeholder="Potongan BPJS TK" />
                                       
									</div>
								</div>
</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Potongan BPJS KS</label>
										<input class="form-control" name="potonganbpjsks" id="exampleFormControlInput1" required type="text" autofocus placeholder="Potongan BPJS KS" />
                                       
									</div>
								</div>
</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Potongan PPH 21</label>
										<input class="form-control" name="potonganpph21" id="exampleFormControlInput1" required type="text" autofocus placeholder="Potongan PPH 21" />
                                       
									</div>
								</div>
</div>
							
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Sisa Kasbon</label>
										<input class="form-control" name="sisakasbon" id="sisakasbon" required type="text" autofocus placeholder="Sisa Kasbon" />
                                       
									</div>
								</div>
</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Potongan Kasbon</label>
										<input class="form-control" name="potkasbon" id="potkasbon" required type="text" autofocus placeholder="Potongan Kasbon" />
                                       
									</div>
								</div>
</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Gaji Yang Diterima</label>
										<input class="form-control" name="gajifull" id="gajifull" required type="text" autofocus placeholder="Sisa Gaji" />
                                       
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript" >
  $(document).ready(function(){
	
  $("#nama_karyawan").change(function() {
  //alert($(this).val());
  $('#bjstk').val("35000");
  

});
$("#absen, #potabsensi").keyup(function() {
            
            var potensi = $("#absen").val();
  
            var total = 400000 * parseInt(potensi)  ;
            $("#potabsensi").val(total);
			
  
  
        });
		$("#absen, #potabsensi").change(function() {
			var a = $("#potabsensi").val();
  var b = $("#jipok").val();
			var full = parseInt(b)  - parseInt(a)  ;
			$('#gajifull').val(full);
		});
  
  
  });
</script>
         
	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/admin/gaji/inputgaji.blade.php ENDPATH**/ ?>
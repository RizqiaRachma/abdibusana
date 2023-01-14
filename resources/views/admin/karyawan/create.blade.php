@extends('layouts.admin.master')

@section('title')Tambah Karyawan
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah Karyawan</h3>
		@endslot
		<li class="breadcrumb-item">Karyawan</li>
        <li class="breadcrumb-item active">Tambah Karyawan</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Karyawan</h5>
					</div>
					<form class="form theme-form" action="{{route('karyawan.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NIK</label>
										<input class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus type="text" placeholder="321xxxx" />
                                        @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                            @foreach ($jenis_bpjskesehatan as $u)
                                            <option value="{{ $u->id }}">{{ $u->jenis}}</option>
                                         @endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">BPJS KETENAGAKERJAAN</label>
										<select class="form-select digits" name="bpjs_tk" id="exampleFormControlSelect9">
                                            @foreach ($jenis_bpjstk as $u)
                                            <option value="{{ $u->id }}">{{ $u->jenis}}</option>
                                         @endforeach
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
	
	
	@push('scripts')
	@endpush

@endsection
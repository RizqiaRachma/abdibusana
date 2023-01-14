@extends('layouts.admin.master')

@section('title')Tambah Akun
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah Akun</h3>
		@endslot
		<li class="breadcrumb-item">Daftar Akun</li>
        <li class="breadcrumb-item active">Tambah Akun</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Akun</h5>
					</div>
					<form class="form theme-form" action="{{route('akun.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NAMA AKUN</label>
										<input class="form-control @error('nama_akun') is-invalid @enderror" name="nama_akun" value="{{ old('nama_akun') }}" required autocomplete="nama_akun" autofocusid="exampleFormControlInput1" type="text"/>
                                        @error('nama_akun')
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
										<label class="form-label" for="exampleFormControlSelect9">JENIS AKUN</label>
										<select class="form-select digits" name="jenis_akun" id="exampleFormControlSelect9">
											<option value="Email">Akun Email</option>
											<option value="Perizinan">Akun Perizinan</option>
											<option value="Sosmed">Akun Sosmed</option>
                                            <option value="Lainnya">Akun Lainnya</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">LINK</label>
										<input class="form-control" name="link" id="exampleFormControlInput1" required type="text"/>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">USERNAME</label>
										<input class="form-control" name="username" id="exampleFormControlInput1" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">EMAIL</label>
										<input class="form-control" name="email" id="exampleFormControlInput1" required type="text"  />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">PASSWORD</label>
										<input class="form-control" name="password" id="exampleFormControlInput1" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">KETERANGAN</label>
										<input class="form-control" name="ket" id="exampleFormControlInput1" required type="text"  />
                                       
									</div>
								</div>
							</div>
							
							
						</div>
						<div class="card-footer text-end">
							<button class="btn btn-primary" type="submit">Submit</button>
							<input class="btn btn-light" type="reset" value="Cancel" />
						</div>
					</form>
				</div>
				
				
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	@endpush

@endsection
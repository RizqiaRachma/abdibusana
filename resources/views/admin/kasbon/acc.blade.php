@extends('layouts.admin.master')

@section('title')Tambah Input Kasbon
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah Input Kasbon</h3>
		@endslot
		<li class="breadcrumb-item">Karyawan</li>
		<li class="breadcrumb-item">Kasbon</li>
        <li class="breadcrumb-item active">Edit Data</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Input Kasbon</h5>
					</div>
					<form class="form theme-form" action="{{route('kasbon.update', $Kasbon->id)}}" method="POST">
                        @csrf
                        
                        @method('PUT')

                        <div class="card-body">
                            
						
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Nama Karyawan</label>
										<input class="form-control" name="nama_karyawan" id="exampleFormControlInput1" value="{{ $Kasbon->nama }}" /> 

                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
									<label class="form-label" for="exampleFormControlInput1">Nominal Pengajuan</label>
										<input class="form-control" name="nominal_persetujuan" id="exampleFormControlInput1" value="{{ $Kasbon->nominal }}" /> 


                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
									<label class="form-label" for="exampleFormControlInput1">Nominal Persetujuan</label>
										<input class="form-control" name="nominal_persetujuan" id="exampleFormControlInput1" value="" /> 


                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
									<label class="form-label" for="exampleFormControlInput1">Alasan Persetujuan</label>
										<input class="form-control" name="keterangan" id="exampleFormControlInput1" value="" /> 


                                       
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
	</div>
	
	
	@push('scripts')
	@endpush

@endsection
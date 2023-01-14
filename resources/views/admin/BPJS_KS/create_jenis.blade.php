@extends('layouts.admin.master')

@section('title')Tambah Jenis BPJS Kesehatan
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Jenis BPJS Kesehatan</h3>
		@endslot
		<li class="breadcrumb-item">BPJS</li>
		<li class="breadcrumb-item">Program BPJS</li>
        <li class="breadcrumb-item active">Tambah Data</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Jenis BPJS Kesehatan</h5>
					</div>
					<form class="form theme-form" action="{{route('bpjs-kesehatan.storejenis')}}" method="POST">
                        @csrf
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">JENIS</label>
										<select class="form-select digits" name="jenis" id="exampleFormControlSelect9">
											<option value="BPJS-KSP">BPJS KESEHATAN (PERUSAHAAN)</option>
											<option value="BPJS-KSM">BPJS KESEHATAN (MANDIRI)</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TARIF</label>
										<input class="form-control" name="tarif" id="exampleFormControlInput1" type="text" autofocus />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TANGGUNGAN (yang di cover perusahaan)</label>
										<input class="form-control" name="tanggungan" id="exampleFormControlInput1" type="text" autofocus />
									</div>
								</div>
							</div>
							<button class="btn btn-primary" type="submit">Submit</button>
							<input class="btn btn-light" type="reset" value="Cancel" />
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
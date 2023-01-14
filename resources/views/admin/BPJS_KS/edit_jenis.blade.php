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
						<h5>Edit Jenis BPJS Kesehatan</h5>
					</div>
					<form class="form theme-form" action="{{route('bpjs-kesehatan.updatejenis', $jenis_bpjskesehatan->id)}}" method="POST">
                        @csrf
                        @method('PUT')
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">JENIS</label>
										<select class="form-select digits" name="jenis" id="exampleFormControlSelect9">
											<option value="BPJS-KSP"  @if($jenis_bpjskesehatan->jenis === 'BPJS-KSP')  selected @endif>BPJS KESEHATAN (PERUSAHAAN)</option>
											<option value="BPJS-KSM" @if($jenis_bpjskesehatan->jenis === 'BPJS-KSM')  selected @endif>BPJS KESEHATAN (MANDIRI)</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TARIF</label>
										<input class="form-control" name="tarif" value="{{ $jenis_bpjskesehatan->tarif }}" id="exampleFormControlInput1" type="text" autofocus />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TANGGUNGAN (yang di cover perusahaan)</label>
										<input class="form-control" name="tanggungan" value="{{ $jenis_bpjskesehatan->tanggungan }}" id="exampleFormControlInput1" type="text" autofocus />
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
@extends('layouts.admin.master')

@section('title')Tambah Kategori BPJS
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Kategori BPJS</h3>
		@endslot
		<li class="breadcrumb-item">BPJS</li>
		<li class="breadcrumb-item">Kategori BPJS</li>
        <li class="breadcrumb-item active">Tambah Data</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Kategori BPJS </h5>
					</div>
					<form class="form theme-form">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Kategori</label>
										<input class="form-control" id="exampleFormControlInput1" type="text" autofocus />
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">Jenis</label>
										<select class="form-select digits" id="exampleFormControlSelect9">
                                            <option value="Ketenagakerjaan">Ketenagakerjaan</option>
                                            <option value="Kesehatan">Kesehatan</option>
										</select>
                                        
									</div>
								</div>
							</div>
							
							<button class="btn btn-primary" type="submit">Submit</button>
                            <a href="{{ route('program_bpjs.create')}}"><button type="button" class="btn btn-light">Cancel</button></a>
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
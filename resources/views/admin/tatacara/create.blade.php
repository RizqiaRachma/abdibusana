@extends('layouts.admin.master')

@section('title')Tambah Tata Cara
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah Tata Cara</h3>
		@endslot
		<li class="breadcrumb-item">Tata Cara</li>
        <li class="breadcrumb-item active">Tambah</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah</h5>
					</div>
					<form class="form theme-form" action="{{route('tatacara.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NAMA</label>
										<input class="form-control @error('nama_supplier') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocusid="exampleFormControlInput1" type="text"/>
                                        @error('nama')
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
										<label class="form-label" for="exampleFormControlInput1">LINK</label>
										<input class="form-control" name="link" id="exampleFormControlInput1" required type="text"/>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">FILE</label>
										<input class="form-control @error('file') is-invalid @enderror" name="file" id="exampleFormControlInput1"  type="file"  />
                                        @error('file')
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
										<label class="form-label" for="exampleFormControlInput1">KETERANGAN</label>
										<input class="form-control" name="keterangan" id="exampleFormControlInput1" required type="text"  />
                                       
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
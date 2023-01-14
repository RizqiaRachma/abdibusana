@extends('layouts.admin.master')

@section('title')Tambah Supplier
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah Supplier</h3>
		@endslot
		<li class="breadcrumb-item">Bahan</li>
        <li class="breadcrumb-item active">Tambah Supplier</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Supplier</h5>
					</div>
					<form class="form theme-form" action="{{route('vendor.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NAMA SUPPLIER</label>
										<input class="form-control @error('nama_supplier') is-invalid @enderror" name="nama_supplier" value="{{ old('nama_supplier') }}" required autocomplete="nama_supplier" autofocusid="exampleFormControlInput1" type="text"/>
                                        @error('nama_supplier')
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
										<label class="form-label" for="exampleFormControlSelect9">JENIS VENDOR</label>
										<select class="form-select digits" name="jenis_vendor" id="exampleFormControlSelect9">
											<option value="Bahan">Vendor Bahan</option>
											<option value="Lainnya">Vendor Lainnya</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NPWP</label>
										<input class="form-control" name="npwp" id="exampleFormControlInput1" required type="text"/>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">ALAMAT</label>
										<input class="form-control" name="alamat" id="exampleFormControlInput1" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TELP</label>
										<input class="form-control" name="telp" id="exampleFormControlInput1" required type="text"  />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">REKENING</label>
										<input class="form-control" name="rekening" id="exampleFormControlInput1" required type="text"  />
                                       
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
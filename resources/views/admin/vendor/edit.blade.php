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
		<li class="breadcrumb-item">Vendor</li>
        <li class="breadcrumb-item active">Tambah Supplier</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Edit Supplier</h5>
					</div>
                    <form action="{{ route('vendor.update', $vendor->id_supplier) }}" method="POST" >
                        @csrf 
                        @method('PUT')
                        <div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NAMA SUPPLIER</label>
										<input class="form-control @error('nama_supplier') is-invalid @enderror" name="nama_supplier" value="{{ $vendor->nama_supplier }}"required autocomplete="nama_supplier" autofocus type="text"/>
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
											<option value="Bahan" @if($vendor->jenis_vendor=== 'Bahan')  selected @endif>Vendor Bahan</option>
											<option value="Lainnya" @if($vendor->jenis_vendor=== 'Lainnya')  selected @endif>Vendor Lainnya</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NPWP</label>
										<input class="form-control" name="npwp" id="exampleFormControlInput1" value="{{ $vendor->npwp }}"required type="text"/>
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">ALAMAT</label>
										<input class="form-control" name="alamat" id="exampleFormControlInput1" value="{{ $vendor->alamat }}" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TELP</label>
										<input class="form-control" name="telp" id="exampleFormControlInput1" value="{{ $vendor->telp }}" required type="text"  />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">REKENING</label>
										<input class="form-control" name="rekening" id="exampleFormControlInput1" value="{{ $vendor->rekening }}" required type="text"  />
                                       
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">KETERANGAN</label>
										<input class="form-control" name="keterangan" id="exampleFormControlInput1" value="{{ $vendor->keterangan }}" required type="text"  />
                                       
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
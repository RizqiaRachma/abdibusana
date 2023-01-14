@extends('layouts.admin.master')

@section('title')Edit Program BPJS
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Program BPJS</h3>
		@endslot
		<li class="breadcrumb-item">BPJS</li>
		<li class="breadcrumb-item">Program BPJS</li>
        <li class="breadcrumb-item active">Edit Data</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Edit Program BPJS Ketenagakerjaan</h5>
					</div>
					<form class="form theme-form" action="{{route('bpjstk.updateprogram', $jenis_bpjstk->id)}}" method="POST">
                        @csrf
                        @method('PUT')
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">JENIS PROGRAM</label>
										<select class="form-select digits" name="jenis" id="exampleFormControlSelect9">
											<option value="JKK"  @if($jenis_bpjstk->jenis === 'JKK')  selected @endif>Jaminan Kecelakaan Kerja (JKK)</option>
											<option value="JHTP" @if($jenis_bpjstk->jenis === 'JHTP')  selected @endif>Jaminan Hari Tua (JHT) yang dibayar oleh perusahaan</option>
											<option value="JHTK" @if($jenis_bpjstk->jenis === 'JHTK')  selected @endif>Jaminan Hari Tua (JHT) yang dibayar oleh karyawan</option>
                                            <option value="JKM" @if($jenis_bpjstk->jenis === 'JKM')  selected @endif>Jaminan Kematian</option>
											<option value="JP" @if($jenis_bpjstk->jenis === 'JP')  selected @endif>Jaminan Pensiun</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">TARIF (%)</label>
										<input class="form-control" name="tarif" value="{{ $jenis_bpjstk->tarif }}" id="exampleFormControlInput1" type="text" autofocus />
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
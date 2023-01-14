@extends('layouts.admin.master')

@section('title')Tambah Tagihan BPJS
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah Tagihan</h3>
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
						<h5>Tambah Tagihan BPJS Ketenagakerjaan</h5>
					</div>
					<form class="form theme-form" >
					Form Sedang dibuat
				</div>
				</div>
            </div>
		</div>
	</div>
	
	
	@push('scripts')
	@endpush

@endsection
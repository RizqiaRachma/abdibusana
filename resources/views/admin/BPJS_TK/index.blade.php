@extends('layouts.admin.master')

@section('title')BPJS Ketenagakerjaan
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable-extension.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>BPJS Ketenagakerjaan</h3>
		@endslot
		<li class="breadcrumb-item">General</li>
		<li class="breadcrumb-item">BPJS</li>
		<li class="breadcrumb-item active">BPJS Ketenagakerjaan</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
					<span>
							<a href="{{route('bpjs-kesehatan.createtagihan') }}"><button type="button" class="btn btn-warning">+ Tambah</button></a>
							<br>
							<br>
							@if (session('success'))
							<div class="alert alert-success" role="alert">
								{{ session('success')}}
							</div>
							@endif
	                    </span>
	               
	                </div>
	                <div class="card-body">
	                    <div class="dt-ext table-responsive">
	                        <table class="display" id="responsive">
	                            <thead>
	                                <tr>
	                                    <th>Bulan</th>
                                        <th>Tahun</th>
										<th>Tagihan</th>
										<th>Status</th>
										<th>Tgl Bayar</th>
										<th>Bukti Bayar</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                    @foreach ($bpjs_ketenagakerjaan as $u)
                                <tr>
                                    <td>{{ $u->bulan }}</td>
                                    <td>{{ $u->tahun }}</td>
                                    <td>{{ $u->tagihan }}</td>
									<td>{{ $u->status }}</td>
									<td>{{ $u->tgl_bayar }}</td>
									<td>{{ $u->bukti_bayar }}</td>
	                                </tr>
									@endforeach
	                            </tbody>
	                            <tfoot>
                                    <tr>
										<th>Bulan</th>
                                        <th>Tahun</th>
	                                    <th>Tagihan</th>
										<th>Status</th>
										<th>Tgl Bayar</th>
										<th>Bukti Bayar</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>
	@endpush

@endsection
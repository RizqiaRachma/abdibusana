@extends('layouts.admin.master')

@section('title')Halaman Gaji Pegawai
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable-extension.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Halaman Kasbon Karyawan</h3>
		@endslot
		<li class="breadcrumb-item">General</li>
		<li class="breadcrumb-item">Karyawan</li>
		<li class="breadcrumb-item active">Kasbon Karyawan</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
					<span>
							<a href="{{route('kasbon.input') }}"><button type="button" class="btn btn-warning">+ Tambah</button></a>
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
	                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nominal</th>
										<th>Alasan</th>
										<th>#</th>
										
                                        
	                                </tr>
	                            </thead>
                                <tbody>
                                    @foreach ($kasbonz as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->tanggal }}</td>
                                    <td>{{ $u->nama }}</td>
                                    <td>{{ $u->nominal}}</td>
                                    <td>{{ $u->alasan }}</td>
									<td><a href="{{route('kasbon.acc',$u->id) }}"><b>ACC</b></a> | <a href="{{route('kasbon.del',$u->id) }}">DEL</a<</td>
									@endforeach
	                            </tbody>
	                            <tfoot>
                                    <tr>
                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nominal</th>
										<th>Alasan</th>
										<th>#</th>
										
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	                
	            </div>
	        </div>
	    
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
					<span>
							<h3>Tabel Persetujuan</h3>
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
	                        <table class="table" id="responsive">
	                            <thead>
	                                <tr>
	                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nominal</th>
                                        <th>Nominal Persetujuan</th>
										<th>Keterangan</th>
										<th>Status</th>
										
                                        
	                                </tr>
	                            </thead>
                                <tbody>
                                    @foreach ($kasbon as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->tanggal }}</td>
                                    <td>{{ $u->nama }}</td>
                                    <td>{{ $u->nominal}}</td>
                                    <td>{{ $u->nominal_persetujuan}}</td>
                                    <td>{{ $u->keterangan }}</td>
									<td>{{ $u->status }}</td>
									@endforeach
	                            </tbody>
	                            <tfoot>
                                    <tr>
                                    <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nominal</th>
                                        <th>Nominal Persetujuan</th>
										<th>Keterangan</th>
										<th>Status</th>
										
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
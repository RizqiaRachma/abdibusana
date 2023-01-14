@extends('layouts.admin.master')

@section('title') KONSUMEN
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable-extension.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>DATA KONSUMEN</h3>
		@endslot
		<li class="breadcrumb-item">Database</li>
		<li class="breadcrumb-item">Konsumen</li>
		<li class="breadcrumb-item active">Konsumen</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <span>
							<a href="{{route('konsumen.create')}}"><button type="button" class="btn btn-warning">+ Tambah Konsumen</button></a>
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
	                                    <th>Nama Konsumen</th>
                                        <th>NPWP</th>
	                                    <th>Alamat</th>
	                                    <th>Telp</th>
	                                    <th>#</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                    @foreach ($konsumen as $u)
                                    <tr>
                                        <td>{{ $u->nama_konsumen }}</td>
                                        <td>{{ $u->npwp }}</td>
                                        <td>{{ $u->alamat }}</td>
                                        <td>{{ $u->telp }}</td>
                                        <td> 
                                           <form action="{{ route('konsumen.destroy', $u->id_konsumen) }}" method="POST">
                                            @csrf 
                                            @method('delete')
											<a href="{{ route('konsumen.edit', $u->id_konsumen) }}" class="btn btn-success btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        </td>
                                    </tr>                                    
                                    @endforeach
	                            </tbody>
	                            <tfoot>
                                    <tr>
	                                    <th>Nama Konsumen</th>
                                        <th>NPWP</th>
	                                    <th>Alamat</th>
	                                    <th>Telp</th>
	                                    <th>#</th>
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
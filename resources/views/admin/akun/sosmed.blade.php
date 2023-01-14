@extends('layouts.admin.master')

@section('title')Data Akun Sosmed
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable-extension.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>DATA AKUN SOCIAL MEDIA</h3>
		@endslot
		<li class="breadcrumb-item">Database</li>
		<li class="breadcrumb-item">Daftar Akun</li>
		<li class="breadcrumb-item active">Akun Social Media</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <span>
							<a href="{{route('akun.create')}}"><button type="button" class="btn btn-warning">+ Tambah</button></a>
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
	                                    <th>Nama Akun</th>
                                        <th>Link</th>
                                        <th>Email</th>
	                                    <th>Username</th>
	                                    <th>Password</th>
										<th>Keterangan</th>
	                                    <th>#</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                    @foreach ($data as $u)
                                    <tr>
                                        <td>{{ $u->nama_akun }}</td>
                                        <td>{{ $u->link }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->username }}</td>
										<td>{{ $u->password }}</td>
										<td>{{ $u->ket }}</td>
                                        <td> 
                                           <form action="{{ route('akun.destroy', $u->id_akun) }}" method="POST">
                                            @csrf 
                                            @method('GET')
											<a href="{{ route('akun.edit', $u->id_akun) }}" class="btn btn-success btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        </td>
                                    </tr>                                    
                                    @endforeach
	                            </tbody>
	                            <tfoot>
                                    <tr>
										<th>Nama Akun</th>
                                        <th>Link</th>
                                        <th>Email</th>
	                                    <th>Username</th>
	                                    <th>Password</th>
										<th>Keterangan</th>
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
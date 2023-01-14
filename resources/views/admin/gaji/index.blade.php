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
			<h3>Gaji Pegawai</h3>
		@endslot
		<li class="breadcrumb-item">General</li>
		<li class="breadcrumb-item">Gaji</li>
		<li class="breadcrumb-item active">Gaji Karyawan</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
					<span>
							<a href="{{route('gaji.inputgaji') }}"><button type="button" class="btn btn-warning">+ Tambah</button></a>
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
	                                    <th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Gaji Pokok</th>
										<th>Tunjangan Tetap</th>
										<th>Lembur /Jam</th>
										<th>Uang Lembur</th>
                                        <th>Bonus</th>
										<th>Ketidakhadiran /Hari</th>
										<th>Pot. Ketidakhadiran</th>
										<th>Pot. BPJSTK</th>
										<th>Pot. BPJSKS</th>
										<th>Pot. PPH 21</th>
										<th>Potongan Lain</th>
										<th>Upah diterima</th>
										<th>Kasbon</th>
										<th>Sisa Upah</th>
										<th> # </th>
	                                </tr>
	                            </thead>
                                <tbody>
                                    @foreach ($gaji as $u)
                                <tr>
									<td>{{ $u->tanggal }}</td>
                                    <td>{{ $u->nama_karyawan }}</td>
                                    <td>{{ $u->gajipokok }}</td>
									<td>{{ $u->tunjangan }}</td>
                                    <td>{{ $u->lembur }}</td>
									<td>{{ $u->uanglembur }}</td>
									<td>{{ $u->bonus }}</td>
									<td>{{ $u->absensi }}
									<td>{{ $u->pot_absensi }}</td>
									<td>{{ $u->pot_bpjstk }}</td>
									<td>{{ $u->pot_bpjsks }}</td>
									<td>{{ $u->pot_pph21 }}</td>
									<td>{{ $u->potongan_lain }}</td>
									<td>{{ $u->upah_diterima }}</td>
									<td>{{ $u->kasbon }}</td>
									<td>{{ $u->sisa_upah }}</td>
									<td> Edit | Hapus </td>
	                                </tr>
									@endforeach
	                            </tbody>
	                            <tfoot>
                                    <tr>
                                    	<th>Tanggal</th>
                                        <th>Nama Karyawan</th>
                                        <th>Gaji Pokok</th>
										<th>Tunjangan Tetap</th>
										<th>Lembur /Jam</th>
										<th>Uang Lembur</th>
                                        <th>Bonus</th>
										<th>Ketidakhadiran /Hari</th>
										<th>Pot. Ketidakhadiran</th>
										<th>Pot. BPJSTK</th>
										<th>Pot. BPJSKS</th>
										<th>Pot. PPH 21</th>
										<th>Potongan Lain</th>
										<th>Upah diterima</th>
										<th>Kasbon</th>
										<th>Sisa Upah</th>
										<th> # </th>
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
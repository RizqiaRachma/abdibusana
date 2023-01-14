@extends('layouts.admin.master')

@section('title')Karyawan
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Data User</h3>
		@endslot
		<li class="breadcrumb-item">Karyawan</li>
		<li class="breadcrumb-item active">Data Karyawan</li>
	@endcomponent
	
	<div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                <a href="{{route('karyawan.create')}}"><button type="button" class="btn btn-primary">+ Tambah Karyawan</button></a>
                <br>
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success')}}
                </div>
                @endif
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="display" id="advance-1">
                    @csrf
                    <thead>
                      <tr>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>NO HP</th>
                        <th>E-MAIL</th>
                        <th>NO REKENING</th>
                        <th>KEPEGAWAIAN</th>
                        <th>#</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $u)
                        <tr>
                            <td>{{ $u->nik }}</td>
                            <td>{{ $u->nama_karyawan }}</td>
                            <td>{{ $u->no_hp }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->no_rek }}</td>
                            <td>{{ $u->kepegawaian }}</td>
                            <td></td>
                            <td> 
                               <form action="{{ route('karyawan.destroy', $u->nik) }}" method="POST">
                                @csrf 
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>                                    
                        @endforeach
                    </tbody>
                   
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- DOM / jQuery  Ends-->
          <!-- DataTables events  Starts-->
          
            </div>
          </div>
        </div>
    </div>
	
	@push('scripts')
	<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
	@endpush

@endsection
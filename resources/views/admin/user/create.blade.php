@extends('layouts.admin.master')

@section('title')Tambah User
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah User</h3>
		@endslot
		<li class="breadcrumb-item">User</li>
        <li class="breadcrumb-item active">Tambah User</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah User</h5>
					</div>
					<form class="form theme-form" action="{{route('user.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">NAMA</label>
										<input class="form-control" name="name" id="exampleFormControlInput1" required type="text" autofocus  />
                                       
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlInput1">Email</label>
										<input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocusid="exampleFormControlInput1" type="email" placeholder="name@example.com" />
                                        @error('email')
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
										<label class="form-label" for="exampleInputPassword2">Password</label>
										<input class="form-control" id="exampleInputPassword2" name="password" type="password" placeholder="Password" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-3">
										<label class="form-label" for="exampleFormControlSelect9">Hak Akses</label>
										<select class="form-select digits" name="hak_akses" id="exampleFormControlSelect9">
											<option value="Pemilik">Pemilik</option>
											<option value="Finance">Finance</option>
											<option value="Admin">Admin</option>
										</select>
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
@extends('layouts.main')

@section('content')
    <section class="section">
          <div class="section-header">
            <h1>Data Kota</h1>
          </div>
		@if(auth()->user()->is_admin == true && auth()->user()->role != 'pic')
		  <div class="card">
				<div class="card-header">
					<h4>PIC Kota</h4>
					<div class="card-header-action">
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped text-center">
							<thead>
								<td>#</td>
								<td>Name</td>
								<td>Email</td>
								<td>City</td>
	                            <!--<td></td>-->
							</thead>
							<tbody>
								@foreach($pic as $key => $value)
									<tr>
										<td>{{ ++$key }}</td>
										<td>{{ $value->user->name }}</td>
										<td>{{ $value->user->email }}</td>
										<td>{{ $value->city->name }}</td>
	                                    {{-- <td>
	                                        <a href="--><?php //echo base_url('city/target') ?><!--" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>&nbsp; Set Target</a>
	                                    </td> --}}
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			  </div>
          <div class="card">
          	<div class="card-header">
          		<h4>Target Per Kota</h4>
          		<div class="card-header-action">
          		</div>
          	</div>
          	<div class="card-body">
          		<div class="table-responsive">
          			<table class="table table-striped text-center">
          				<thead>
          					<td>#</td>
          					<td>Name</td>
          					<td>Province</td>
          					<td>Target</td>
          					<td></td>
          				</thead>
          				<tbody>
							@foreach($cities as $key => $city)
								<tr>
									<td>{{ ++$key }}</td>
									<td>{{ $city->name }}</td>
									<td>{{ $city->province->name }}</td>
									<td>0</td>
									<td>
          								<a href="{{ url('home/city/target') }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>&nbsp; Set Target</a>
          							</td>
								</tr>
							@endforeach
          				</tbody>
          			</table>
          		</div>
          	</div>
          </div>
		@endif
		@if(auth()->user()->is_admin == false && auth()->user()->role == 'pic')
			<div class="card">
				<div class="card-header">
					<h4>Target Per Kota</h4>
					<div class="card-header-action">
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped text-center">
							<thead>
							<td>#</td>
							<td>Name</td>
							<td>Province</td>
							<td>Target</td>
                            <!--<td></td>-->
							</thead>
							<tbody>
							@foreach ($picCity as $key => $c)
								<tr>
									<td>{{ ++$key }}</td>
									<td>{{ $c->name }}</td>
									<td>{{ $c->province->name }}</td>
									<td>{{ $c->target }}</td>
                                    {{-- <td>
										<a href="{{ url('home/city/target') }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>&nbsp; Set Target</a>
                                    </td> --}}
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		@endif
        </section>
@endsection
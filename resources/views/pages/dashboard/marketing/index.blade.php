@extends('layouts.main')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Data Marketing</h1>
    </div>
@if (auth()->user()->is_admin == true)
    <div class="card">
    <div class="card-header">
        <h4>Data Marketing</h4>
        <div class="card-header-action">
            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#picModal"><i class="fas fa-user-cog"></i> Atur PIC</a>
            <a href="{{ url('/home/marketing/create') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah Marketing</a>
        </div>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead>
                        <td>#</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>No Telp</td>
                        <td>Kota</td>
                        <td>Refferal Code</td>
                        <td></td>
                    </thead>
                    <tbody>
                    @foreach($salesman as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->user->name }}</td>
                            <td>{{ $value->user->email }}</td>
                            <td>{{ $value->no_telp }}</td>
                            <td>{{ $value->city->name }}</td>
                            <td>{{ $value->code_referral }}</td>
                            <td>
                                <a href="{{ url('/home/marketing/$value->id') }}" class="btn btn-info"><i class="fas fa-info"></i>&nbsp; Detail</a>
                                <!--										--><?php //if($s->city_id != 0): ?>
                                <!--          									<a href="--><?php //echo base_url('city/cityPic/' . $s->id) ?><!--" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp; Set City PIC</a>-->
                                <!--										--><?php //else: ?>
                                <!--											<a href="#" class="btn btn-secondary" aria-disabled="true"><i class="fas fa-plus"></i>&nbsp; Set City PIC</a>-->
                                <!--										--><?php //endif ?>
                                <a href="{{ url('/home/marketing/$value->id') }}" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp; Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@else 
    <div class="card">
    <div class="card-header">
        <h4>Data Marketing</h4>
        <div class="card-header-action">
            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#picModal"><i class="fas fa-user-cog"></i> Atur PIC</a>
            <a href="{{ url('/home/marketing/create') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah Marketing</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <td>#</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>No Telp</td>
                    <td>Kota</td>
                    <td>Refferal Code</td>
                    <td></td>
                </thead>
                <tbody>
                    @foreach($salesman as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->user->name }}</td>
                            <td>{{ $value->user->email }}</td>
                            <td>{{ $value->no_telp }}</td>
                            <td>{{ $value->city->name }}</td>
                            <td>{{ $value->code_referral }}</td>
                            <td>
                                <a href="{{ url('/home/marketing/$value->id') }}" class="btn btn-info"><i class="fas fa-info"></i>&nbsp; Detail</a>
<!--										--><?php //if($s->city_id != 0): ?>
<!--          									<a href="--><?php //echo base_url('city/cityPic/' . $s->id) ?><!--" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp; Set City PIC</a>-->
<!--										--><?php //else: ?>
<!--											<a href="#" class="btn btn-secondary" aria-disabled="true"><i class="fas fa-plus"></i>&nbsp; Set City PIC</a>-->
<!--										--><?php //endif ?>
                                <a href="{{ url('/home/marketing/$value->id') }}" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp; Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endif
</section>
<!-- Modal Set PIC -->
  <form method="POST" novalidate="">
	  <div class="modal fade" id="picModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			  <div class="modal-content">
				  <div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Set City PIC</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
					  </button>
				  </div>
				  <div class="modal-body">

					  <div class="form-group">
						  <label>Marketing</label>
						  <select class="custom-select custom-select-sm" name="user_id" id="statusFilter">
							  <option value="" selected>- Pick Marketing -</option>
							  @foreach($salesman as $key => $s)
							  	<option value="{{ $s->id }}">{{ $s->user->name }}</option>
							  @endforeach
						  </select>
					  </div>

					  <div class="form-group">
						  <label>City</label>
						  <select class="custom-select custom-select-sm" name="city_id" id="city_filter">
							  <option value="" selected>- Pick City -</option>
							  <?php foreach ($city as $key => $c): ?>
								  <option value="{{ $c->id }}">{{ $c->name }}/option>
							  <?php endforeach ?>
						  </select>
					  </div>

				  </div>
				  <div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					  <button type="submit" class="btn btn-primary">Set PIC</button>
				  </div>
			  </div>
		  </div>
	  </div>
  </form>
  <!-- End Modal Set PIC -->
@endsection
  
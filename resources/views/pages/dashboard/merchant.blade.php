@extends('layouts.main')

@section ('content')
<section class="section">
    <div class="section-header">
    <h1>Data Merchant yang Terdaftar</h1>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
        <div class="card-icon badge-irg">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <div class="card-wrap">
            <div class="card-header">
            <h4>IRG</h4>
            </div>
            <div class="card-body">
            {{ $count_merchant['IRG'] }}
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
        <div class="card-icon badge-moopo">
            <i class="fas fa-crosshairs"></i>
        </div>
        <div class="card-wrap">
            <div class="card-header">
            <h4>Moopo</h4>
            </div>
            <div class="card-body">
            {{ $count_merchant['MOOPO'] }}
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
        <div class="card-icon badge-kamsia">
            <i class="fas fa-clipboard-check"></i>
        </div>
        <div class="card-wrap">
            <div class="card-header">
            <h4>Kamsia</h4>
            </div>
            <div class="card-body">
            {{ $count_merchant['KAMSIA'] }}
            </div>
        </div>
        </div>
    </div>                  
    </div>
    <div class="card">
    <div class="card-header">
        <h4>Data Merchant</h4>
        <div class="card-header-action">
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <td>#</td>
                    <td>Nama Merchant</td>
                    <td>Jenis Merchant</td>
                    <td>Tgl Masuk</td>
                    <td></td>
                </thead>
                <tbody>
                    @foreach($merchant as $key => $m)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $m->merchant_name }}</td>
                            <td>
                                @if($m->merchant_type == 'KAMSIA')
                                    <div class="badge badge-kamsia">KAMSIA</div>
                                @elseif($m->merchant_type == 'MOOPO')
                                    <div class="badge badge-moopo">MOOPO</div>
                                @else
                                    <div class="badge badge-irg">IRG</div>
                                @endif
                            </td>
                            <td>{{ date_format(date_create($m->created_at), 'd M Y') }}</td>
                            <td>
                                <a href="{{ url('/home/merchant/$m->id') }}" class="btn btn-info"><i class="fas fa-info"></i>&nbsp; Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
@endsection
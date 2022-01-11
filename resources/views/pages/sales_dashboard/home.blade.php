@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Dashboard</h1>
        </div>
        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Target Merchant</h4>
                </div>
                <div class="card-body">
                    {{ $target['target'] }}
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-crosshairs"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Merchant Shortage</h4>
                </div>
                <div class="card-body">
                    {{ $target['target'] - $target['actual'] }}
                </div>
            </div>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Invoice</h4>
                </div>
                <div class="card-body">
                <?//php // echo number_format(500000, 0, ',', '.'); ?>
                </div>
            </div>
            </div>
        </div> -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-clipboard-check"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Achieved Merchant</h4>
                </div>
                <div class="card-body">
                    {{ $target['actual'] }}
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
                            <td><?php echo date_format(date_create($m->created_at), 'd M Y') ?></td>
                            <td>
                                <a href="{{ url('/home/merchant/$m->id') }}" class="btn btn-info"><i class="fas fa-info"></i>&nbsp; Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>
@endsection
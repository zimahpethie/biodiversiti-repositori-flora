@extends('layouts.master')
   
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Laman Utama</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="/admin/adminHome">Laman Utama</li>
        </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header">
        <i class="fa fa-home"></i>
            Ringkasan Data Flora
        </div>

        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-9">
                    <div class="card" style="background-color:#DAFCDB; text-align:center; box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
                        <div class="card-body display-5">{{ $totalFlora }}</div>
                        <div class="card-body h5">Jumlah Flora</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="card" style="background-color:#DAFCDB; text-align:center">
                        <div class="card-body display-6">{{ $totalKingdom }}</div>
                        <div class="card-body h6">Jumlah Kingdom</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="background-color:#DAFCDB; text-align:center">
                        <div class="card-body display-6">{{ $totalDivisio }}</div>
                        <div class="card-body h6">Jumlah Divisio</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="background-color:#DAFCDB; text-align:center">
                        <div class="card-body display-6">{{ $totalClass }}</div>
                        <div class="card-body h6">Jumlah Class</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="card" style="background-color:#DAFCDB; text-align:center">
                        <div class="card-body display-6">{{ $totalOrder }}</div>
                        <div class="card-body h6">Jumlah Order</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="background-color:#DAFCDB; text-align:center">
                        <div class="card-body display-6">{{ $totalFamily }}</div>
                        <div class="card-body h6">Jumlah Family</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="background-color:#DAFCDB; text-align:center">
                        <div class="card-body display-6">{{ $totalGenus }}</div>
                        <div class="card-body h6">Jumlah Genus</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                        
@endsection
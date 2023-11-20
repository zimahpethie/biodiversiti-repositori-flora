@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 margin-tb">
            <div class="card">
            <div class="card-header h5">Hasil Carian</div>
                <div class="card-body">
                <form action="{{ route('search') }}" method="GET">
                @csrf
@if(isset($plants))
    <div class="input-group">
    <input type="search" name="search" class="form-control" placeholder="Carian.." value="{{ $query }}"required/>
    <button type="submit"class="btn btn-default">
            <i class="fa fa-search"></i>
            </button>
</form></div><br>

@if($plants->isNotEmpty())

        <h6 class="lh-sm"> {{ $plants->count() }} hasil carian untuk <b>{{ $query }}</b></h6>

@foreach ($plants as $plant) 

<p >
<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-2">
            <img src="{{ asset('storage/' . $plant->image) }}" class="img-fluid" width="200px">
        </div>
    <div class="col-9">
        <h4 class="fw-bold">{!! $plant->scientific_name !!}</h4>
        <h5>{!! $plant->name !!}</h5>
        <p class="card-text">{!! $plant->detail !!}</p>
        </div>
        <div class="col">
        <a class="btn btn-primary" href="{{ route('plants.show',$plant->id) }}">Papar</a>
        </div>
    </div>
  </div>
</div></p>
@csrf

@endforeach
@else 
    <div>
    <h6 class="lh-sm">Tiada maklumat ditemui untuk <b>{{ $query }}</b></h6>
    </div>
@endif
@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
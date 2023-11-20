@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 text-center mt-5">
            <h1>Repositori Biodiversiti Flora</h1>
        </div>
        <div class="col-lg-12 mt-5">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fa fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
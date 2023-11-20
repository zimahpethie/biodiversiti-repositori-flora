@extends('layouts.app')
   
@section('content')


<div class="container">
    <div class="card-body">
        <br><br><br>
        <div class="col-lg-12 text-center mt-5">
            <h1 class="display-5 lh-lg">REPOSITORI BIODIVERSITI FLORA</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                {{ csrf_field() }}
                <form action="{{ route('search') }}" method="GET">
                    <div class="input-group bg-white text-dark border border-3 rounded-pill">
                        <input type="search" name="search" class="form-control bg-white border-0 rounded-pill" placeholder="Carian.." required/>
                        <button type="submit"class="btn btn-success border-0 rounded-pill"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>   
        </div>
    </div>
</div>

@endsection
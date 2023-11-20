@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="card">
                <div class="card-header h5">Keterangan Flora</div>
                
                <div class="card-body">
                <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="text-end">
                                <img class="img-fluid shadow-sm p-3 mb-5 bg-body rounded" src="{{ asset('storage/' . $plant->image) }}" width="500px">
                            </div>
                        </div>
                        <div class="col">
                            <p class="lh-base"><strong>Nama:</strong><br>
                            {{ $plant->name }}</p>
                            
                            <p class="lh-base"><strong>Nama Saintifik:</strong><br>
                            {{ $plant->scientific_name }}</p>

                            <p class="lh-base"><strong>Kingdom:</strong><br>
                            {{ $plant->kingdom }}</p>

                            <p class="lh-base"><strong>Divisio:</strong><br>
                            {{ $plant->divisio }}</p>

                            <p class="lh-base"><strong>Class:</strong><br>
                            {{ $plant->class }}</p>

                            <p class="lh-base"><strong>Order:</strong><br>
                            {{ $plant->order_ }}</p>

                            <p class="lh-base"><strong>Family:</strong><br>
                            {{ $plant->family_ }}</p>

                            <p class="lh-base"><strong>Genus:</strong><br>
                            {{ $plant->genus }}</p>

                            <p class="lh-base"><strong>Spesies:</strong><br>
                            {{ $plant->species }}</p>

                            <p class="lh-base"><strong>Keterangan:</strong><br>
                            {{ $plant->detail }}</p>

                        </div>
                    </div>
                </div>
                </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
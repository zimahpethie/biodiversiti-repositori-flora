@extends('layouts.master')
   
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Senarai Flora</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/admin/adminHome" style="text-decoration:none;">Laman Utama</a></li>
        <li class="breadcrumb-item"><a href="/admin/managePlant" style="text-decoration:none;">Senarai Flora</a></li>
         <li class="breadcrumb-item active">Keterangan Flora</li>
    </ol>
        
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
             Keterangan Flora
        </div>
        
        <div class="card-body">
        <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="card-body">
                        <div class="text-end">
                            <a class="btn btn-primary" href="{{ route('admin.managePlant') }}"> Kembali</a>
                        </div>
                    </div>
                            
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="text-end ">
                            <img class="img-fluid shadow-sm p-3 mb-5 bg-body rounded" src="{{ Storage::url($plant->image) }}" width="500px">
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
@endsection
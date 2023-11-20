@extends('layouts.master')
   
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Flora</h1>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/admin/adminHome" style="text-decoration:none;">Laman Utama</a></li>
    <li class="breadcrumb-item active">Tambah Flora</li>
    </ol>
            
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus"></i>
            Tambah Flora
        </div>

                    
    <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Maaf.</strong> Terdapat masalah pada input anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

   
        <form action="{{ route('plants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="card-body">
                        <div class="text-end">
                            <a class="btn btn-primary" href="{{ route('admin.managePlant') }}"> Kembali</a>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Imej:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Nama:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Nama Saintifik:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                <input type="text" name="scientific_name" class="form-control" placeholder="Nama Saintifik" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Kingdom:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="text" name="kingdom" class="form-control" placeholder="Kingdom" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">  
                            <p class="fs-6 fw-bold lh-lg">Divisio:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="text" name="divisio" class="form-control" placeholder="Divisio" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">     
                            <p class="fs-6 fw-bold lh-lg">Class:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="text" name="class" class="form-control" placeholder="Class" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Order:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="text" name="order_" class="form-control" placeholder="Order" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Family:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="text" name="family_" class="form-control" placeholder="Family" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Genus:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="text" name="genus" class="form-control" placeholder="Genus" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Spesies:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <input type="text" name="species" class="form-control" placeholder="Species" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                            <p class="fs-6 fw-bold lh-lg">Keterangan:</p>
                            </div>
                            <div class="col-xs col-sm col-md">
                                <div class="form-group">
                                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Keterangan" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-secondary me-md-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Hantar</button>   
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
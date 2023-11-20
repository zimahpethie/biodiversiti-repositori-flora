@extends('layouts.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Senarai Flora</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/admin/adminHome" style="text-decoration:none;">Laman Utama</a></li>
            <li class="breadcrumb-item active">Senarai Flora</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>Senarai Flora
            </div>

            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <form action="{{ route('adminSearch') }}" method="GET">
                    <div class="input-group bg-white text-dark">
                        <input type="search" name="search" class="form-control" placeholder="Carian.." required />
                        <button type="submit"class="btn btn-success">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form><br>

                <table class="table table-responsive table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Imej</th>
                            <th>Nama</th>
                            <th>Nama Saintifik</th>
                            <th>Kingdom</th>
                            <th>Divisio</th>
                            <th>Class</th>
                            <th>Order</th>
                            <th>Famili</th>
                            <th>Genus</th>
                            <th>Spesies</th>
                            <th width="150px">Tindakan</th>
                        </tr>
                    </thead>
                    @foreach ($plants as $plant)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                @if ($plant->image && file_exists(public_path("storage/{$plant->image}")))
                                    <img src="{{ asset('storage/' . $plant->image) }}" width="100px"
                                        alt="{{ $plant->name }}">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>{{ $plant->name }}</td>
                            <td>{{ $plant->scientific_name }}</td>
                            <td>{{ $plant->kingdom }}</td>
                            <td>{{ $plant->divisio }}</td>
                            <td>{{ $plant->class }}</td>
                            <td>{{ $plant->order_ }}</td>
                            <td>{{ $plant->family_ }}</td>
                            <td>{{ $plant->genus }}</td>
                            <td>{{ $plant->species }}</td>
                            <td>
                                <form action="{{ route('plants.destroy', $plant->id) }}" method="POST">

                                    <a class="btn btn-info btn-sm" title="Papar" data-toggle="tooltip"
                                        href="{{ route('plants.show', $plant->id) }}"><i
                                            class="material-icons">&#xe8f4;</i></a>

                                    <a class="btn btn-warning btn-sm" title="Kemaskini" data-toggle="tooltip"
                                        href="{{ route('plants.edit', $plant->id) }}"><i
                                            class="material-icons">&#xe3c9;</i></a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="button" class="btn btn-danger btn-sm" title="Padam"
                                        data-bs-toggle="modal" data-bs-target="#myModal"><i
                                            class="material-icons">&#xE872;</i></button>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Padam Data Flora</h4>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    Adakah anda pasti untuk padam data <i><b>{{ $plant->name }}</b></i>
                                                    dari senarai flora?
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Padam</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {!! $plants->links() !!}
            </div>
        </div>
    @endsection

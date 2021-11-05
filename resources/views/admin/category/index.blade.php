@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Listado de Categorias</h>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover tabla-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Image</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item )
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="img-circle w-25" alt="{{ $item->name }}">
                            </td>
                            <td>
                                <a href="{{ url('edit-category'.$item->id) }}">
                                    <i class="fa fa-edit fa-2x text-info"></i>
                                </a>
                                <a href="{{ url('delete-category'.$item->id) }}">
                                    <i class="fa fa-trash fa-2x text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

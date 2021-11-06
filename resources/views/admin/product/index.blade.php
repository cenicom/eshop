@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Listado de Productos</h>
        </div>
        <div class="card-body">
            <table  class="table table-bordered table-hover tabla-striped text-center">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Categoria</td>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Image</td>
                        <td>precio Normal</td>
                        <td>Precio Venta</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item )
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/product/'.$item->image) }}" class="img-responsive"
                                    style="width:80px !important; height:150px !important"
                                    alt="{{ $item->name }}">
                            </td>
                            <td>${{ $item->original_price }}</td>
                            <td>${{ $item->selling_price }}</td>
                            <td>
                                <a href="{{ url('edit-product'.$item->id) }}">
                                    <i class="fa fa-edit fa-2x text-info"></i>
                                </a>
                                <a href="{{ url('delete-product'.$item->id) }}">
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

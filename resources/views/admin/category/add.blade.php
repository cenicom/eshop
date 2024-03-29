@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Agregar Categorias</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6" mb-3>
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6" mb-3>
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12" mb-3>
                        <label for="">Descripción</label>
                        <textarea name="description" id=""  rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6" mb-3>
                        <label for="">Status:</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6" mb-3>
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-12" mb-3>
                        <label for="">Meta TiTle</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12" mb-3>
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" id="" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12" mb-3>
                        <label for="">Meta Descripción</label>
                        <textarea name="meta_description" id="" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12" mb-3>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12" mb-6>
                        <button class="btn btn-primary" type="submit">Agregar Registro</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

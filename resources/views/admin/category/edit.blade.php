@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Editar Categoria</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6" mb-3>
                        <label for="">Nombre</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                    </div>
                    <div class="col-md-6" mb-3>
                        <label for="">Slug</label>
                        <input type="text" value="{{ $category->slug }}" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12" mb-3>
                        <label for="">Descripción</label>
                        <textarea name="description" id=""  rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6" mb-3>
                        <label for="">Status:</label>
                        <input type="checkbox" {{ $category->status == "1" ? 'checked':'' }} name="status">
                    </div>
                    <div class="col-md-6" mb-3>
                        <label for="">Popular</label>
                        <input type="checkbox" {{ $category->popular == "1" ? 'checked':'' }} name="popular">
                    </div>
                    <div class="col-md-12" mb-3>
                        <label for="">Meta TiTle</label>
                        <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12" mb-3>
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" id="" rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12" mb-3>
                        <label for="">Meta Descripción</label>
                        <textarea name="meta_description" id="" rows="3" class="form-control">{{ $category->meta_description }}</textarea>
                    </div>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" class="img-circle w-25"
                             alt="Category Image" />
                    @endif
                    <div class="col-md-12" mb-3>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12" mb-6>
                        <button class="btn btn-primary" type="submit">Actualizar Registro</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

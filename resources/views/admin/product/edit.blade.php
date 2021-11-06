@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Editar Producto</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select name="category_id" id="" class="form-select" aria-label="Default select example" >
                            <option value="">{{ $products->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $products->slug }}">
                    </div>
                    <div class="col-md-12 mb-3" >
                        <label for="">Descripción Corta</label>
                        <textarea name="small_description" id=""  rows="3" class="form-control">{{ $products->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3" >
                        <label for="">Descripción</label>
                        <textarea name="description" id=""  rows="3" class="form-control">{{ $products->description }}</textarea>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <label for="">Precio Normal</label>
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                            name="original_price" value="{{ $products->original_price }}">
                        <span class="input-group-text">.00</span>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <label for="">Precio Promoción</label>
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                            name="selling_price" value="{{ $products->selling_price }}">
                        <span class="input-group-text">.00</span>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <label for="">Impuesto</label>
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                            name="tax_price" value="{{ $products->tax_price }}">
                        <span class="input-group-text">.00</span>
                    </div>
                    <div class="input-group col-md-6 mb-3">
                        <label for="">Cantidad</label>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)"
                            name="quantity" value="{{ $products->quantity }}">
                    </div>
                    <div class="col-md-6" mb-3>
                        <label for="">Status:</label>
                        <input type="checkbox" name="status" {{ $products->status == "1" ? 'checked':'' }}>
                    </div>
                    <div class="col-md-6" mb-3>
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending" {{ $products->trending == "1" ? 'checked':'' }}>
                    </div>
                    <div class="col-md-12 mb-3" >
                        <label for="">Meta TiTle</label>
                        <input type="text" class="form-control" name="meta_title" value="{{ $products->meta_title }}">
                    </div>
                    <div class="col-md-12 mb-3" >
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" id="" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3" >
                        <label for="">Meta Descripción</label>
                        <textarea name="meta_description" id="" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                    </div>
                    @if ($products->image)
                        <img src="{{ asset('assets/uploads/product/'.$products->image) }}" class="img-circle w-25"
                             alt="products Image" />
                    @endif
                    <div class="col-md-12 mb-3" >
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-6" >
                        <button class="btn btn-primary" type="submit">Actualizar Registro</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

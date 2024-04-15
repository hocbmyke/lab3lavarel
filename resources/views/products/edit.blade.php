@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Змінити товар</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Назва:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="quantity">Кількість:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
            </div>
            <div class="form-group">
                <label for="price">Ціна:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>
            <button type="submit" class="btn btn-primary">Оновити</button>
        </form>
    </div>
@endsection

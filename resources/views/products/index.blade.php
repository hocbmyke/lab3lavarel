@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Товари</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Назва</th>
                    <th>Кількість</th>
                    <th>Ціна</th>
                    <th>Можливості</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }} шт.</td>
                    <td>{{ $product->price }} ₴</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" style="font-size: 14px;">Змінити</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="font-size: 14px;">Видалити</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Додати товар</a>
    </div>
@endsection

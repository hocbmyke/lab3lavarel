@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Clients</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary" style="font-size: 14px;">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="font-size: 14px;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">Add Client</a>
    </div>
@endsection

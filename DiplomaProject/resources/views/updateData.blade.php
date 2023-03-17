@extends('layouts.app')

@section('head')
    <style>
        .table {
            table-layout: fixed;
            width: 100%;
        }

        .table td {
            max-width: 150px;
            max-height: 50px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }


    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

@endsection


@section('content')
    <div class="container">
        <h1>Films List</h1>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Text</th>
                <th>Photo</th>
                <th>Year</th>
                <th>Director</th>
                <th>Trailer</th>
                <th>Awards</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($catalogs as $catalog)
                <tr>
                    <td>{{ $catalog->id }}</td>
                    <td>{{ $catalog->Category }}</td>
                    <td>{{ $catalog->Title }}</td>
                    <td>{{ $catalog->Description }}</td>
                    <td>{{ $catalog->Text }}</td>
                    <td>{{ $catalog->Photo }}</td>
                    <td>{{ $catalog->Year }}</td>
                    <td>{{ $catalog->Director }}</td>
                    <td>{{ $catalog->Trailer }}</td>
                    <td>{{ $catalog->Awards }}</td>
                    <td>
                        <a href="{{ route('catalogs.edit', $catalog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('catalogs.destroy', $catalog->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

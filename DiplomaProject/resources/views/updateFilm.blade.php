@extends('layouts.app')

@section('head')
    <style>
        .table {
            table-layout: fixed;
            width: 100%;
        }

        .table td {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
        }

        .table td:hover {
            overflow: auto; /* Показываем скрытую часть текста при наведении курсора мыши */
            white-space: normal; /* Разрешаем перенос текста */
        }


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
@endsection


@section('content')
    <div class="container">
        <h1>Films List</h1>
            <form method="GET" action="{{ route('search.index') }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request()->input('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Go</button>
                    </div>
                </div>
            </form>
        <table class="table">
            <thead>
            <tr>
                <th>
                    ID
                    <a href="{{ route('filmsList', ['sort' => 'id|'.($sortColumn=='id' ? ($sortDirection=='asc' ? 'desc' : 'asc') : 'asc')]) }}">
                        @if ($sortColumn == 'id')
                            @if ($sortDirection == 'asc')
                                <i class="fa fa-sort-down"></i>
                            @else
                                <i class="fa fa-sort-up"></i>
                            @endif
                        @else
                            <i class="fa fa-sort"></i>
                        @endif
                    </a>
                </th>
                <th>
                    Category
                    <a href="{{ route('filmsList', ['sort' => 'category|'.($sortColumn=='category' ? ($sortDirection=='asc' ? 'desc' : 'asc') : 'asc')]) }}">
                        @if ($sortColumn == 'category')
                            @if ($sortDirection == 'asc')
                                <i class="fa fa-sort-down"></i>
                            @else
                                <i class="fa fa-sort-up"></i>
                            @endif
                        @else
                            <i class="fa fa-sort"></i>
                        @endif
                    </a>
                </th>
                <th>
                    Title
                    <a href="{{ route('filmsList', ['sort' => 'title|'.($sortColumn=='title' ? ($sortDirection=='asc' ? 'desc' : 'asc') : 'asc')]) }}">
                        @if ($sortColumn == 'title')
                            @if ($sortDirection == 'asc')
                                <i class="fa fa-sort-down"></i>
                            @else
                                <i class="fa fa-sort-up"></i>
                            @endif
                        @else
                            <i class="fa fa-sort"></i>
                        @endif
                    </a>
                </th>
                <th>
                    Year
                    <a href="{{ route('filmsList', ['sort' => 'year|'.($sortColumn=='year' ? ($sortDirection=='asc' ? 'desc' : 'asc') : 'asc')]) }}">
                        @if ($sortColumn == 'year')
                            @if ($sortDirection == 'asc')
                                <i class="fa fa-sort-down"></i>
                            @else
                                <i class="fa fa-sort-up"></i>
                            @endif
                        @else
                            <i class="fa fa-sort"></i>
                        @endif
                    </a>
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($catalogs as $catalog)
                <tr>
                    <td>{{ $catalog->id }}</td>
                    <td>{{ $catalog->Category }}</td>
                    <td>{{ $catalog->Title }}</td>
                    <td>{{ $catalog->Year }}</td>
                    <td>
                        <a href="{{ route('catalogs.edit', $catalog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('catalogs.destroy', $catalog->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="margin-left: 10px">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$catalogs-> withQueryString() -> links()}}
    </div>
@endsection


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
            overflow: auto;
            white-space: normal;
        }


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
@endsection


@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-primary">
                {{ session('status') }}
            </div>
        @endif
        <h1>{{__('local.Films List')}}</h1>
            <form method="GET" action="{{ route('search.index') }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="{{__('local.Search...')}}" value="{{ request()->input('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">{{__('local.Go')}}</button>
                    </div>
                </div>
            </form>

        <table class="table">
            <thead>
            <tr>
                <th>
                    {{__('local.ID')}}
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
                    {{__('local.Category')}}
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
                    {{__('local.Title')}}
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
                    {{__('local.Year')}}
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
                    @if(app()->getLocale() == 'en')
                        <div style="text-align: center;">
                            <td>{{ $catalog->id }}</td>
                            <td>{{ $catalog->Title }}</td>
                            <td>{{ $catalog->Director }}</td>
                            <td>{{ $catalog->Year }}</td>
                        </div>
                    @endif
                    @if(app()->getLocale() == 'ru')
                        <div style="text-align: center;">
                            <td>{{ $catalog->id }}</td>
                            <td>{{ $catalog->Title_ru }}</td>
                            <td>{{ $catalog->Director_ru }}</td>
                            <td>{{ $catalog->Year }}</td>
                        </div>
                    @endif
                    <td>
                        <a href="{{ route('catalogs.edit', $catalog->id) }}" class="btn btn-primary btn-sm">{{__('local.Edit')}}</a>
                        <button type="button" value="{{ $catalog->id }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $catalog->id }}" style="margin-left: 10px">{{__('local.Delete')}}</button>

                        <div class="modal fade" id="deleteModal{{ $catalog->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal{{ $catalog->id }}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModal{{ $catalog->id }}Label">{{__('local.Delete Films Item')}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{__('local.Are you sure you want to delete this films item?')}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('local.Cancel')}}</button>
                                        <form action="{{ route('catalogs.destroy', $catalog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">{{__('local.Delete')}}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$catalogs-> withQueryString() -> links()}}
    </div>
@endsection


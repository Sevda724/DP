@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-primary">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{ route('filmsList') }}" class="btn btn-secondary mb-2">{{__('local.Back')}}</a>
        <h1>{{__('local.Edit Movie')}}</h1>
        <form action="{{ route('catalogs.update', $catalog->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="category">{{__('local.Category:')}}</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $catalog->Category }}">
            </div>
            <div class="form-group">
                <label for="title">{{__('local.Title:')}}</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $catalog->Title }}">
            </div>
            <div class="form-group">
                <label for="description">{{__('local.Description:')}}</label>
                <textarea class="form-control" id="description" name="description">{{ $catalog->Description }}</textarea>
            </div>
            <div class="form-group">
                <label for="text">{{__('local.Text:')}}</label>
                <textarea class="form-control" id="text" name="text">{{ $catalog->Text }}</textarea>
            </div>
            <div class="form-group">
                <label for="photo">{{__('local.Photo:')}}</label>
                <input type="text" class="form-control" id="photo" name="photo" value="{{ $catalog->Photo }}">
            </div>
            <div class="form-group">
                <label for="year">{{__('local.Year:')}}</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ $catalog->Year }}">
            </div>
            <div class="form-group">
                <label for="director">{{__('local.Director:')}}</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ $catalog->Director }}">
            </div>
            <div class="form-group">
                <label for="trailer">{{__('local.Trailer:')}}</label>
                <input type="text" class="form-control" id="trailer" name="trailer" value="{{ $catalog->Trailer }}">
            </div>
            <div class="form-group">
                <label for="awards">{{__('local.Awards:')}}</label>
                <input type="text" class="form-control" id="awards" name="awards" value="{{ $catalog->Awards }}">
            </div>
            <button type="submit" class="btn btn-primary">{{__('local.Save')}}</button>
        </form>
    </div>
@endsection

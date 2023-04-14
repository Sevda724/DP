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
                @if ($errors->has('category'))
                    <span class="text-danger">{{ $errors->first('category') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="title">{{__('local.Title:')}}</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $catalog->Title }}">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="description">{{__('local.Description:')}}</label>
                <textarea class="form-control" id="description" name="description">{{ $catalog->Description }}</textarea>
                @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="text">{{__('local.Text:')}}</label>
                <textarea class="form-control" id="text" name="text">{{ $catalog->Text }}</textarea>
                @if ($errors->has('text'))
                    <span class="text-danger">{{ $errors->first('text') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="photo">{{__('local.Photo:')}}</label>
                <input type="text" class="form-control" id="photo" name="photo" value="{{ $catalog->Photo }}">
                @if ($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="year">{{__('local.Year:')}}</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ $catalog->Year }}">
                @if ($errors->has('year'))
                    <span class="text-danger">{{ $errors->first('year') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="director">{{__('local.Director:')}}</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ $catalog->Director }}">
                @if ($errors->has('director'))
                    <span class="text-danger">{{ $errors->first('director') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="trailer">{{__('local.Trailer:')}}</label>
                <input type="text" class="form-control" id="trailer" name="trailer" value="{{ $catalog->Trailer }}">
                @if ($errors->has('trailer'))
                    <span class="text-danger">{{ $errors->first('trailer') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="awards">{{__('local.Awards:')}}</label>
                <input type="text" class="form-control" id="awards" name="awards" value="{{ $catalog->Awards }}">
                @if ($errors->has('awards'))
                    <span class="text-danger">{{ $errors->first('awards') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="title_ru">{{__('local.Title_ru:')}}</label>
                <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{ $catalog->Title_ru }}">
                @if ($errors->has('title_ru'))
                    <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="text_tu">{{__('local.Text_ru:')}}</label>
                <textarea class="form-control" id="text_ru" name="text_ru">{{ $catalog->Text_ru }}</textarea>
                @if ($errors->has('text_ru'))
                    <span class="text-danger">{{ $errors->first('text_ru') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="director_ru">{{__('local.Director_ru:')}}</label>
                <input type="text" class="form-control" id="director_ru" name="director_ru" value="{{ $catalog->Director_ru }}">
                @if ($errors->has('director_ru'))
                    <span class="text-danger">{{ $errors->first('director_ru') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="awards_ru">{{__('local.Awards_ru:')}}</label>
                <input type="text" class="form-control" id="awards_ru" name="awards_ru" value="{{ $catalog->Awards_ru }}">
                @if ($errors->has('awards_ru'))
                    <span class="text-danger">{{ $errors->first('awards_ru') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">{{__('local.Save')}}</button>
        </form>
    </div>
@endsection

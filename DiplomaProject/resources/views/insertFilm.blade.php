@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status_error'))
                <div class="alert alert-danger">{{ session('status_error') }}</div>
            @endif

            @if(session('status_success'))
                <div class="alert alert-success">{{ session('status_success') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2>{{__('local.Insert data into Database')}}</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('insert-data') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Category')}}</label>
                            <input type="text" class="form-control" name="category" placeholder="{{__('local.Enter category')}}" value="{{ old('category') }}">
                            @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Title')}}</label>
                            <input type="text" class="form-control" name="title" placeholder="{{__('local.Enter title')}}" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Description')}}</label>
                            <input type="text" class="form-control" name="description" placeholder="{{__('local.Enter description')}}" value="{{ old('description') }}">
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Text')}}</label>
                            <input type="text" class="form-control" name="text" placeholder="{{__('local.Enter text')}}" value="{{ old('text') }}">
                            @if ($errors->has('text'))
                                <span class="text-danger">{{ $errors->first('text') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Photo')}}</label>
                            <input type="text" class="form-control" name="photo" placeholder="{{__('local.Enter link to photo')}}" value="{{ old('photo') }}">
                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Year')}}</label>
                            <input type="text" class="form-control" name="year" placeholder="{{__('local.Enter year')}}" value="{{ old('year') }}">
                            @if ($errors->has('year'))
                                <span class="text-danger">{{ $errors->first('year') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Director')}}</label>
                            <input type="text" class="form-control" name="director" placeholder="{{__('local.Enter director')}}" value="{{ old('director') }}">
                            @if ($errors->has('director'))
                                <span class="text-danger">{{ $errors->first('director') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Trailer')}}</label>
                            <input type="text" class="form-control" name="trailer" placeholder="{{__('local.Enter trailers')}}" value="{{ old('trailer') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Awards')}}</label>
                            <input type="text" class="form-control" name="awards" placeholder="{{__('local.Enter awards')}}" value="{{ old('awards') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Title_ru')}}</label>
                            <input type="text" class="form-control" name="title_ru" placeholder="{{__('local.Enter title_ru')}}" value="{{ old('title_ru') }}">
                            @if ($errors->has('title_ru'))
                                <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Text_ru')}}</label>
                            <input type="text" class="form-control" name="text_ru" placeholder="{{__('local.Enter text_ru')}}" value="{{ old('text_ru') }}">
                            @if ($errors->has('text_ru'))
                                <span class="text-danger">{{ $errors->first('text_ru') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Director_ru')}}</label>
                            <input type="text" class="form-control" name="director_ru" placeholder="{{__('local.Enter directure_ru')}}" value="{{ old('directure_ru') }}">
                            @if ($errors->has('director_ru'))
                                <span class="text-danger">{{ $errors->first('director_ru') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Awards_ru')}}</label>
                            <input type="text" class="form-control" name="awards_ru" placeholder="{{__('local.Enter awards_ru')}}" value="{{ old('awards_ru') }}">
                        </div>
                        <button type="submit" class="btn btn-success">{{__('local.Submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

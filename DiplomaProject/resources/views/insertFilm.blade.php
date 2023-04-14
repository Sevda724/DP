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
                            <input type="text" class="form-control" name="category" placeholder="{{__('local.Enter category')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Title')}}</label>
                            <input type="text" class="form-control" name="title" placeholder="{{__('local.Enter title')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Description')}}</label>
                            <input type="text" class="form-control" name="description" placeholder="{{__('local.Enter description')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Text')}}</label>
                            <input type="text" class="form-control" name="text" placeholder="{{__('local.Enter text')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Photo')}}</label>
                            <input type="text" class="form-control" name="photo" placeholder="{{__('local.Enter link to photo')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Year')}}</label>
                            <input type="text" class="form-control" name="year" placeholder="{{__('local.Enter year')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Director')}}</label>
                            <input type="text" class="form-control" name="director" placeholder="{{__('local.Enter director')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Trailer')}}</label>
                            <input type="text" class="form-control" name="trailer" placeholder="{{__('local.Enter trailers')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Awards')}}</label>
                            <input type="text" class="form-control" name="awards" placeholder="{{__('local.Enter awards')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Title_ru')}}</label>
                            <input type="text" class="form-control" name="title_ru" placeholder="{{__('local.Enter title_ru')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Text_ru')}}</label>
                            <input type="text" class="form-control" name="text_ru" placeholder="{{__('local.Enter text_ru')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Director_ru')}}</label>
                            <input type="text" class="form-control" name="director_ru" placeholder="{{__('local.Enter directure_ru')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('local.Awards_ru')}}</label>
                            <input type="text" class="form-control" name="awards_ru" placeholder="{{__('local.Enter awards_ru')}}">
                        </div>
                        <button type="submit" class="btn btn-success">{{__('local.Submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

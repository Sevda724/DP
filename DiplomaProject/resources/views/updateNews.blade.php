@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

@endsection

@section('content')
<div class="container">
    <a href="{{ route('news.list') }}" class="btn btn-secondary mb-2">{{__('local.Back')}}</a>
    @if(session('success')))
    <div class="alert alert-success" style="text-align: center; width: 50%; margin: auto auto 5px auto;">
    {{ session('success') }}
    </div>
@endif
    <div class="row">
      <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h2>{{__('local.Update news data')}}</h2>
      </div>
      <div class="card-body">
<!-- Update Popup Modal -->
      <form  action="{{ route('news.update', $newsInfo->id) }}" method="POST">
        @csrf
        {{ csrf_field() }}
        {{ method_field('POST') }}
          <div class="mb-3">
            <label>{{__('local.Title on English:')}}<i class="text-danger">*</i></label>
            <input type="text" name='title_en' class="form-control" placeholder="{{__('local.Enter title on English')}}" value="{{ $newsInfo-> Title_en }}">
            @if ($errors->has('title_en'))
                <span class="text-danger">{{ $errors->first('title_en') }}</span>
            @endif
          </div>
          <div class="mb-3">
            <label>{{__('local.Description on English:')}}<i class="text-danger">*</i></label>
            <input type="text" name='description_en' class="form-control" placeholder="{{__('local.Enter description on English')}}" value="{{ $newsInfo-> Description_en }}">
            @if ($errors->has('description_en'))
                <span class="text-danger">{{ $errors->first('description_en') }}</span>
            @endif
          </div>
          <div class="mb-3">
            <label>{{__('local.Title on Russian:')}} <i class="text-danger">*</i></label>
            <input type="text" name='title_ru' class="form-control" placeholder="{{__('local.Enter title on Russian')}}" value="{{ $newsInfo-> Title_ru }}">
            @if ($errors->has('title_ru'))
                <span class="text-danger">{{ $errors->first('title_ru') }}</span>
            @endif
          </div>
          <div class="mb-3">
            <label>{{__('local.Description on Russian:')}} <i class="text-danger">*</i></label>
            <input type="text" name='description_ru' class="form-control" placeholder="{{__('local.Enter description on Russian')}}" value="{{ $newsInfo-> Description_ru }}">
            @if ($errors->has('description_ru'))
                <span class="text-danger">{{ $errors->first('description_ru') }}</span>
            @endif
          </div>
          <div class="mb-3">
            <label>{{__('local.Photo 1:')}} <i class="text-danger">*</i> </label>
            <input type="text" name='photo1' class="form-control" placeholder="{{__('local.Enter link to the photo')}}" value="{{ $newsInfo-> Photo1 }}">
            @if ($errors->has('photo1'))
                <span class="text-danger">{{ $errors->first('photo1') }}</span>
            @endif
          </div>
          <div class="mb-3">
            <label>{{__('local.Photo 2:')}} </label>
            <input type="text" name='photo2' class="form-control" placeholder="{{__('local.Enter link to the photo')}}" value="{{ $newsInfo-> Photo2 }}">
          </div>
          <div class="mb-3">
            <label>{{__('local.Photo 3:')}} </label>
            <input type="text" name='photo3' class="form-control" placeholder="{{__('local.Enter link to the photo')}}" value="{{ $newsInfo-> Photo3 }}">
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary">{{__('local.Save changes')}}</button>
        </div>
      </form>
</div>
</div>
</div>
</div>
</div>

@endsection

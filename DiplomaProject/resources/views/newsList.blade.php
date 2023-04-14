@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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

@endsection

@section('content')
    <div class="container">

<!-- HTML code for popup -->
@if(session('success'))
  <div class="alert alert-success" style="text-align: center; width: 50%; margin: auto auto 5px auto;">
    {{ session('success') }}
  </div>
@endif
@if(session('custom_message'))
    <div class="alert alert-danger" style="text-align: center; width: 50%; margin: auto auto 5px auto;">
    {{ session('custom_message') }}</div>
@endif
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert a movie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('news.insert') }}" method="POST">
       {{ csrf_field() }}
      <div class="modal-body">
            <div class="form-group">
                <label>Title on English: <i class="text-danger">*</i> </label>
                <input type="text" name='title_en' class="form-control" placeholder="Enter title on English" value="{{ old('title_en') }}">
                @if ($errors->has('title_en'))
                <span class="text-danger">{{ $errors->first('title_en') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Description on English: <i class="text-danger">*</i> </label>
                <input type="text" name='description_en' class="form-control" placeholder="Enter description on English" value="{{ old('description_en') }}">
                @if ($errors->has('description_en'))
                <span class="text-danger">{{ $errors->first('description_en') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Title on Russian: <i class="text-danger">*</i> </label>
                <input type="text" name='title_ru' class="form-control" placeholder="Enter title on Russian" value="{{ old('title_ru') }}">
                @if ($errors->has('title_ru'))
                <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Description on Russian: <i class="text-danger">*</i> </label>
                <input type="text" name='description_ru' class="form-control" placeholder="Enter description on Russian" value="{{ old('description_ru') }}">
                @if ($errors->has('description_ru'))
                <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Photo 1: <i class="text-danger">*</i> </label>
                <input type="text" name='photo1' class="form-control" placeholder="Enter link to the photo" value="{{ old('photo1') }}">
                @if ($errors->has('photo1'))
                <span class="text-danger">{{ $errors->first('photo1') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Photo 2: </label>
                <input type="text" name='photo2' class="form-control" placeholder="Enter link to the photo" value="{{ old('photo2') }}">
            </div>
            <div class="form-group">
                <label>Photo 3:  </label>
                <input type="text" name='photo3' class="form-control" placeholder="Enter link to the photo" value="{{ old('photo3') }}">
>>>>>>> 006b3d17bea3d6f7652f69a927bfe70342863afa
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark">{{__('local.Add')}}</button>
      </div>
      </form>
    </div>
  </div>
</div>


        <h1>{{__('local.All News Items')}}</h1>
        <button class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">{{__('local.Add news')}}</button>
        <br>
        <br>
        <!--<table class="table table-bordered table-hover">-->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>{{__('local.ID')}}</th>
                    <th>{{__('local.Title')}}</th>
                    <th>{{__('local.Actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Title_en }}</td>
                        <td>
                            <a href="{{ route('news.show', ['id' => $item->id]) }}" class="btn btn-info btn-sm">{{__('local.View')}}</a>
                            <a href="{{ route('news.update.form', ['id' => $item->id]) }}" class="btn btn-primary btn-sm" style="margin-left: 10px">{{__('local.Edit')}}</a>
                            <button type="button" value="{{ $item->id }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $item->id }}" style="margin-left: 10px">{{__('local.Delete')}}</button>
                        </td>
                    </tr>
            </tbody>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal{{ $item->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModal{{ $item->id }}Label">{{__('local.Delete News Item')}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{__('local.Are you sure you want to delete this news item?')}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('local.Cancel')}}</button>
                                    <a href="{{ route('news.delete', ['id' => $item->id]) }}" class="btn btn-danger">{{__('local.Delete')}}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </table>
        {{$news -> links()}}
    </div>

<!-- JavaScript code for popup -->
<script>
    function openPopup() {
        document.getElementById("popup").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>
@endsection

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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{__('local.Make a Request')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('news.insert') }}" method="POST">
       {{ csrf_field() }}
      <div class="modal-body">
            <div class="form-group">
                <label>{{__('local.Title on English:')}}</label>
                <input type="text" name='title_en' class="form-control" placeholder="{{__('local.Enter title on English')}}">
            </div>
            <div class="form-group">
                <label>{{__('local.Description on English:')}}</label>
                <input type="text" name='description_en' class="form-control" placeholder="{{__('local.Enter description on English')}}">
            </div>
            <div class="form-group">
                <label>{{__('local.Title on Russian:')}}</label>
                <input type="text" name='title_ru' class="form-control" placeholder="{{__('local.Enter title on Russian')}}" >
            </div>
            <div class="form-group">
                <label>{{__('local.Description on Russian')}}</label>
                <input type="text" name='description_ru' class="form-control" placeholder="{{__('local.Enter description on Russian')}}">
            </div>
            <div class="form-group">
                <label>{{__('local.Photo 1 (required)')}}</label>
                <input type="text" name='photo1' class="form-control" placeholder="{{__('local.Enter link to the photo')}}">
            </div>
            <div class="form-group">
                <label>{{__('local.Photo 2 (optional)')}}</label>
                <input type="text" name='photo2' class="form-control" placeholder="{{__('local.Enter link to the photo')}}">
            </div>
            <div class="form-group">
                <label>{{__('local.Photo 3 (optional)')}}</label>
                <input type="text" name='photo3' class="form-control" placeholder="{{__('local.Enter link to the photo')}}">
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

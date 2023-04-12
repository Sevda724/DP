@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
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

@endsection

@section('content')
    <div class="container">

<!-- HTML code for popup -->
  @if(session('success')))
  <div class="alert alert-success" style="text-align: center; width: 50%; margin: auto auto 5px auto;">
    {{ session('success') }}
  </div>
@endif
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
                <label>Title on English: </label>
                <input type="text" name='title_en' class="form-control" placeholder="Enter title on English" value="{{ old('title_en') }}">
                @if ($errors->has('title_en'))
                <span class="text-danger">{{ $errors->first('title_en') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Description on English: </label>
                <input type="text" name='description_en' class="form-control" placeholder="Enter description on English" value="{{ old('description_en') }}">
                @if ($errors->has('description_en'))
                <span class="text-danger">{{ $errors->first('description_en') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Title on Russian: </label>
                <input type="text" name='title_ru' class="form-control" placeholder="Enter title on Russian" value="{{ old('title_ru') }}">
                @if ($errors->has('title_ru'))
                <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Description on Russian </label>
                <input type="text" name='description_ru' class="form-control" placeholder="Enter description on Russian" value="{{ old('description_ru') }}">
                @if ($errors->has('description_ru'))
                <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Photo 1 (required) </label>
                <input type="text" name='photo1' class="form-control" placeholder="Enter link to the photo" value="{{ old('photo1') }}">
                @if ($errors->has('photo1'))
                <span class="text-danger">{{ $errors->first('photo1') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Photo 2 (optional) </label>
                <input type="text" name='photo2' class="form-control" placeholder="Enter link to the photo" value="{{ old('photo2') }}">
            </div>
            <div class="form-group">
                <label>Photo 3 (optional) </label>
                <input type="text" name='photo3' class="form-control" placeholder="Enter link to the photo" value="{{ old('photo3') }}">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>


        <h1>All News Items</h1>
        <button class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Add news</button>
        <br>
        <br>
        <!--<table class="table table-bordered table-hover">-->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Title_en }}</td>
                        <td>
                            <a href="{{ route('news.show', ['id' => $item->id]) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('news.update.form', ['id' => $item->id]) }}" class="btn btn-primary btn-sm" style="margin-left: 10px">Edit</a>
                            <button type="button" value="{{ $item->id }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $item->id }}" style="margin-left: 10px">Delete</button>
                        </td>
                    </tr>
            </tbody>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal{{ $item->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModal{{ $item->id }}Label">Delete News Item</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this news item?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a href="{{ route('news.delete', ['id' => $item->id]) }}" class="btn btn-danger">delete</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </table>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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

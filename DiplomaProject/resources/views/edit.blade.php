@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Movie</h1>
        <form action="{{ route('catalogs.update', $catalog->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $catalog->Category }}">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $catalog->Title }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description">{{ $catalog->Description }}</textarea>
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea class="form-control" id="text" name="text">{{ $catalog->Text }}</textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="text" class="form-control" id="photo" name="photo" value="{{ $catalog->Photo }}">
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ $catalog->Year }}">
            </div>
            <div class="form-group">
                <label for="director">Director:</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ $catalog->Director }}">
            </div>
            <div class="form-group">
                <label for="trailer">Trailer:</label>
                <input type="text" class="form-control" id="trailer" name="trailer" value="{{ $catalog->Trailer }}">
            </div>
            <div class="form-group">
                <label for="awards">Awards:</label>
                <input type="text" class="form-control" id="awards" name="awards" value="{{ $catalog->Awards }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

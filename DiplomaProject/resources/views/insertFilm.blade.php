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
                    <h2>Insert data into Database</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('insert-data') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" placeholder="Enter category">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter description">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Text</label>
                            <input type="text" class="form-control" name="text" placeholder="Enter text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="text" class="form-control" name="photo" placeholder="Enter link to photo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Year</label>
                            <input type="text" class="form-control" name="year" placeholder="Enter year">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Director</label>
                            <input type="text" class="form-control" name="director" placeholder="Enter director">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Trailer</label>
                            <input type="text" class="form-control" name="trailer" placeholder="Enter trailers">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Awards</label>
                            <input type="text" class="form-control" name="awards" placeholder="Enter awards">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title_ru</label>
                            <input type="text" class="form-control" name="title_ru" placeholder="Enter title_ru">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Text_ru</label>
                            <input type="text" class="form-control" name="text_ru" placeholder="Enter text_ru">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Director_ru</label>
                            <input type="text" class="form-control" name="director_ru" placeholder="Enter directure_ru">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Awards_ru</label>
                            <input type="text" class="form-control" name="awards_ru" placeholder="Enter awards_ru">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

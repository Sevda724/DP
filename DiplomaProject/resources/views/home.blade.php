@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h2>Insert data into Database</h2>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{ url('insert-data') }}" method="POST">--}}
{{--                        {{ csrf_field() }}--}}
{{--                        <div class="mb-3">--}}
{{--                            <label class="form-label">Title</label>--}}
{{--                            <input type="text" class="form-control" name="title" placeholder="Enter title">--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label class="form-label">Category</label>--}}
{{--                            <input type="text" class="form-control" name="category" placeholder="Enter category">--}}
{{--                        </div>                                <div class="mb-3">--}}
{{--                            <label class="form-label">Description</label>--}}
{{--                            <input type="text" class="form-control" name="description" placeholder="Enter description">--}}
{{--                        </div>                                <div class="mb-3">--}}
{{--                            <label class="form-label">Photo</label>--}}
{{--                            <input type="text" class="form-control" name="photo" placeholder="Enter link to photo">--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome back!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

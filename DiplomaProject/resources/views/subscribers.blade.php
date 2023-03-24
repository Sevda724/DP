@extends('layouts.app')

@section('head')
    <style>
        .subscribers {
            max-height: 300px;
            overflow-y: scroll;
        }

        .subscribers ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .subscribers li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .subscribers li:last-child {
            border-bottom: none;
        }

        .subscribers li span {
            flex-grow: 1;
            margin-right: 10px;
        }

        .subscribers li button {
            background-color: #d9534f;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif

                <span>
                <h2 style="text-align: center; padding: 5px">Subscribers: ({{ $subscribers->count() }})</h2>
            </span>
                <div class="card">
                    <div class="subscribers">
                        <ul>
                            @foreach ($subscribers as $subscriber)
                                <li>{{ $subscriber->id }} - {{ $subscriber->email }}
                                    <form method="POST" action="{{ route('subscribers.destroy', $subscriber->id) }}" onsubmit="return confirm('Are you sure?')">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

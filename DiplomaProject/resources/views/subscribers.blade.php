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
                <h2 style="text-align: center; padding: 5px">{{__('local.Subscribers:')}} ({{ $subscribers->count() }})</h2>
            </span>
                <div class="card">
                    <div class="subscribers">
                        <ul>
                            @foreach ($subscribers as $subscriber)
                                <li>{{ $subscriber->id }} - {{ $subscriber->email }}
                                    <button type="button" value="{{ $subscriber->id }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $subscriber->id }}" style="margin-left: 10px">{{__('local.Delete')}}</button>

                                    <div class="modal fade" id="deleteModal{{ $subscriber->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModal{{ $subscriber->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModal{{ $subscriber->id }}Label">{{__('local.Delete Subscriber')}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {{__('local.Are you sure you want to delete this subscriber?')}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">{{__('local.Cancel')}}</button>
                                                    <form action="{{ route('subscribers.destroy', $subscriber->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">{{__('local.Delete')}}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

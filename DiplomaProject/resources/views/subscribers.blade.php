@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="subscribers">
                    <span>
                        <h2 style="text-align: center; padding: 5px">Subscribers: (<?php  $subscribers = DB::table('subscribers')->get()->reverse(); echo count($subscribers); ?>)</h2>
                    </span>
                    <ul>
                        <?php
                        use Illuminate\Support\Facades\DB;

                        $subscribers = DB::table('subscribers')->get()->reverse();

                        foreach ($subscribers as $subscriber) {
                            echo '<li>' . $subscriber->id . ' - ' . $subscriber->email . '
                    <form method="POST" action="/subscribers/' . $subscriber->id . '" onsubmit="return confirm(\'Are you sure?\')">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Delete</button>
                        ' . csrf_field() . '
                    </form>
                </li>';
                        }
                        ?>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection

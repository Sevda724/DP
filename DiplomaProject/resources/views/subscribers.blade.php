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
                    <h2>Subscribers</h2>
                    <ul>
                        <?php
                        use Illuminate\Support\Facades\DB;

                        $subscribers = DB::table('subscribers')->get();

                        foreach ($subscribers as $subscriber) {
                            echo '<li>' . $subscriber->id . ' - ' . $subscriber->email . '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('client.layouts.master')
@section('title', 'Điểm đến')
@section('content')
    <section class="space">
        <div class="container">
            <div class="th-sort-bar">
                @include('client.destination.components.sort-bar')
            </div>
        </div>
    </section>
@endsection

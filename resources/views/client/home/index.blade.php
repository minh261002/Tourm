@extends('client.layouts.master')
@section('title', 'Tourm - Dịch vụ lưu trú và du lịch')
@section('content')
    <div id="preloader" class="preloader ">
        <div class="preloader-inner">
            <img src="assets/img/logo3.svg" alt="">
        </div>

        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="T" class="characters">T </span>

                    <span preloader-text="O" class="characters">O </span>

                    <span preloader-text="U" class="characters">U </span>

                    <span preloader-text="R" class="characters">R </span>

                    <span preloader-text="M" class="characters">M </span>
                </div>
            </div>
        </div>

    </div>
    @include('client.home.components.hero')
    @include('client.home.components.booking')
    @include('client.home.components.category')
    @include('client.home.components.destination')
    @include('client.home.components.about')
    @include('client.home.components.services')
    @include('client.home.components.gallery')
    @include('client.home.components.testimonial')
    @include('client.home.components.counter')
    @include('client.home.components.brand')
    @include('client.home.components.blog')
@endsection

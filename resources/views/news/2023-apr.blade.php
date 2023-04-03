@extends('layouts.app-lava')

@section('title', 'Newsletter | Studio Seventeen')
{{--@section('description', '')--}}

@section('content')

    <x-banner/>
    <x-heading page="News"/>

    <div class="bg-white">
        <div class="container pb-5 pt-5">

            <x-article-show slug="2023-apr" date="April 2023" />

        </div>
    </div>


@endsection

@extends('layouts.app-lava')

@section('title', 'Newsletter | Studio Seventeen')
{{--@section('description', '')--}}

@section('content')

    <x-banner/>
    <x-heading page="News"/>

    <p class="text-center">Click each month to view the full newsletter</p>

    <div class="bg-white">
        <div class="container pb-5 pt-5">
            <div class="card-group">

                <x-article slug="2023-jan" date="January 2023" />
                <div class="card m-3" style="opacity: 0;"></div>
                <div class="card m-3" style="opacity: 0;"></div>
                <div class="card m-3" style="opacity: 0;"></div>

            </div>
        </div>
    </div>


@endsection
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
                <x-article slug="2023-dec" date="December 2023" />
                <x-article slug="2023-nov" date="November 2023" />
                <x-article slug="2023-oct" date="October 2023" />
                <x-article slug="2023-sep" date="September 2023" />
            </div>
            <div class="card-group">
                <x-article slug="2023-may" date="May 2023" />
                <x-article slug="2023-apr" date="April 2023" />
                <x-article slug="2023-mar" date="March 2023" />
                <x-article slug="2023-feb" date="February 2023" />
            </div>
            <div class="card-group">

                <x-article slug="2023-jan" date="January 2023" />
                <div class="card m-3" style="opacity: 0;"></div>
                <div class="card m-3" style="opacity: 0;"></div>
                <div class="card m-3" style="opacity: 0;"></div>

            </div>
        </div>
    </div>


@endsection

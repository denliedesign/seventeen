@extends('layouts.app-lava')

@section('title', 'Newsletter | Studio Seventeen')
{{--@section('description', '')--}}

@section('content')

    <x-banner/>
    <x-heading page="News"/>

    <p class="text-center">Click each month to view the full newsletter</p>

    <div class="bg-white">
        <div class="container pb-5 pt-5">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4"><x-article slug="2026-jan" date="January 2026" />
<x-article slug="2025-dec" date="December 2025" />
<x-article slug="2025-nov" date="November 2025" />
<x-article slug="2025-oct" date="October 2025" />
<x-article slug="2025-sep" date="September 2025" />
<x-article slug="2025-jun" date="June 2025" />
<x-article slug="2025-may" date="May 2025" />
<x-article slug="2025-apr" date="April 2025" />
<x-article slug="2025-mar" date="March 2025" />
<x-article slug="2025-feb" date="February 2025" />
<x-article slug="2025-jan" date="January 2025" />
<x-article slug="2024-dec" date="December 2024" />
<x-article slug="2024-nov" date="November 2024" />
<x-article slug="2024-oct" date="October 2024" />
<x-article slug="2024-sep" date="September 2024" />
<x-article slug="2024-jul" date="July 2024" />
<x-article slug="2024-may" date="May 2024" />
<x-article slug="2024-apr" date="April 2024" />
<x-article slug="2024-mar" date="March 2024" />
<x-article slug="2024-feb" date="February 2024" />

                <x-article slug="2024-jan" date="January 2024"/>
                <x-article slug="2023-dec" date="December 2023"/>
                <x-article slug="2023-nov" date="November 2023"/>
                <x-article slug="2023-oct" date="October 2023"/>
                <x-article slug="2023-sep" date="September 2023"/>
                <x-article slug="2023-may" date="May 2023"/>
                <x-article slug="2023-apr" date="April 2023"/>
                <x-article slug="2023-mar" date="March 2023"/>
                <x-article slug="2023-feb" date="February 2023"/>
                <x-article slug="2023-jan" date="January 2023"/>
            </div>
        </div>
    </div>


@endsection

@extends('layouts.app-lava')
{{--@section('title', 'News Article | Misty\'s Dance Unlimited')--}}
@section('content')

    <x-banner/>

    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('/storage/' . $article->newsPhoto) }}" alt="" class="img-fluid" style="max-width: 600px; height: auto;">
        </div>
        <div class="mb-3">
            <p>{!! $article->newsContent !!}</p>
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <a href="{{ url()->previous() }}"><div class="btn btn-danger shadow" style="width: 175px;">Back</div></a>
        </div>
    </div>

@endsection

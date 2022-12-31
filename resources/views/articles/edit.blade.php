@extends('layouts.app-lava')
{{--@section('title', 'Edit Article')--}}
@section('content')

    <x-banner/>

    <div class="container pb-5">
        <form action="{{ route('articles.update', ['article' => $article]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('articles.form')

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>

@endsection

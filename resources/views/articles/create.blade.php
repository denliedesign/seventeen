@extends('layouts.app-lava')
{{--@section('title', 'Add New Article')--}}
@section('content')

    <x-banner/>

    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <form action="/articles" method="POST" enctype="multipart/form-data">
                    @include('articles.form')

                    <button type="submit" class="btn btn-primary">Add Article</button>
                </form>
            </div>
        </div>
    </div>

@endsection

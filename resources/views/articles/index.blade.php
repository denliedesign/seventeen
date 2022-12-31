@extends('layouts.app-lava')
{{--@section('title', 'News | Misty\'s Dance Unlimited')--}}
{{--@section('description', 'Keep Up To Date With The Latest News From MDU!')--}}
@section('content')

    <x-banner/>
    <x-heading page="Newsletter"/>

    <div class="pb-5">
        @can('update', \App\Article::class)
            <p class="text-center"><a href="/articles/create">Create New Article</a></p>
        @endcan

        <div class="container" id="news">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pb-5">
                @foreach($articles as $article)
                    <div class="col-sm p-2">
                        <div class="card" style="max-width: 400px">
                            <a href="/articles/{{ $article->id }}">
                                <img src="{{ asset('/storage/' . $article->newsPhoto) }}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h4 class="font-fira">{{ $article->newsTitle }}</h4>
                                <p class="card-text">{!! strip_tags(substr($article->newsContent, 0, 125)) . '...' !!}</p>
                            </div>
                            @can('update', \App\Article::class)
                                <div class="card-footer">
                                    <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
                                        <div><a href="/articles/{{ $article->id }}/edit">Edit Article</a></div>
                                        <div class="mx-3">
                                            <form action="/articles/{{ $article->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <button class="btn btn-danger ml-4" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

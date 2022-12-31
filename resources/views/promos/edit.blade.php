@extends('layouts.app-lava')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container pb-5">
        <h3 class="py-5 text-center">Edit Promo</h3>
        <form action="{{ route('promos.update', ['promo' => $promo]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('promos.form')

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>

@endsection

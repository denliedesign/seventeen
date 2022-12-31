@extends('layouts.app-lava')

@section('title', 'Add New Promo')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <h3 class="py-5 text-center">Add New Promo</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="/promos" method="POST" enctype="multipart/form-data">
                    @include('promos.form')

                    <button type="submit" class="btn btn-primary">Add Promo</button>
                </form>
            </div>
        </div>
    </div>

@endsection


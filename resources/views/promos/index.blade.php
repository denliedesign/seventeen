@extends('layouts.app-lava')

@section('content')

    <x-banner/>
    <x-heading page="Promotions"/>

    <div class="bg-white pb-5">
        @can('update', \App\Promo::class)
            <p class="text-center"><a href="promos/create">New Promo</a></p>
        @endcan

        @foreach($promos->reverse() as $promo)
            @if($promo->image)
                <div class="promo-bg p-5">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="{{ asset('/storage/' . $promo->image) }}" alt="" style="max-height: 400px" class="img-fluid">
                        </div>
                    </div>
                    @endif
                    <div class="font-syne" style="font-size: 1.25em;">
                        <h2 class="text-center mt-3 lead fw-bold">{{ $promo->name }}</h2>
                        <div class="container text-center">
                            <p class="text-center">{!! $promo->description !!}</p>
                        </div>
                    </div>
                    @can('update', $promo)
                        <div class="admin-controls d-flex align-items-center justify-content-center">
                            <div><a href="/promos/{{ $promo->id }}/edit">Edit</a></div>

                            <div class="mx-3">
                                <form action="/promos/{{ $promo->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button class="btn btn-danger ml-4" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endcan
                </div>
                @endforeach
                <div class="d-flex justify-content-center pt-2">
                    {{ $promos->links() }}
                </div>
    </div>


    {{--    <div class="banner-wrap d-none d-md-block">--}}
    {{--        <div class="banner"></div>--}}
    {{--    </div>--}}

@endsection

<style>
    .promo-bg:nth-child(even) {
        background: aliceblue;
    }
</style>

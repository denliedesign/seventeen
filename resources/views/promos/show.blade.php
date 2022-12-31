@extends('layouts.app')

@section('content')

    <div class="row">
        <strong>Promo ID</strong><div class="col">{{ $promo->id }}</div>
        <strong>Promo Name</strong><div class="col">{{ $promo->name }}</div>
        <strong>Promo Description</strong><div class="col">{{ $promo->description }}</div>
    </div>

@endsection


@extends('layouts.app-lava')
@section('content')

    <x-banner/>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            @foreach ($events as $event)
                <p>{{ $event->date }}: {{ $event->name }} <a href="{{ route('events.edit', $event->id) }}">Edit</a></p>
            @endforeach

            <form action="/calendar" method="post">
                @csrf
                <label for="date">Date:</label>
                <input type="date" id="date" name="date">
                <br>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <br>
                <button type="submit">Add Event</button>
            </form>
        </div>
    </div>


@endsection

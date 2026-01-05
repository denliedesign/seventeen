@extends('layouts.app-lava')

@section('title', 'Calendar of Events | Studio Seventeen')
@section('description', 'Join In On The Fun & Festivities At Studio Seventeen.')

@section('content')

    <x-banner/>
    <x-heading page="Calendar of Events"/>


    <div class="bg-white pb-5">
        <div class="container" id="calendar">
            <div class="row">
                <div class="col-md">
                    <div>
                            <table class="font-syne table">
{{--                                <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th></th>--}}
{{--                                        <th></th>--}}
{{--                                    </tr>--}}
{{--                                </thead>--}}
                                <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <td>
                                            {{ $event->day->format('M d') }}@if(!empty($event->endday))<span class="text-muted"> - </span>{{ $event->endday->format('M d, Y') }}@endif
                                        </td>
                                        <td class="fw-bold">
                                            {{ $event->happening }}
                                        </td>
                                        <td>
                                            @can('update', $event)
                                                <div class="dropdown pb-3">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Edit Event
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dLabel">
                                                        <div>
                                                            <form action="{{ route('events.update', ['event' => $event]) }}" method="POST" class="p-3">
                                                                @method('PATCH')
                                                                @include('events.form')

                                                                <button class="btn btn-primary" type="submit">Save</button>
                                                            </form>
                                                        </div>
                                                        <div>
                                                            <form action="/events/{{ $event->id }}" method="POST">
                                                                @method('DELETE')
                                                                @csrf

                                                                <button class="btn btn-danger ml-3" type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        @can('update', \App\Event::class)
                            <div class="pt-5">
                                <h2>New Event</h2>
                                <form action="/events" method="POST">
                                    @include('events.form')
                                    <button type="submit" class="btn btn-primary">Add Event</button>
                                </form>
                            </div>
                        @endcan
                    </div>
                </div>
                <div class="col-md">
                    <img src="images/calendar-of-events.jpg" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </div>

@endsection



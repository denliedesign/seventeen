@extends('layouts.app-lava')
@section('content')

    <x-banner/>
    <x-heading page="Schedule"/>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="text-center mb-4">
                <a href="/images/resource-studio-info-kit.pdf" target="_blank"><button class="btn btn-danger btn-lg shadow">View Class Schedule PDF</button></a>
                <a href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank"><button class="btn btn-logo-blue btn-lg shadow mx-3">Register</button></a>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
                <div class="col-sm"><img src="/images/season-6-1.jpg" alt="" class="img-fluid my-3"></div>
                <div class="col-sm"><img src="/images/season-6-2.jpg" alt="" class="img-fluid my-3"></div>
                <div class="col-sm"><img src="/images/season-6-3.jpg" alt="" class="img-fluid my-3"></div>
                <div class="col-sm"><img src="/images/season-6-4.jpg" id="age-1-4" alt="" class="img-fluid my-3"></div>
                <div class="col-sm"><img src="/images/season-6-5.jpg" id="age-5-6" alt="" class="img-fluid my-3"></div>
                <div class="col-sm"><img src="/images/season-6-6.jpg" id="age-7-8" alt="" class="img-fluid my-3"></div>
                <div class="col-sm"><img src="/images/season-6-7.jpg" id="graded-specialty" alt="" class="img-fluid my-3"></div>
                <div class="col-sm"><img src="/images/season-6-8.jpg" alt="" class="img-fluid my-3"></div>
            </div>
            <div class="text-center my-4">
                <a href="/images/resource-studio-info-kit.pdf" target="_blank"><button class="btn btn-danger btn-lg shadow">View Class Schedule PDF</button></a>
                <a href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank"><button class="btn btn-logo-blue btn-lg shadow mx-3">Register</button></a>
            </div>
        </div>
    </div>


@endsection

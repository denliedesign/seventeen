@extends('layouts.app-lava')
@section('content')

    <x-banner/>
{{--    <x-heading page="Recital"/>--}}

    <div class="container pb-5 pt-3">
        <div class="row">
            <div class="col-sm d-flex align-items-center justify-content-center">
                <video poster="/images/recital-poster.png" src="/images/recital.mp4" type="video/mp4" controls="true" class="shadow rounded mb-2" style="max-width: 950px; width: 100%; height: auto;"></video>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                    <div>
                        <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">Recital</h3>
                        <p class="font-syne" style="font-size: 22px;">
                            Welcome to Studio Seventeen's Dance Recital page! We are so excited to showcase the hard work and dedication of our talented dancers.
                            <br><br>
                            Our annual dance recital is a highlight of the year for both our dancers and their families. It is a chance for our students to showcase their progress and share their love of dance with their friends and loved ones.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <p class="font-syne" style="font-size: 22px">
            Each year, we work hard to put on a spectacular show that features a wide range of dance styles and talent. Our dancers have the opportunity to perform solos, duets, and group numbers, and they are always eager to take the stage and show off their skills.
            <br><br>
            In addition to the main recital, we also offer a variety of dance camps and workshops throughout the year, which give our dancers the opportunity to work with guest choreographers and develop their skills in a fun and supportive environment.
            <br><br>
            We believe that dance recitals are an important part of the dance education process, and we are committed to helping our dancers shine on stage. We hope you will join us for one of our upcoming performances and be a part of the Studio Seventeen dance family.
        </p>
    </div>


@endsection

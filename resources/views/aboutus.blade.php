@extends('layouts.app-lava')
@section('content')

    <x-banner/>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <img src="/images/about-us-s17.jpg" alt="" class="img-fluid shadow rounded mb-2">
                </div>
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">About Us</h3>
                    <p class="font-syne" style="font-size: 22px;">
                        At Studio Seventeen, our mission is to provide a welcoming and inclusive environment for dancers of all ages and abilities to learn, grow, and express themselves through the art of dance. We strive to foster a love of dance in our students and to help them reach their full potential as dancers and individuals. Whether they are just beginning their dance journey or are seasoned performers, we are committed to providing high-quality instruction and support to help our students achieve their goals. At Studio Seventeen, we believe that dance has the power to bring people together and inspire joy, and we are committed to sharing this gift with our community.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red-solid py-5" style="position: relative; height: 100%;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <x-instructor name="GinnyAnn Henry" title="Owner/Director" image="staff-ginnyann"/>
                <x-instructor name="Saylor Dronett" title="Administrative Assistant" image="staff-saylor"/>
                <x-instructor name="Nellie Miller" title="Office Staff" image="staff-temp"/>
                <x-instructor name="Kaleigh Belden" title="Office Staff" image="staff-kaleigh"/>
                <x-instructor name="Cheyenne McLarty" title="Teaching Staff" image="staff-cheyenne"/>
                <x-instructor name="Tanya Picard" title="Teaching Staff" image="staff-temp"/>
                <x-instructor name="Margan Ferguson" title="Teaching Staff" image="staff-margan"/>
                <x-instructor name="Karli Choate" title="Teaching Staff" image="staff-karli"/>

        </div>
        <div style="height: 300px;"></div>
        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    </div>

@endsection

@extends('layouts.app')
@section('content')

    <div class="mt-2 mb-4">
        <div class="container">
            <div class="text-center text-white rounded p-4 d-block d-md-none" style="background: #282c2f; font-size: 1.5em;">
                © 2022 Studio Seventeen
                <br> <ion-icon name="navigate"></ion-icon> 3735 N 16th Street, Orange, Tx 77632
                <br> <ion-icon name="call"></ion-icon> 409.330.4230
            </div>
            <div class="text-center text-white rounded p-4 d-none d-md-block" style="background: #282c2f; font-size: 1.5em;">
                © 2022 Studio Seventeen
                &nbsp; <span class="text-muted">/</span> &nbsp; <ion-icon name="navigate"></ion-icon> 3735 N 16th Street, Orange, Tx 77632
                &nbsp; <span class="text-muted">/</span> &nbsp; <ion-icon name="call"></ion-icon> 409.330.4230
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mx-5">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="/images/logo-black.png" alt="studio seventeen logo" class="img-fluid" style="width: 300px; height: auto;">
                    </div>
                    <div class="d-flex justify-content-center align-items-center text-center">
                        <div>
                            <p class="text-center pt-0 mt-3" style="font-size: 1.5em;">
                                <em>
                                    Our website is currently under construction.
                                    <br>A new refresh is coming soon!
                                </em>
                            </p>
                            <p class="text-center pb-0 mb-0" style="font-size: 2.5em;">
                                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/sbiheqdr.json"
                                    trigger="hover"
                                    colors="primary:#121331,secondary:#53c5d2"
                                    style="width:175px;height:175px">
                                </lord-icon>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <a href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank" class="mx-2">
                                <div class="btn btn-lg btn-brand">Register</div>
                            </a>
                            {{--                    <a href="https://app.akadadance.com/customer/login?schoolId=AK235599J" target="_blank" class="mx-2">--}}
                            {{--                        <div class="btn btn-lg btn-outline-primary">Account Login</div>--}}
                            {{--                    </a>--}}
                            <a href="/images/resource-studio-info-kit.pdf" target="_blank" class="mx-2">
                                <div class="btn btn-lg btn-outline-secondary">Studio Info Kit</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center my-3">
                <img src="/images/under-construction.jpg" alt="young ballerina" class="img-fluid rounded shadow" style="width: 90%; height: auto;">
            </div>
        </div>
    </div>


@endsection

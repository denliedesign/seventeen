<div class="bg-dark text-white pb-5 font-syne">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-sm-4 mt-3">
                    <p class="lead">CONTACT</p>
                    <ul class="list-group" id="footer-list">
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="navigate"></ion-icon>
                            3735 N 16th Street, Orange, TX 77632
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="call"></ion-icon>
                            (409)330-4230
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="mail"></ion-icon>
                            info@dancestudioseventeen.com
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-3">
                    <p class="lead">SOCIAL</p>
                    <div class="d-flex d-inline">
                        <div class="d-inline">
                            <a class="nav-link text-white p-0" href="https://www.facebook.com/dancestudioseventeen/" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-white p-0 mx-3" href="https://www.instagram.com/studio.seventeen/" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <p class="lead">MORE LINKS</p>
                    <div class="row">
                        <div class="col-sm">
                            <ul class="list-group" id="footer-list">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/aboutus">About Us</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/classes">Classes</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/events">Calendar of Events</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group" id="footer-list">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/recital">Recital</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/promos">Promotions</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/news">News</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group" id="footer-list">
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="/studio">Studio</a>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none txt-blue" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023">My Account/Register</a>
                                </li>
                                @guest
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                                    </li>
                                @else
                                    <li class="list-group-item px-0 border-0 dropdown">
                                        <a class="text-decoration-none txt-blue" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="bottom" class="bg-dark text-white-50 text-center pt-3 font-syne">
    © 2023 Studio Seventeen
</div>
<p id="credit" class="bg-dark text-center pb-3 m-0 font-syne">
    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
</p>
<div id="bottom"></div>

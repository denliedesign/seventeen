@extends('layouts.app-lava')
@section('content')

    <x-banner/>
    <x-heading page="Class Descriptions"/>

    <div class="bg-white">
        <div class="container pb-5 pt-5">

            <div class="py-2">
                <h2 class="text-center">Classes</h2>
                <div class="d-flex justify-content-center">
                    <ul class="nav pt-2 pb-5">
                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-1" href="#age-6-18">6-18 Months</a></li>
                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-2" href="#age-18-2">18 Months - 2 Year Olds</a></li>
                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-3" href="#age-2">2 Year Olds</a></li>
                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-4" href="#age-3-4">3-4 Year Olds</a></li>
                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-5" href="#age-5-6">5-6 Year Olds</a></li>
                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-1" href="#age-7-8">7-8 Year Olds</a></li>
                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-2" href="#graded">Graded Technique (Age 9+)</a></li>
                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-3" href="#specialty">Specialty Classes</a></li>
                    </ul>
                </div>
            </div>
{{--            <div class="py-2">--}}
{{--                <h2 class="text-center">Graded Technique (Age 9+)</h2>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <ul class="nav pt-2 pb-5">--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-1" href="#graded-ballet-1">Ballet 1</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-2" href="#graded-jazz-1">Jazz 1</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-3" href="#graded-tap-1">Tap 1</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-4" href="#graded-ballet-2">Ballet 2</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-5" href="#graded-jazz-2">Jazz 2</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-1" href="#graded-tap-2">Tap 2</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="py-2">--}}
{{--                <h2 class="text-center">Specialty Classes</h2>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <ul class="nav pt-2 pb-5">--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-1" href="#specialty-lyrical-1">Lyrical 1</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-2" href="#specialty-hiphop-1">Hip Hop 1</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-3" href="#specialty-acro-1">Acro 1</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-4" href="#specialty-lyrical-2">Lyrical 2</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link mx-1 rounded shadow text-dark outline-shade-5" href="#specialty-hiphop-2">Hip Hop 2</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div id="age-6-18" class="text-center">
                <p class="lead mb-0" style="font-size: 2em;">Programs for 6-18 Months</p>
                <div class="d-flex justify-content-center">
                    <ul class="nav pt-3 p1-2 text-center">
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link mx-1 rounded shadow text-white fill-shade-1" href="/images/resource-studio-info-kit.pdf" target="_blank">DOWNLOAD SCHEDULE</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link mx-1 rounded shadow text-dark outline-shade-1" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank">REGISTER</a>
                        </li>
                    </ul>
                </div>
                <x-program color="1" name="Wiggle Wednesdays" description="Designed for babies and toddlers to learn, grow, explore and practice social skills." />
            </div>
            <div id="age-18-2" class="text-center mt-5">
                <p class="lead mb-0" style="font-size: 2em;">Programs for 18 Months - 2 Year Olds</p>
                <div class="d-flex justify-content-center">
                    <ul class="nav pt-3 p1-2 text-center">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link mx-1 rounded shadow text-white fill-shade-2" href="/images/resource-studio-info-kit.pdf" target="_blank">DOWNLOAD SCHEDULE</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark outline-shade-2" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank">REGISTER</a>
                    </li>
                </ul>
                </div>
                <x-program color="2" name="Boppin' Babies" description="A creative movement dance class for 18 months - 2 year olds to develop gross motor coordination using music, props and more!" />
            </div>
            <div id="age-2" class="text-center mt-5">
                <p class="lead mb-0" style="font-size: 2em;">Programs for 2 Year Olds</p>
                <div class="d-flex justify-content-center">
                    <ul class="nav pt-3 p1-2 text-center">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link mx-1 rounded shadow text-white fill-shade-3" href="/images/resource-studio-info-kit.pdf" target="_blank">DOWNLOAD SCHEDULE</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark outline-shade-3" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank">REGISTER</a>
                    </li>
                </ul>
                </div>
                <x-program color="3" name="Twirling Tots" description="A creative movement class for 2 year olds to enhance gross motor coordination and listening skills through music, props, activities and dance." />
                <x-program color="3" name="AcroTots" description="Tumble and twist with us in this intro to acro add-on class. Students are required to take Twirling Tots in addition to this class." />
            </div>
            <div id="age-3-4" class="text-center mt-5">
                <p class="lead mb-0" style="font-size: 2em;">Programs for 3-4 Year Olds</p>
                <div class="d-flex justify-content-center">
                    <ul class="nav pt-3 p1-2 text-center">
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link mx-1 rounded shadow text-white fill-shade-4" href="/images/resource-studio-info-kit.pdf" target="_blank">DOWNLOAD SCHEDULE</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link mx-1 rounded shadow text-dark outline-shade-4" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank">REGISTER</a>
                        </li>
                    </ul>
                </div>
                <x-program color="4" name="Tippy Toes" description="A creative movement class for 3 year olds that helps develop gross motor skills, listening skills and musicality. This class follows the American Ballet Theatre® National Training Curriculum." />
                <x-program color="4" name="Tutus for Tots" description="A creative movement class for 4 year olds that helps develop gross motor skills, listening skills and musicality. This class follows the American Ballet Theatre® National Training Curriculum." />
                <x-program color="4" name="AcroTots" description="Tumble and twist with us in this intro to acro add-on class. Students are required to take Tippy Toes or Tutus for Tots in addition to this class." />
                <x-program color="4" name="Tiny Tappers" description="An introductory tap class for 3-4 year olds to explore sound, rhythm and musicality." />
                <x-program color="4" name="Hippity Hop" description="Bounce along to the beat in this introductory Hip Hop class for 3-4 year olds." />
            </div>
            <div id="age-5-6" class="text-center mt-5">
                <p class="lead mb-0" style="font-size: 2em;">Programs for 5-6 Year Olds</p>
                <div class="d-flex justify-content-center">
                    <ul class="nav pt-3 p1-2 text-center">
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link mx-1 rounded shadow text-white fill-shade-5" href="/images/resource-studio-info-kit.pdf" target="_blank">DOWNLOAD SCHEDULE</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link mx-1 rounded shadow text-dark outline-shade-5" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank">REGISTER</a>
                        </li>
                    </ul>
                </div>
                <x-program color="5" name="Kidlets (5)" description="Introduces the young dancer to the technique of ballet. This class follows the American Ballet Theatre® National Training Curriculum." />
                <x-program color="5" name="Kidance (6)" description="Introduces the young dancer to the technique of ballet. This class follows the American Ballet Theatre® National Training Curriculum." />
                <x-program color="5" name="Kids Jazz" description="Introduces the young dancer to the beginning steps of jazz technique. *Kidlets or Kidance is a requirement for this class." />
                <x-program color="5" name="Taplets" description="Introduces the young dancer to the rhythm of tap." />
                <x-program color="5" name="Kids Hip Hop 1" description="Dance along to the beat in this beginning hip hop class for kids." />
                <x-program color="5" name="Acro Kids 1" description="Tumble and twist with us in this beginner acro class. *Students are required to take Ballet in addition to this class." />
            </div>
            <div id="age-7-8" class="text-center mt-5">
                <p class="lead mb-0" style="font-size: 2em;">Programs for 7-8 Year Olds</p>
                <div class="d-flex justify-content-center"><ul class="nav pt-3 p1-2 text-center">
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link mx-1 rounded shadow text-white fill-shade-1" href="/images/resource-studio-info-kit.pdf" target="_blank">DOWNLOAD SCHEDULE</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link mx-1 rounded shadow text-dark outline-shade-1" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank">REGISTER</a>
                        </li>
                    </ul></div>
                <x-program color="1" name="Beginning Ballet" description="Introduces the young dancer to the technique of ballet. This class follows the American Ballet Theatre® National Training Curriculum." />
                <x-program color="1" name="Beginning Jazz" description="Introduces the young dancer to the beginning steps of jazz technique. *Beginning Ballet is a requirement for this class." />
                <x-program color="1" name="Building Ballet" description="Builds and develops beginning ballet skills.This class follows the American Ballet Theatre® National Training Curriculum." />
                <x-program color="1" name="Building Jazz" description="Builds and develops beginning jazz skills. *Building Ballet is a requirement for this class." />
                <x-program color="1" name="2nd/3rd Tap" description="Introduces the young dancer to the rhythm of tap." />
                <x-program color="1" name="2nd/3rd Lyrical" description="Dancers learn the beauty of lyrical dance through beginner combinations and across the floor sequences. *Beginning or Building Ballet is a requirement for this class." />
                <x-program color="1" name="Acro Kids 1" description="Tumble and twist with us in this beginner/intermediate acro class. *Students are required to take Ballet in addition to this class." />
                <x-program color="1" name="Kids Hip Hop 2" description="Move and groove with us in this beginner hip hop class for kids." />
            </div>

            <div id="graded" class="text-center mt-5">
                <p class="lead mb-0" style="font-size: 2em;">Graded Technique (Age 9+)</p>
                <div class="d-flex justify-content-center">
                    <ul class="nav pt-3 p1-2 text-center">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link mx-1 rounded shadow text-white fill-shade-2" href="/images/resource-studio-info-kit.pdf" target="_blank">DOWNLOAD SCHEDULE</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark outline-shade-2" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank">REGISTER</a>
                    </li>
                </ul>
                </div>
                <x-program color="2" name="Ballet 1" description="Dancers will build their ballet vocabulary and learn new skills through barre and center exercises. This class follows the American Ballet Theatre® National Training Curriculum." />
                <x-program color="2" name="Jazz 1" description="Dancers will build on their jazz technique and be introduced to combinations and across the floor sequences." />
                <x-program color="2" name="Tap 1" description="Dancers will build on their tap technique through new exercises and combinations." />
                <x-program color="2" name="Ballet 2" description="Dancers will build their ballet vocabulary and learn new skills through barre and center exercises. This class follows the American Ballet Theatre® National Training Curriculum." />
                <x-program color="2" name="Jazz 2" description="Dancers will build on their jazz technique and be introduced to new combinations and across the floor sequences." />
                <x-program color="2" name="Tap 2" description="Dancers will build on their tap technique through new exercises and combinations." />
            </div>

            <div id="specialty" class="text-center mt-5">
                <p class="lead mb-0" style="font-size: 2em;">Specialty Classes</p>
                <div class="d-flex justify-content-center">
                    <ul class="nav pt-3 p1-2 text-center">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link mx-1 rounded shadow text-white fill-shade-3" href="/images/resource-studio-info-kit.pdf" target="_blank">DOWNLOAD SCHEDULE</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark outline-shade-3" href="https://app.thestudiodirector.com/studioseventeen/portal.sd?page=Enroll&meth=search&SEASON=Fall+2022%2F2023" target="_blank">REGISTER</a>
                    </li>
                </ul>
                </div>
                <x-program color="3" name="Lyrical 1" description="Dancers learn the beauty of lyrical dance through combinations and across the floor sequences. *Ballet 1 is a requirement for this class." />
                <x-program color="3" name="Hip Hop 1" description="Dancers build their hip hop style through center and across the floor combinations." />
                <x-program color="3" name="Acro 1" description="Tumble and twist with us in this intermediate/advanced acro class. *Students are required to take Ballet in addition to this class." />
                <x-program color="3" name="Lyrical 2" description="Dancers learn the beauty of lyrical dance through combinations and across the floor sequences. *Ballet 2 is a requirement for this class." />
                <x-program color="3" name="Hip Hop 2" description="Dancers build their hip hop style through center and across the floor combinations." />
            </div>


        </div>
    </div>

@endsection

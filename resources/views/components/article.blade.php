<div class="card m-3 shadow rounded">
    <a class="blog-card-img" style="text-decoration: none; color: black;" href="/news/{{ $slug }}">
        <img src="/images/{{ $slug }}.jpg" class="card-img-top d-none d-md-block" alt="" style="width: 100%; height: 400px; object-fit: cover; object-position: top;">
        <img src="/images/{{ $slug }}.jpg" class="card-img-top d-block d-md-none" alt="" style="width: 100%; height: 200px; object-fit: cover; object-position: top;">
    </a>
    <div class="card-body">
        <h5 class="text-center card-title font-syne" style="font-size: 22px;">{{ $date }}</h5>
{{--        <p class="card-text text-center">--}}
{{--            Click to see the full newsletter.--}}
{{--        </p>--}}
    </div>
{{--    <div class="card-footer">--}}
{{--        <small class="text-muted">January 2023</small>--}}
{{--    </div>--}}
</div>

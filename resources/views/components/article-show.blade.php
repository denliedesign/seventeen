<h3 class="text-center font-syne">{{ $date }}</h3>
<div class="my-3 d-flex justify-content-center">
    <a href="/images/{{ $slug }}.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-danger btn-lg mt-2">Read The PDF</div></a>
</div>
<div class="py-3 d-flex justify-content-center">
    <img src="/images/{{ $slug }}.jpg" alt="blog preview" class="img-fluid">
</div>
<div class="py-3 d-flex justify-content-center">
    <img src="/images/{{ $slug }}-2.jpg" alt="blog preview" class="img-fluid">
</div>
<div class="mb-5 d-flex justify-content-end">
    <a href="{{ url()->previous() }}"><div class="btn btn-danger shadow" style="width: 175px;">Back</div></a>
</div>

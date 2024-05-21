@props(['case'])

<div class="item">
    <div class="case img d-flex align-items-center justify-content-center"
        style="background-image: url('{{ $case->image_url }}');">
        <div class="text text-center">
            <h3><a href="#">{{ $case->title }}</a></h3>
            <span>
                {{ $case->subtitle }}
            </span>
        </div>
    </div>
</div>

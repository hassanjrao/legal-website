@props(['attorney'])

<div class="col-lg-3 col-sm-6">
    <div class="block-2 ftco-animate">
        <div class="flipper">
            <div class="front"
                style="background-image: url('{{ $attorney->image_url }}');">
                <div class="box">
                    <h2>
                        {{ $attorney->name }}
                    </h2>
                    <p>
                        {{ $attorney->position }}
                    </p>
                </div>
            </div>
            <div class="back">
                <!-- back content -->
                <blockquote>
                    <p>&ldquo;
                        {{ $attorney->description }}
                         &rdquo;
                    </p>
                </blockquote>
                <div class="author d-flex">
                    <div class="image align-self-center">
                        <img src="{{ $attorney->image_url }}" alt="">
                    </div>
                    <div class="name align-self-center ml-3">
                        {{ $attorney->name  }}
                        <span class="position">
                            {{ $attorney->position }}
                            </span></div>
                </div>
            </div>
        </div>
    </div>
</div>

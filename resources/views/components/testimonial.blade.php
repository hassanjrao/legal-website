
@props(['testimonial'])

        <div class="item">
            <div class="testimony-wrap py-4">
                <div class="text">
                    <p class="mb-4">
                        {{ $testimonial->description }}
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="user-img"
                            style="background-image: url('{{ $testimonial->image_url }}');">
                        </div>
                        <div class="pl-3">
                            <p class="name">
                                {{ $testimonial->name }}
                            </p>
                            <span class="position">
                                {{ $testimonial->title }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

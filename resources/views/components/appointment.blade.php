@props(['homePage'])

<section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img" id="appointment"
style="background-image: url('{{ $homePage->appointment_bg_image_url }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white">
                <span class="subheading">
                    {{ $homePage->appointment_subtitle }}
                </span>
                <h2 class="mb-4">
                    {{ $homePage->appointment_title }}
                </h2>
                <form action="{{ route('contact.submit') }}" class="consultation" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" required name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" required name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" required name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" required  cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send message" class="btn btn-dark py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

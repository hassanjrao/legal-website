@extends('layouts.front')

@section('content')
    <x-hero :homePage="$homePage" :pageTitle="'Attorneys'" />

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-lg-12 ftco-animate fadeInUp ftco-animated">

                    <div class="text-center">
                        <h2 class="mb-3">{{ $blog->title }}</h2>
                    </div>

                    <div>
                        {!! $blog->description !!}
                    </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5">{{ $blog->comments->count() }} Comments</h3>
                        <ul class="comment-list">
                            @foreach ($blog->comments()->latest()->get() as $comment)
                                <li class="comment">

                                    <div class="comment-body">
                                        <h3>{{ $comment->name }}</h3>
                                        <div class="meta">
                                            {{ $comment->created_at->diffForHumans() }}
                                        </div>
                                        <p>
                                            {{ $comment->message }}
                                        </p>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="{{ route('blogs.comment', $blog->id) }}" method="POST" class="p-5 bg-light">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" name="name" required class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" name="email" required class="form-control" id="email">
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" required id="message" cols="30" rows="10" class="form-control"></textarea>
                                    @error('message')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->


            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('img').addClass('img-fluid');
    });
</script>
@endsection

@extends('layouts.app')

@section('title', 'Blog Post')

@section('header')
<!-- Start Bradcaump area -->
@include('layouts.partials.bradcaump')
<!-- End Bradcaump area -->
@endsection

@section('content')
<!-- Start Blog Area -->
<section class="htc__blog__area bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="ht__blog__wrap blog--page clearfix">
                <!-- Start Single Blog -->
                @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{ asset('/storage/' . $post->image) }}" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <div class="bl__date">
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            <h2><a href="blog-details.html">{{ $post->title }}</a></h2>
                            {{ Str::limit($post->excerpt, 200) }}
                            <div class="blog__btn">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Blog -->
            </div>
        </div>
        <!-- Start PAgenation -->
        <div class="row">
            <div class="col-xs-12">
                {{ $posts->links() }}
            </div>
        </div>
        <!-- End PAgenation -->
    </div>
</section>
<!-- End Blog Area -->
<!-- Start Brand Area -->
@include('layouts.partials.brand')
<!-- End Brand Area -->
@endsection
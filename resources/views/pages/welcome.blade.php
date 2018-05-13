@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Welcome to MSO Blog!</h1>
                  <p class="lead">Thank you so much for visiting. This is our website built with Laravel<br>by Mirpulatjon, Sardorbek and Otabek(MSO).</p>
                </div>
            </div>
        </div> {{-- Qolgani main o'zida, bo'ldi--}}

        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                @endforeach

            </div>

        </div>
@stop
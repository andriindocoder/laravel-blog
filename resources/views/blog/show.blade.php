@extends('layouts.main')
@section('content')
<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4">{{ $post->title }}</h1>

      <!-- Author -->
      <p class="lead">
        by
        <a href="{{ route('author',$post->author->slug) }}">{{ $post->author->name }}</a>
      </p>

      <hr>

      <!-- Date/Time -->
      <p>Posted {{ $post->date }}</p>

      <hr>
      @if($post->image_url)
      <!-- Preview Image -->
      <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
      <hr>
      @endif

      <!-- Post Content -->
      <p class="lead">{!! $post->body_html !!}</p>

      <hr>
      
      <article class="post-author padding-10">
      <div class="media">
        <div class="media-center">
          <a href="#">
            <img src="/img/author.jpg" alt="Author 1" class="media-object">
          </a>
        </div>
        <div class="media-body" style="padding-left: 10px;">
          <h4 class="media-heading"><a href="{{ route('author', $post->author->slug) }}">{{ $post->author->name }}</a></h4>
          <div class="post-author-count">
            <a href="{{ $post->author->slug }}">
              <i class="fa fa-clone"></i>
              <?php $postCount = $post->author->posts->count();?>
              {{ $postCount }} {{ str_plural('post', $postCount) }}
            </a>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quas incidunt eligendi. Repellendus.</p>
        </div>
      </div>
      </article>
      <br>
      

    </div>

    @include('layouts.sidebar')

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
@endsection
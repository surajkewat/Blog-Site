@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        @if(count($posts)>0)
            <!-- Blog Entries Column -->
                <div class="col-md-8">
                    <h1 class="my-4">Explore Blogs</h1>
                    <!-- Blog Post -->
                    @foreach ($posts as $post)
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{ asset('uploads/highlights/'.$post->image) }}"  style="object-fit: cover;width: 100%;height: 150px;" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">{{$post->title}}</h2>
                                <p class="card-text">{{ $post->body }}</p>
                                <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on {{ $post->created_at}} by
                                {{$post->uname}}
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                    {{ $posts->links('pagination::bootstrap-4') }} 
                    </div>
                </div>

            <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                <a href="/index/1">Education</a>
                                </li>
                                <li>
                                <a href="/index/2">History</a>
                                </li>
                                <li>
                                <a href="/index/3">Politics</a>
                                </li>
                                <li>
                                    <a href="/index">All</a>
                                </li>
                            </ul>
                            </div>
                            <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                <a href="/index/4">Science</a>
                                </li>
                                <li>
                                <a href="/index/5">Sports</a>
                                </li>
                                <li>
                                <a href="/index/6">Technology</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                
        @else
            <div class="col-md-8">
                <h1 class="my-4">Explore Blogs</h1>
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">No Blogs Found</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        @endif
    </div>

    <!-- /.row -->
</div>

  <!-- /.container -->

  <!-- Footer -->
  {{-- <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">My Website 2020</p>
    </div>
    <!-- /.container -->
  </footer> --}}

  <!-- Bootstrap core JavaScript -->
  
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

@endsection
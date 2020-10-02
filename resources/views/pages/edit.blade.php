@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm bg-white rounded " style="height: 100%; width: 100%;">
    <form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data" class="form-group" style="margin-top:1rem;align:center;padding:0 5rem 0 5rem;">
            {{ csrf_field() }} 
            @method('PUT')
                <h1 style="">Edit Blog</h1>
                <div class="row" style="padding:1rem;">
                <input type="text" name="title" class="col form-control" id="title"  placeholder="Article Title" value="{{$post->title}}" required>
                    <select id="category" name="category" class="col form-control" style="margin-left:2rem;" required>
                        @if ($post->cat == 1)
                            <option value="{{$post->cat}}"  selected = "selected" >Education</option>
                        @elseif ($post->cat == 2)
                            <option value="{{$post->cat}}"  selected = "selected" >History</option>
                        @elseif ($post->cat ==3)
                            <option value="{{$post->cat}}"  selected = "selected" >Politics</option>
                        @elseif ($post->cat ==4)
                            <option value="{{$post->cat}}"  selected = "selected">Science</option>
                        @elseif ($post->cat ==5)
                            <option value="{{$post->cat}}"  selected = "selected">Sports</option>
                        @elseif ($post->cat==6)
                            <option value="{{$post->cat}}"  selected = "selected">Technology</option>
                        @endif
                        <option value="1">Education</option>
                        <option value="2">History</option>
                        <option value="3">Politics</option>
                        <option value="4">Science</option>
                        <option value="5">Sports</option>
                        <option value="6">Technology</option>
                    </select>
                </div>
                <textarea class="form-control" name ="body" id="content" rows="8" placeholder="Content"  style="margin-bottom:1rem;" required>{{$post->body}} </textarea>
                
                <h3 style="margin-top: 20px">Previous Image</h3>
                <img class="card-img-top" id="prevImage" src="{{ asset('uploads/highlights/'.$post->image) }}"  style="object-fit: cover;width: 100%;height: 150px; margin-top:10px; margin-bottom:10px;" alt="Card image cap">
                

                <div class="custom-file" style="margin-top: 2%; margin-bottom:2%">
                    
                <input type="file" name ="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose New Image</label>
                </div>
                
                {{-- {{Form::hidden('_method','PUT')}} --}}
                <button class="btn btn-info" type="submit" name="submit">Update</button>
        </form>
    </div>
</div>
@endsection

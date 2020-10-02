@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm bg-white rounded " style="height: 100%; width: 100%;">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="form-group" style="margin-top:6rem;align:center;padding:0 8rem 0 8rem;">
            {{ csrf_field() }}  
                <h2 style="margin-bottom:2rem;">Create New Article</h2>
                <div class="row" style="padding:1rem;">
                    <input type="text" name="title" class="col form-control" id="title"  placeholder="Article Title" required>
                    <select id="category" name="category" class="col form-control" style="margin-left:2rem;" required>
                        <option value="-1" disabled selected hidden>Select a category</option>
                        <option value="1">Education</option>
                        <option value="2">History</option>
                        <option value="3">Politics</option>
                        <option value="4">Science</option>
                        <option value="5">Sports</option>
                        <option value="6">Technology</option>
                    </select>
                </div>
                <textarea class="form-control" name ="body" id="content" rows="8" placeholder="Content" style="margin-bottom:1rem;" required></textarea>
                
                <div class="custom-file" style="margin-top: 2%; margin-bottom:2%">
                    <input type="file" name ="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <button class="btn btn-info" type="submit" name="submit">Create</button>
        </form>
    </div>
</div>
@endsection

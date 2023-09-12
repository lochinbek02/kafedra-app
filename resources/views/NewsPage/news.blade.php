@extends('app')

@section('content')
<div class="container text-center ">
    <h2 >Yangilik qo'shish</h2>
    <div class="row ">
    <form action="{{ route('news.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3 bg-info-subtle">
            <input type="file" class="form-control text-info" id="rasm" name="rasm">
        </div>

        <div class="input-group mb-3 bg-info-subtle">
            <span class="input-group-text text-info" id="basic-addon1">Title</span>
            <input type="text" class="form-control" placeholder="Title" id="title" aria-label="Title" aria-describedby="basic-addon1" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3 input-group bg-info-subtle">
            <span class="input-group-text text-info">Content</span>
            <textarea aria-label="Content" class="form-control" name="content" id="content">{{ old('content') }}</textarea>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-success">Submit</button>
            <button type="button" class="btn btn-outline-primary">Update</button>
        </div>
    </form>

        
    </div>
</div>

@endsection
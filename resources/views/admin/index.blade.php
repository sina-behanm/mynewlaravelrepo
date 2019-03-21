@extends('layouts.master')

@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    @foreach($posts as $post)
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p><strong>{{$post->title}}</strong>
            <p>{{$post->content}}</p>
            <div  style="margin-left: 83%">
                <a href="{{ route('admin.edit', ['id' => $post->id]) }}"><button class="btn btn-outline-warning" style="margin-right: 8px">Edit</button></a>
                <a href="{{ route('admin.delete', ['id' => $post->id]) }}"><button class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@extends('layouts.master')

@section('content')
    @include('partial.error')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.create') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="tag" name="tag">
                </div>
                @foreach($tags as $tag)
                    <div class="checkbox">
                        <lable>
                            <input type="checkbox" name="tags[]" value="{{$tag -> id}}">
                            {{$tag->name}}
                        </lable>
                    </div>
                @endforeach
                {{ csrf_field()  }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
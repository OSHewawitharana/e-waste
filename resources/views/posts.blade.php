@extends('layouts.main')
@section('title', 'Create A New Post')
@section('body')
    {{--<div class="container col-md-8 col-md-offset-2">--}}
    {{--<div class="well well bs-component">--}}
    {{--<form class="form-horizontal" method="POST" action='PostsController@store'>--}}
    {{----}}
    {{--@include('partials.messages')--}}



    {{--<input type="hidden" name="_token" value="{!! csrf_token() !!}">--}}
    {{--<fieldset>--}}
    {{--<legend>Create a new post</legend>--}}
    {{--<div class="form-group">--}}
    {{--<label for="title" class="col-lg-2 control-label">Title</label>--}}
    {{--<div class="col-lg-10">--}}
    {{--<input type="text" class="form-control" id="title" placeholder="Title" name="title">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="content" class="col-lg-2 control-label">Content</label>--}}
    {{--<div class="col-lg-10">--}}
    {{--<textarea class="form-control" rows="3" id="content" name="content"></textarea>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<div class="col-lg-10 col-lg-offset-2">--}}
    {{--<button type="reset" class="btn btn-default">Cancel</button>--}}
    {{--<button type="submit" class="btn btn-primary">Submit--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</fieldset>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}





    <div class="container">
        <h1 style="margin-top: 30px;">Create a Post</h1><br>
        <br><br>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                @include('partials.messages')
                {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}

                <div class="form-group">
                    {{ Form::label('attachment', 'Any Attachement', ['class' => 'form-label'] )}}
                    {{ Form::file('image', ['class' => 'dropify'])}}
                </div>

                <div class="form-group">
                    {{ Form::label('title', 'Title of the Post ', ['class' => 'form-label'] )}}
                    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Give a Title', 'id' => 'title']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('content', 'Content of the Post ', ['class' => 'form-label'] )}}
                    {{ Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Give a Description', 'id' => 'content']) }}
                </div>

                <br>
                {{ Form::submit('Post', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('content').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>




@endsection
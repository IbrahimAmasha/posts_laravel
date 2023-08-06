<!DOCTYPE html>
<html lang="en">
<head>
   

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">

 @extends('posts.main')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">

</head>
<body>

@section('content')
    




{{--  --}}

<div class="form-group">

    <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PUT')
        {{-- @method('post') --}}
        <label for="">Title</label> <br>
        <input type="text" name="title" id="" value="{{$post->title}}"> <br> <br>
        <label for="">Created By </label> <br>
        <input type="text" name="by" id=""  value="{{$post->created_by}}"> <br> <br>
        {{-- <input type="text" name="" id=""> --}}
        <input class="btn btn-primary btn-sm" type="submit" value="Edit Post">
    </form>
</div>

{{--  --}}




@endsection


<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>






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

    <form  action="{{route('posts.store')}}" method="POST">
        @csrf
        {{-- @method('post') --}}
        <label for="">Title</label> <br>
        <input type="text" name="title" id=""> <br> <br>
        <label for="">Created By </label> <br>
        <input type="text" name="by" id=""> <br> <br>
        {{-- <input type="text" name="" id=""> --}}
        <input class="btn btn-primary btn-sm" type="submit" value="Add Post">
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
</div>

{{--  --}}




@endsection


<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
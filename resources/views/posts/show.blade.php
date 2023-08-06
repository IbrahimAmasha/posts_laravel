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
    
<table class="table table-blue">
    <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Created By</th>
    <th>Created At</th>
    <th> View Post</th>
    <th> Posted By</th>
    <th> Edit</th>
    <th> Delete</th>
    
</tr>
@foreach ($myposts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->created_by}}</td>
        <td>{{$post->created_at}}</td>
        <td><a href="{{route('posts.show',['post' => $post])}}">View</a></td>
        <td>{{$post->user->name}}</td>

        <td>
            {{-- <a href="{{route('posts.edit/{post}')}}">edit</a> --}}
            {{-- <a href="{{ route('posts.edit', ['post' => $post]) }}">Edit </a> --}}
                <a href="{{ route('posts.edit', ['post' => $post]) }}">
                    <button type="submit" class="btn btn-primary btn-sm" >
                        edit
                    </button>
                </a>

        </td>
        <td>
            {{-- <button type="button" class="btn btn-primary">Primary</button> --}}

            <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>

    <a href="{{route('posts.create')}}"><button type="submit" class="btn btn-danger btn-sm" >Add Post</button> </a>

@endsection


<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
@extends('todo.base')
@section('body')
    <h1>New To Do</h1>
    <h3>Description : </h3>
    <form action="{{route('add_todo')}}" method="post">
        @csrf
        <input type="text" name="desc" id="desc" class = "tab">
        <input type="submit" value ="Add">   
    </form>
@endsection
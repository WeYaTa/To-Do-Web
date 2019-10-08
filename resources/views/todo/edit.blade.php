@extends('todo.base')
@section('body')
    <h1>Edit To Do</h1>
    <h3>Description : </h3>
    <form action="{{route('update_todo',['id'=>$todo->id])}}" method="post">
        @csrf
    <input type="hidden" name="id" value="{{$todo->id}}">
        <input type="text" name="desc" id="desc" class = "tab" value="{{$todo->description}}">
        
        <h3>Status : </h3>
        <input type='hidden' value='0' name='status'>
        @if ($todo->status == 1)
            <input type="checkbox" value ="1" name = "status"class="tab" checked>Done<br><br>
        @else
            <input type="checkbox" value ="1" name = "status"class="tab">Done<br><br>
        @endif
        
        <input type="submit" value ="Edit">   
    </form>
    
@endsection
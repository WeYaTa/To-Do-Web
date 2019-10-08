@extends('todo.base')
@section('body')
    <h1>To Do Details</h1>
    <h3>Description : </h3>
    <h5 class = "tab">{{$todo->description}}</h5>
    <h3>Status :</h3>
    @if ($todo->status == 1)
        <h5 class="tab">Done</h5>
    @else 
        <h5 class="tab">On Progress</h5>
    @endif
    <button onclick="location.href = '{{route('home')}}';" id="button_back">Back</button>
@endsection
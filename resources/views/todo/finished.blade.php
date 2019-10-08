@extends('todo.base')
@section('body')
<h1>To Do</h1>
<button onclick="location.href = '{{route('new_todo')}}';" id="button_new">Add New Todo</button>
    <a href="{{route('home')}}">See UNfinished To DO</a>
    <br><br>
    <table>
        <tr>
            <td>ID</td>
            <td>Description</td>
            <td>Action</td>
        </tr>
    @foreach ($listToDo as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td> <a href="{{route('getbyid', ['id'=>$item->id])}}">{{$item->description}}</a> </td>
            <td>
                <button onclick="location.href = '{{route('edit_todo',['id'=>$item->id])}}';" id="button_edit">Edit</button>
                <button onclick="if(confirmDelete()) location.href = '{{route('delete_todo',['id'=>$item->id])}}';" id="button_delete">Delete</button>
            </td>
        </tr>
    @endforeach
    </table>
    <script>
        function confirmDelete() {
            return confirm("Are you sure to delete this data ?");
        }
    </script>
@endsection
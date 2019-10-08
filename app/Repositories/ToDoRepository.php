<?php

namespace App\Repositories;
use App\ToDo;


class ToDoRepository implements ToDoInterface{
    function create(string $description, $status){
        $newtodo = new ToDo;
        $newtodo->description = $description;
        $newtodo->status = $status;
        $newtodo->save();
    }
    function all(){
        return ToDo::all();
    }
    function finished(){
        return ToDo::all()->where('status',1);
    }
    function unfinished(){
        return ToDo::all()->where('status',0);
    }
    function getById($id){
        return ToDo::findOrFail($id);
    }
    function update($id, string $description,$status){
        ToDo::findOrFail($id)->update(['description'=>$description, 'status'=>$status]);
    }
    function delete($id){
        ToDo::find($id)->delete();
    }
}   
<?php

namespace App\Http\Controllers;
use App\ToDo;
use Illuminate\Http\Request;
use App\Repositories\ToDoRepository;

class ToDoController extends Controller
{
    protected $todoRepo;

    public function __construct(ToDoRepository $repo){
        $this->todoRepo = $repo;
    }

    function index(){
        $listToDo = $this->todoRepo->unfinished();
        return view('todo.index', compact('listToDo'));
    }

    function getById($id){
        $todo =  $this->todoRepo->getById($id);
        return view('todo.detail', compact('todo'));
    }

    function finishedtodo(){
        $listToDo = $this->todoRepo->finished();
        return view('todo.finished', compact('listToDo'));
    }

    function new(){
        return view('todo.new');
    }

    function add(Request $request){
        $this->todoRepo->create($request->desc,0);
        return redirect()->route("home");
    }

    function edit($id){
        $todo =  $this->todoRepo->getById($id);
        return view('todo.edit', compact('todo'));
    }

    function update(Request $request){
        $this->todoRepo->update($request->id, $request->desc, $request->status);
        return redirect()->route("home");
    }

    function delete($id){
        $this->todoRepo->delete($id);
        return back();
    }
}

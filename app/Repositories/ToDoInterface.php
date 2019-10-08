<?php

namespace App\Repositories;
use App\ToDo;


interface ToDoInterface{
    function create(string $description,$status);
    function all();
    function getById($id);
    function update($id, string $description, $status);
    function delete($id);
}   
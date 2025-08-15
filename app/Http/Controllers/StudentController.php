<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return 'display Student list';
    }
    public function store($sid,$name)
    {
        return 'his is to save student data id: ' .$sid . ' name: ' . $name;
    }
    public function update($sid)
    {
        return 'update student data id: ' .$sid;
    }
    public function delete($sid)
    {
        return 'delete student data id: ' .$sid;
    }
//=============================    Private & Public   (Class Type)    ====================================
    private function privateMethod()
    {
        return 'This is a private method';
    }
    public function showPrivateMethod()
    {
        return $this->privateMethod();
    }
//=============================      __construct (Native Method)      ====================================
    public function __construct()
    {
        $this->id=1;
        $this->name='JAKE ANGELO PANSACALA GUINTO';
        $this->contact='09662345431';
    }
    public function showConstructor()
    {
        return "Student ID: " . $this->id . "\nName: " . $this->name . "\nContact No.: " . $this->contact;
    }
//===========================================================================================
    public function __invoke()
    {
        return 'This is the __invoke method of StudentController';
    }
}
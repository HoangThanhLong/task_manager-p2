<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('index');
    }
    public function create(){
        return view('create');
    }
    function delete($id){
        return view('delete', compact('id'));
    }
    function edit($id){
        return view('edit', compact('id'));
    }
    function show($id){
        return view('show', compact('id'));
    }
    function addCustomer(){
        return view('modules.customer.add');
    }
}

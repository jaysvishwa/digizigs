<?php

namespace App\Http\Controllers\Admin\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConnectController extends Controller
{
    
    public function index() {
        return 'connect';
        return view('admin.pages.connect.connect');
    }

   
    public function create() {
        //
    }

   
    public function store(Request $request) {
        //
    }

    
    public function show($id) {
        //
    }

    
    public function edit($id) {
        //
    }

    
    public function update(Request $request, $id) {
        //
    }

    
    public function destroy($id) {
        //
    }
}

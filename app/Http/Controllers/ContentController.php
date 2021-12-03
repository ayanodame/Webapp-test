<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function indexview(){
        return view('index');
    }
    public function create(Request $request){
        $this->validate($request, Content::$rules);
        $form=$request->all();
        Content::create($form);
        return redirect('/todo/create');
    }
    public function createview(){
        $contents=Content::all();
        return view('create',['contents'=>$contents]);
    }
}
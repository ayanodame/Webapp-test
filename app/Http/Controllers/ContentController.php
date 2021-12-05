<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function indexview(){
        $contents=Content::all();
        return view('index',['contents'=>$contents]);
    }
    public function create(Request $request){
        $this->validate($request, Content::$rules);
        $form=$request->all();
        Content::create($form);
        return redirect('/');
    }
    public function createview(){
        $contents=Content::all();
        return view('index',['contents'=>$contents]);
    }
    public function updateview(){
        $contents=Content::all();
        return view('index',['contents'=>$contents]);
    }
    public function update(Request $request){
        $this->validate($request,Content::$rules);
        $form=$request->all();
        unset($form['_token']);
        Content::where('id',$request->id)->update($form);
        return redirect('/');
    }
    public function deleteview(){
        $contents=Content::all();
        return view('index',['contents'=>$contents]);
    }
    public function delete(Request $request){
        Content::find($request->id)->delete();
        return redirect('/');
    }
}
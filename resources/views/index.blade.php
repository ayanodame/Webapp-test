@extends('layouts.default')
<style>
  .TodoList_content input{
    width:420px;
    height:35px;
    border: solid 2px lightgrey;
    border-radius:5px;
  }
  .TodoList_content button{
    background-color:white;
    border: solid 2px #BA55D3;
    border-radius:5px;
    padding:5 10px;
    color:#BA55D3;
    font-size:15px;
    margin-left:100px;
  }
</style>
@section('form')
@if(count($errors)>0)
  @foreach($errors->all() as $error)
  {{$error}}
  @endforeach
@endif
<form action="/" method="post">
@csrf
<div class="TodoList_content">
  <input type="text" name="content">
  <button>追加</button>
</div>
</form>
@endsection
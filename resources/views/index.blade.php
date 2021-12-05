@extends('layouts.default')
<style>
  .TodoList_content input{
    width:550px;
    height:35px;
    border: solid 2px lightgrey;
    border-radius:5px;
  }
  .TodoList_content button{
    background-color:white;
    border: solid 2px #BA55D3;
    border-radius:5px;
    padding:5px 10px;
    color:#BA55D3;
    font-size:15px;
    margin-left:50px;
  }
  .TodoList_content button:hover{
    background:#BA55D3;
    color:white;
    cursor:pointer;
  }
  .TodoList_content {
    padding-bottom:10px;
  }
  .TodoList_table table{
    display:block;
    padding:5px;
  }
  th {
    padding: 5px 10px;
  }
  td {
    padding: 0px 10px;
    text-align: center;
  }
  .TodoList_table input{
    width:300px;
    height:35px;
    margin:10px;
    border: solid 2px lightgrey;
    border-radius:5px;
  }
  .TodoList_update_button{
    background-color:white;
    border: solid 2px orange;
    border-radius:5px;
    color:orange;
    padding:5px 10px;
    font-size:15px;
  }
  .TodoList_update_button:hover{
    background:orange;
    color:white;
    cursor:pointer;
  }
  .TodoList_delete_button{
    background-color:white;
    border: solid 2px #40E0D0;
    border-radius:5px;
    color:#40E0D0;
    padding:5px 10px;
    font-size:15px;
  }
  .TodoList_delete_button:hover{
    background:#40E0D0;
    color:white;
    cursor:pointer;
  }
  .TodoList_delete form{
    margin:0;
  }
  .TodoList_update form{
    margin:0;
  }

</style>
@section('form')
@if(count($errors)>0)
  @foreach($errors->all() as $error)
  <li>
  {{$error}}
  </li>
  @endforeach
@endif
<form action="/" method="post">
@csrf
<div class="TodoList_content">
  <input type="text" name="content">
  <button>追加</button>
</div>
</form>
<div class="TodoList_table">
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach($contents as $content)
  <tr>
  <td>
    {{$content->created_at}}
  </td>
  <td>
    <div class="TodoList_update">
      <form action="/todo/update" method="post">
        @csrf
        <input type="text" name="content" value="{{$content->content}}">
        <input type="hidden" name="id" value="{{$content->id}}">
    </div>
  </td>
  <td>
    <button class="TodoList_update_button">更新</button>
    </form>
  </td>
  <td>
    <div class="TodoList_delete">
        <form action="/todo/delete" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$content->id}}">
        <button class="TodoList_delete_button">削除</button>
      </form>
    </div>
  </td>
  </tr>
  @endforeach
</table>
</div>
@endsection
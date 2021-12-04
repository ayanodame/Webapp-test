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
  .TodoList_button_update{
    background-color:white;
    border: solid 2px orange;
    border-radius:5px;
    color:orange;
    padding:5px 10px;
    font-size:15px;
  }
  .TodoList_button_update:hover{
    background:orange;
    color:white;
    cursor:pointer;
  }
  .TodoList_button_delete{
    background-color:white;
    border: solid 2px #40E0D0;
    border-radius:5px;
    color:#40E0D0;
    padding:5px 10px;
    font-size:15px;
  }
  .TodoList_button_delete:hover{
    background:#40E0D0;
    color:white;
    cursor:pointer;
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
  <tr>
  @foreach($contents as $content)
  <td>
    {{$content->created_at}}
  </td>
  <td>
    <form action="/todo/update" method="post">
    @csrf
    <input type="text" name="content" value="{{$content->content}}">
  </td>
  <td>
    <button class="TodoList_button_update">更新</button>
    </form>
  </td>
  <td>
    <form action="/todo/delete" method="post">
    @csrf
    <button class="TodoList_button_delete">削除</button>
    </form>
  </td>
  </tr>
@endforeach
</table>
</div>
@endsection
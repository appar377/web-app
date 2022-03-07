@extends('layouts.default')
<style>
  h1 {
    font-size: 25px;
  }

  .todo {
    display: flex;
    justify-content: space-between;
  }

  .add__todo {
    width: 70%;
    height: 35px;
    border: 1px solid #dddddd;
    border-radius: 5px;
  }

  .add__button {
    width: 60px;
    height: 35px;
    background-color: white;
    color: pink;
    border: 2px solid pink;
    border-radius: 5px;
  }

  .add__button:hover {
    background-color: pink;
    color: white;
    transition: .3s;
  }

  table {
    width: 100%;
    margin: 0 auto;
    text-align: center;
  }

  th {
    padding: 20px 0;
  }

  td {
    padding: 10px 5px;
  }

  .added {
    width: 100%;
    height: 25px;
    border: 1px solid #dddddd;
    border-radius: 5px;
  }

  .update {
    width: 60px;
    line-height: 35px;
    border: 2px solid orange;
    border-radius: 5px;
    background-color: white;
    color: orange;
  }

  .update:hover {
    color: white;
    background-color: orange;
    transition: .3s;
  }

  .delete {
    width: 60px;
    line-height: 35px;
    border: 2px solid greenyellow;
    border-radius: 5px;
    background-color: white;
    color: greenyellow;
  }

  .delete:hover {
    color: white;
    background-color: greenyellow;
    transition: .3s;
  }

  input[type="text"]:focus {
    outline: 0;
  }
</style>
@section('content')
<h1>Todo List</h1>

@if(count($errors)>0)
<ul>
  @foreach($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif

<form class="todo" action="/create" method="POST">
  @csrf
  <input class="add__todo" type="text" name="content">
  <input class="add__button" type="submit" name="submit" value="追加">
</form>

<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->created_at}}</td>
    <form action="/update" method="POST">
      @csrf
      <td>
        <input type="hidden" name="id" value="{{$item->id}}">

        <input class="added" type="text" name="content" value="{{$item->content}}">
      </td>

      <td>
        <input class="update" type="submit" value="更新">
      </td>
    </form>

    <form action="/delete" method="POST">
      @csrf
      <td>
        <input type="hidden" name="id" value="{{$item->id}}">
        <input class="delete" type="submit" value="削除">
      </td>
    </form>
  </tr>
  @endforeach
</table>
@endsection
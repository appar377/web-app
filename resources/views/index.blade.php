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
    height: 35px;
    border: 2px solid orange;
    border-radius: 5px;
    background-color: white;
    color: orange;
  }

  .delete {
    width: 60px;
    height: 35px;
    border: 2px solid greenyellow;
    border-radius: 5px;
    background-color: white;
    color: greenyellow;
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

<form action="/" method="POST">
  <div class="todo">
    @csrf
    <input class="add__todo" type="text" name="content">
    <input class="add__button" type="submit" name="submit" value="追加">
  </div>

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
      <td>
        <input class="added" type="text" value="{{$item->content}}">
      </td>

      <td>
        <button class="update" type="submit" name="update">更新</button>
      </td>

      <td>
        <button class="delete" type="submit" name="delete">削除</button>
      </td>
    </tr>
    @endforeach
  </table>
  @endsection
</form>
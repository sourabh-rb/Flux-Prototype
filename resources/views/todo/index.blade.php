@extends('todo.layout')

@section('content')


<div id="myDIV" class="header">
  <h2 style="margin:5px">Welcome to Flux!</h2>
  <form method = "POST" action = "{{ route('create')}}">
	<input type="text" name ="task" id="myInput" placeholder="what's on your mind?">
	<input type= "submit" value= "Post" class="addBtn">
  {{ csrf_field()}}
  </form>

</div>

<ul id="myUL">

  @foreach ($tasks as $task)
    <li onclick="location.href='{{route('update', ['id' => $task->id])}}'"@if($task->checked) class="checked" @endif>{{ $task->content}}<a href = "{{route('delete', ['id' => $task->id])}}" class = "close">X</a></li>
  @endforeach

</ul>

@endsection

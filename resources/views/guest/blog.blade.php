@extends('layouts.guest_layout')
@section('main_content')
  <h1>blog</h1>
  <table class="table table-striped">
  <thead>
  <tr>
    <th>titolo</th>
    <th>contenuto</th>
    <th>autore</th>
    <th>id</th>
    <th>action</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($articles as $article)

    <tr>
      <td>{{$article->titolo}}</td>
      <td>{{$article->contenuto}}</td>
      <td>{{$article->autore}}</td>
      <td>{{$article->id}}</td>
    </tr>
  @endforeach
  </tbody>
  </table>

@endsection

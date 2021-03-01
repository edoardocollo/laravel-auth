@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 d-flex flex-column">
          <a href="admin" class="btn btn-primary m-2 p-2">dashboard</a>
          <a href="#" class="btn btn-primary m-2 p-2">articoli</a>
          <a href="#" class="btn btn-primary m-2 p-2">categorie</a>
          <a href="#" class="btn btn-primary m-2 p-2">tags</a>
        </div>
        <div class="col-md-8">
          <h1>admin > dashboard</h1>
        </div>
    </div>
</div>
@endsection

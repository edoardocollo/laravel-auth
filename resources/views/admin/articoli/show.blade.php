@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>admin > articoli > show</h1>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <h2>titolo: {{$articleTarget->titolo}}</h2>
          <h3>autore: {{$articleTarget->autore}}</h3>
          <p>contenuto: {{$articleTarget->contenuto}}</p>


        </div>
    </div>
</div>
@endsection

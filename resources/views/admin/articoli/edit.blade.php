@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>admin > articoli > edit</h1>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif


          <form action="{{route('articoli.update', $articleTarget->id)}}" method="post">
            @csrf
            @method('patch')
           <div class="form-group">
             <label for="titolo">titolo:</label>
             <input type="text" class="form-control" id="titolo" value="{{$articleTarget->titolo}}" name="titolo">
           </div>
           <div class="form-group">
             <label for="contenuto">contenuto:</label>
             <input type="text" class="form-control" id="contenuto" value="{{$articleTarget->contenuto}}" name="contenuto">
           </div>
           <div class="form-group">
             <label for="autore">autore:</label>
             <input type="text" class="form-control" id="autore" value="{{$articleTarget->autore}}" name="autore">
           </div>

           <button type="submit" class="btn btn-success">Submit</button>
          </form>


        </div>
    </div>
</div>
@endsection

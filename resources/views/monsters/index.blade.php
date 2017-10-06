@extends('layouts.app')
@section('content')

  @if (session('status'))
      <div class="alert alert-danger">
          {{ session('status') }}
      </div>
  @endif

      <h1>Monsters <a href="{{url('monsters/create')}}"><button class="btn btn-primary" type="button" name="button">Create</button></a></h1>

    <div class="row">
      @foreach ($monsters as $monster)
        <div class="col-4 float-left">
          <div class="card">
            <img class="card-img-top" src="{{ $monster -> image }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">{{ $monster -> name }}</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $monster -> size }}</li>
                <li class="list-group-item">{{ $monster -> weight }}</li>
                <li class="list-group-item">{{ $monster -> color }}</li>
              </ul>
              <a href="{{ url('monsters/'.$monster->id) }}" class=""> view </a>

            </div>

          </div>
        </div>
    @endforeach
    </div>




@endsection

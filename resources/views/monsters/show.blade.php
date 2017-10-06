@extends('layouts.app')
@section('content')


    <div class="row">
      <div class="col-10">
        <img src="{{ asset($monster->image) }}" class="img-fluid" alt="">
      </div>
      <div class="col-2">
        <h1>{{ $monster -> name }}</h1>
        <ul>
          <li class="list-group-item">{{ $monster -> size }}</li>
          <li class="list-group-item">{{ $monster -> weight }}</li>
          <li class="list-group-item">{{ $monster -> color }}</li>
        </ul>
        <a href="{{ url('monsters/'.$monster->id.'/edit') }}" class=""> Edit </a>
      </div>


    </div>


@endsection

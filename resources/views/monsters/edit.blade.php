@extends('layouts.app')
@section('content')

    <h2>Edit Monster</h2>
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form class="" action="/monsters/{{$monster -> id}}" method="POST" enctype="multipart/form-data">

          {{ csrf_field() }}

          {{ method_field('PUT') }}

          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$monster -> name}}">
          </div>
          <div class="form-group">
            <label for="size">Size</label>
            <input class="form-control" type="text" name="size" id="size" value="{{$monster -> size}}">
          </div>
          <div class="form-group">
            <label for="weight">Weight</label>
            <input class="form-control" type="text" name="weight" id="weight" value="{{$monster -> weight}}">
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input class="form-control" type="text" name="color" id="color" value="{{$monster -> color}}">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control" type="file" name="image" id="image" value="">
          </div>
          <button type="submit" class="btn btn-primary" name="button">Save</button>
        </form>
      </div>
      <div class="col-4">
        <div class="card alert-danger text-white p-4">
          <form class="" action="/monsters/{{$monster -> id}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger" name="button">Delete</button>
          </form>
        </div>
      </div>
    </div>



@endsection

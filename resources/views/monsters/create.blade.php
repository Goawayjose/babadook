@extends('layouts.app')
@section('content')

<h2>Create Monster</h2>
    <div class="col-4"></div>
    <div class="col-4">
      <form class="" action="/monsters" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" id="name" value="">
        </div>
        <div class="form-group">
          <label for="size">Size</label>
          <input class="form-control" type="text" name="size" id="size" value="">
        </div>
        <div class="form-group">
          <label for="weight">Weight</label>
          <input class="form-control" type="text" name="weight" id="weight" value="">
        </div>
        <div class="form-group">
          <label for="color">Color</label>
          <input class="form-control" type="text" name="color" id="color" value="">
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input class="form-control" type="file" name="image" id="image" value="">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Create</button>
      </form>
    </div>
    <div class="col-4"></div>


@endsection

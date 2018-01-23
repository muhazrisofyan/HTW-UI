@extends('auth.layout')

@section('content')
  <div class="content-wrapper">
    <div class="container-fluid">
      <form action="/admin/perlombaan" method="POST">
        <div class="form-group">
          <label for="name">Title</label>
          <input id="name" type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" rows="8" cols="80" class="form-control"></textarea>
        </div>
      </form>

    </div>
  </div>
@endsection

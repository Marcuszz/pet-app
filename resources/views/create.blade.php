@extends('layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Register
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('animals.store') }}">
          <div class="form-group">
              @csrf
              <label for="name of pet">Name of Pet</label>
              <input type="text" class="form-control" name="name of pet"/>
          </div>
          <div class="form-group">
              <label for="animal type">Animal Type</label>
              <input type="text" class="form-control" name="animal type"/>
          </div>
          <div class="form-group">
              <label for="owner of pet">Owner of Pet</label>
              <input type="text" class="form-control" name="owner of pet"/>
          </div>
          <div class="form-group">
              <label for="address of owner">Address of Owner</label>
              <input type="text" class="form-control" name="address of owner"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Submit</button>
      </form>
  </div>
</div>
@endsection
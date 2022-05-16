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
    Edit & Update
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
      <form method="post" action="{{ route('animals.update', $animal->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name of owner">Name</label>
              <input type="text" class="form-control" name="name of owner" value="{{ $animal->name of owner }}"/>
          </div>
          <div class="form-group">
              <label for="animal type">Type</label>
              <input type="text" class="form-control" name="animal type" value="{{ $animal->animal type }}"/>
          </div>
          <div class="form-group">
              <label for="owner of pet">Owner</label>
              <input type="text" class="form-control" name="owner of pet" value="{{ $animal->owner of pet }}"/>
          </div>
          <div class="form-group">
              <label for="address of owner">Address</label>
              <input type="text" class="form-control" name="address of owner" value="{{ $animal->address of owner }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection
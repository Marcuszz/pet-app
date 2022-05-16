@extends('layout')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>name of pet</td>
          <td>animal type</td>
          <td>owner of pet</td>
          <td>address of owner</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($animal as $animals)
        <tr>
            <td>{{$animals->id}}</td>
            <td>{{$animals->name of pet}}</td>
            <td>{{$animals->animal type}}</td>
            <td>{{$animals->owner of pet}}</td>
            <td>{{$animals->address of owner}}</td>
            <td class="text-center">
                <a href="{{ route('animals.edit', $animals->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('animals.destroy', $animals->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
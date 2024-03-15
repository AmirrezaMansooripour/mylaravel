@extends('taklif.layout.master')
@section('head')
<style>
    table{
        margin:auto;
        text-align:center;
    };
    container{

    }
</style>
@endsection
@section('body')
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Change</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
      <tr>
        <td><h6>{{$cat->id}}</h6></td>
        <td><h6>{{$cat->name}}</h6></td>
        <td><button class="btn btn-info"><h6>Change</h6></button></td>
        <td><button class="btn btn-danger"><h6>Delete</h6></button></td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
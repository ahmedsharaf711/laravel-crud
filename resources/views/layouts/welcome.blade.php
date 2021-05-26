@extends('layouts.main')
@section('content')
<h1>Home Page</h1>
@if(session('successMsg'))
<div class="alert alert-success">
{{session('successMsg')}}
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->first_name}}</td>
      <td>{{$student->last_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone}}</td>
      <td>
      <a href="{{route('edit' , $student->id)}}" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
      ||
      <a href="{{route('delete' , $student->id)}}" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
      </td>
    </tr>
  
   @endforeach
  </tbody>
</table>
{{$students->links()}}
@endsection 
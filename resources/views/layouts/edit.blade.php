@extends('layouts.main')
@section('content')

<div class="container">
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif
<h1>Edit Page</h1>

<form class="text-center border border-light p-5" method="POST" action="{{route('update' , $student->id)}}">

@csrf
<h3 class="">Update Student Student</h3>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="fname" value="{{$student->first_name}}" placeholder="First Name">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="lname" value="{{$student->last_name}}" placeholder="Last Name">
    </div>
  </div>


<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3"  name="mail" value="{{$student->email}}" placeholder="Email">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Nmber</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="phone" value="{{$student->phone}}" placeholder="Phone number">
    </div>
  </div>


 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update Data</button>
    </div>
  </div>
</form>
</div>
@endsection 
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
<h1>Create Page</h1>

<form class="text-center border border-light p-5" method="POST" action="{{route('store')}}">

@csrf
<h3 class="">Add New Student</h3>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="fname" placeholder="First Name">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="lname" placeholder="Last Name">
    </div>
  </div>


<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3"  name="mail" placeholder="Email">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Nmber</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="phone" placeholder="Phone number">
    </div>
  </div>


 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Data</button>
    </div>
  </div>
</form>
</div>
@endsection 
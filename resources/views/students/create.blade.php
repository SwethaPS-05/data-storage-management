@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
    @if (session('status'))
        <h6 class="alert alert-success">{{ session("status")}}</h6>
    @endif
      
      <form action="{{ url('student') }}" method="post" enctype="multipart/form-date">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" required class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" required class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" required class="form-control"></br>
        <label>Image</label></br>
        <label class="m-2">Cover Image</label>
        <input type="file" name="file" id="file" required class="form-control"></br>
        <label class="m-2">Images</label>
        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
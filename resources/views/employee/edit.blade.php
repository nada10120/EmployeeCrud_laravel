@extends('layout.app')

<form action="{{ route('employee.update', $employee) }}" method="post" class=" row g-3">
     @csrf
    @method('PUT')
    <div class=" col-md-4">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter Name" value="{{ $employee->name }}" class="form-control">
    </div>
    <div class=" col-md-4">
        <label for="job">Job:</label>
        <input type="text" name="job" id="job" placeholder="Enter Job" value="{{ $employee->job }}" class="form-control">
    </div>
    <div class=" col-md-4">
        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" placeholder="Enter Salary" value="{{ $employee->salary }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update Employee</button>
</form>


<!-- <form  action="{{ route('employee.update', $employee) }}" method="post" class="row g-3 " >

     @csrf
    @method('PUT')
  <div class="col-md-4">
    <label for="name" class="form-label">Name :</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" value="{{ $employee->name }}"  required>

  </div>
  <div class="col-md-4">
    <label for="job" class="form-label">Job</label>
    <input type="text" class="form-control" name="job" id="job" placeholder="Enter Job" value="{{ $employee->job }}" required>

  </div>

  <div class="col-md-6">
    <label for="salary" class="form-label">Salary</label>
    <input type="number" class="form-control"  name="salary" id="salary" placeholder="Enter Salary" value="{{ $employee->salary }}"  required>

  </div>





  <div class="col-12">
    <button class="btn btn-primary" type="submit">Update Employee</button>
  </div>
</form> -->

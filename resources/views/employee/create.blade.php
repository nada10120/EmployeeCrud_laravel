@extends('layout.app')

<!-- <form action="{{route('employee.store')}}" method="post" class="form form-control-color" >
    @csrf
    <input type="text" name="name" placeholder="Enter Name">
    <input type="text" name="job" placeholder="Enter Job">
    <input type="number" name="salary" placeholder="Enter Salary">
    <input type="submit">

</form> -->
<form action="{{route('employee.store')}}" method="post" class="row-g">
    @csrf
    <div class="col-md-4">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="job">Job:</label>
        <input type="text" id="job" name="job" placeholder="Enter Job" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" placeholder="Enter Salary" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

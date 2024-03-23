@extends('admin.main')

@section('content')
    <h3>Edit</h3>
    <form action="{{ route('departments.update', $department) }}" method="POST">
        @csrf
        @method('PUT')
        <div  class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{  $department->name }}">
        </div>
        <div  class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" class="form-control" value="{{  $department->address }}">
        </div>

        <div  class="form-group">
            <label for="phone">Email:</label>
            <input type="email" id="email " class="form-control" value="{{  $department->email }}">
        </div>

        <div class="form-group">
            <label for="address">Phone:</label>
            <input type="text" id="name" class="form-control" value="{{  $department->phone }}">
        </div>

        <div class="form-group">
            <label for="address">website:</label>
            <input type="text" id="name" class="form-control" value="{{  $department->website}}">
        </div>
        <div class="form-group">
            <label for="address">Description:</label>
            <input type="text" id="name" class="form-control" value="{{  $department->description}}">
        </div>
        <button type="submit btn"class="btn btn-primary">Submit</button>
    </form>
@endsection


@extends('layout')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Category</h3>
        <br>
        <form action="{{ route('addCategory') }}" method="POST">
            @CSRF
            <div class="form-group">
                <label for="categoryName">Enter The Category Name:</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName">                
            </div>
            <button type="submit" class="btn btn-primary" onClick="return alert('Category has been added successfully!')">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection
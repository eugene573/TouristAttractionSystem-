@extends('layout')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td><h5>ID</h5></td>
                        <td><h5>Category Name</h5></td>
                        <td><h5>Created Time</h5></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection
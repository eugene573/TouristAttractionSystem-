@extends('layout')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td><h5>ID</h5></td>
                        <td><h5>Name</h5></td>
                        <td><h5>Email</h5></td>
                        <td><h5>Role</h5></td>
                        <td><h5>Gender</h5></td>
                        <td><h5>Created Time</h5></td>
                        <td><h5>Updated Time</h5></td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <strong style="color: red;">Note:</strong>
<h6>Admin is 1, user is 2.</h6>
        <br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection
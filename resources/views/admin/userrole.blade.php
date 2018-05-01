@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Users List</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <td>First Name</td>
                                    <td>Email</td>
                                    <td colspan="3">User &nbsp; Admin &nbsp; Superadmin</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}} </td>
                                    <td colspan="3"><form action="{{route('role.assign')}}" method="post">
                                            <input type="hidden" name="email" value="{{$user->email}}">
                                            <span style="margin-right:30px"> <input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"> </span>
                                            <span style="margin-right:30px"> <input type="checkbox" {{$user->hasRole('Admin') ? 'checked' : ''}} name="role_admin"> </span>
                                            <span style="margin-right:30px"> <input type="checkbox" {{$user->hasRole('Superadmin') ? 'checked' : ''}} name="role_superadmin"> </span>
                                            {{csrf_field()}}
                                            <button type="submit">Assign Role</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
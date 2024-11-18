@extends('person.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Users</h2>
                <a href={{ Route('add') }}>
                    <button class="btn btn-outline-primary">Add User</button>
                </a>
                <table class="table mt-3">
                    <thead>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Re_enter_password</th>
                    </thead>

                    <tbody>
                        @foreach ($data as $users)
                            <tr>
                                <td>{{ $users->id }}</td> 
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->password }}</td>
                                <td>{{ $users->reenterpassword }}</td>
                                <td class="d-flex">
                                    <a href="" class="btn btn-outline-primary"> View </a>&nbsp;
                                    <a href={{ Route('edit', $users->id) }} class="btn btn-outline-success">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href={{ Route('delete', $users->id) }} class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr></tr>


                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection

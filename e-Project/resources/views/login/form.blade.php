@extends('login.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Add Song</h2>
                <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Username" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password: </label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password here" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="re_enter_password" class="form-label">Re Enter Password: </label>
                        <input type="password" class="form-control" id="reenterpassword" placeholder="Re Enter Your Password" name="re_enter_password" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
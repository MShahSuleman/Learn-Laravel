@extends('login.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Edit User</h2>
                <form action="{{ route('update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data[0]->id }}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->name }}" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class="form-control" value="{{ $data[0]->email }}" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password: </label>
                        <input type="password" class="form-control" value="{{ $data[0]->password }}" id="password" name="password" required minlength="8">
                    </div>
                    <div class="mb-3">
                        <label for="re_enter_password" class="form-label">re_enter_password: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->re_enter_password }}" id="re_enter_password" name="re_enter_password" required minlength="8">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
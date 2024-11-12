@extends('person.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Add Users</h2>
                <form action={{ Route('save') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" class="form-control" id="name" placeholder="John Doe" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="email" placeholder="abc@gmail.com"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile: </label>
                        <input type="number" class="form-control" id="mobile" placeholder="021-23598989" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age: </label>
                        <input type="number" class="form-control" id="age" placeholder="22" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image: </label>
                        <input type="file" class="form-control" id="image" name="file">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary: </label>
                        <input type="number" class="form-control" id="salary" placeholder="25000" name="salary">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

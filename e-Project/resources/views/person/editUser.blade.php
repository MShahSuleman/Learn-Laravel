@extends('person.main')

@section('content')
    <div class="container">
        {{-- {{ $data }} --}}
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Edit User</h2>
                <form action={{ Route('update') }} method="GET">
                    @csrf
                    <input type="text" name="id" value="{{ $data[0]->id }}" hidden>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" value="{{ $data[0]->name }}" class="form-control" id="name"
                            placeholder="John Doe" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class="form-control" value="{{ $data[0]->email }}" id="email"
                            placeholder="abc@gmail.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile: </label>
                        <input type="number" class="form-control" value="{{ $data[0]->mobile }}" id="mobile"
                            placeholder="021-23598989" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age: </label>
                        <input type="number" class="form-control" value="{{ $data[0]->age }}" id="age"
                            placeholder="22" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary: </label>
                        <input type="number" class="form-control" value="{{ $data[0]->salary }}" id="salary"
                            placeholder="25000" name="salary">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

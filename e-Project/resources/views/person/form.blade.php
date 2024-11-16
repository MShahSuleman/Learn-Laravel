@extends('person.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Add Users</h2>
                <form action={{ Route('save') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="name" placeholder="Title" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Artist: </label>
                        <input type="text" class="form-control" id="email" placeholder="Artist Name"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Duration: </label>
                        <input type="number" class="form-control" id="mobile" placeholder="Duration" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Year: </label>
                        <input type="number" class="form-control" id="age" placeholder="22" name="age">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="image" class="form-label">Image: </label>
                        <input type="text" class="form-control" id="image" name="file" placeholder="Enter Image URL here">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Video: </label>
                        <input type="text" class="form-control" id="salary" placeholder="Enter Video URL here" name="salary">
                    </div> --}}
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

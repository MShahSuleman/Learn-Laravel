@extends('person.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Add Users</h2>
                <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist: </label>
                        <input type="text" class="form-control" id="artist" placeholder="Artist Name" name="artist" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration: </label>
                        <input type="text" class="form-control" id="duration" placeholder="Duration" name="duration" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Year: </label>
                        <input type="number" class="form-control" id="year" placeholder="22" name="year" required>
                    </div>
                    <div class="mb-3">
                        <label for="image_path" class="form-label">Image Path: </label>
                        <input type="text" class="form-control" id="image_path" name="image_path" placeholder="Enter Image URL here" required>
                    </div>
                    <div class="mb-3">
                        <label for="video_path" class="form-label">Video Path: </label>
                        <input type="text" class="form-control" id="video_path" placeholder="Enter Video URL here" name="video_path" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
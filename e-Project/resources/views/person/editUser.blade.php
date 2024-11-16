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
                        <label for="id" class="form-label">Id: </label>
                        <input type="number" value="{{ $data[0]->id }}" class="form-control" id="id"
                            placeholder="Id" name="id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->title }}" id="title"
                            placeholder="Title of Song" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->artist }}" id="artist"
                            placeholder="Artist Name" name="artist" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration: </label>
                        <input type="number" class="form-control" value="{{ $data[0]->duration }}" id="duration"
                            placeholder="Duration (in minutes)" name="duration" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Year: </label>
                        <input type="number" class="form-control" value="{{ $data[0]->year }}" id="year"
                            placeholder="Year" name="year" required>
                    </div>
                    <div class="mb-3">
                        <label for="image_path" class="form-label">Image Path: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->image_path }}" id="image_path"
                            placeholder="Enter Image URL" name="image_path" required>
                    </div>
                    <div class="mb-3">
                        <label for="video_path" class="form-label">Video Path: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->video_path }}" id="video_path"
                            placeholder="Enter Video URL" name="video_path" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
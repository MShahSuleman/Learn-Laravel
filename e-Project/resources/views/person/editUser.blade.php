@extends('person.main')

@section('content')
    <div class="container">
        {{-- {{ $data }} --}}
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Edit User</h2>
                <form action="{{ route('update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data[0]->id }}">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->title }}" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Artist: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->artist }}" id="email"
                            placeholder="Artist Name" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Year: </label>
                        <input type="number" class="form-control" value="{{ $data[0]->year }}" id="mobile"
                            placeholder="Year" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Image Path: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->image_path }}" id="age"
                            placeholder="Image Path here" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Video Path: </label>
                        <input type="text" class="form-control" value="{{ $data[0]->video_path }}" id="salary"
                            placeholder="Video Path here" name="salary">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

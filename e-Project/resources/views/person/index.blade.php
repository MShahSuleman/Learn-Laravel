@extends('person.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Songs</h2>
                <a href={{ Route('add') }}>
                    <button class="btn btn-outline-primary">Add User</button>
                </a>
                <table class="table mt-3">
                    <thead>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Artist</th>
                        {{-- <th>Release Date</th> --}}
                        <th>Duration</th>
                        <th>Year</th>
                        <th>Image Path</th>
                        <th>Video Path</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </thead>

                    <tbody>
                        @foreach ($data as $songs)
                            <tr>
                                <td>{{ $songs->id }}</td> 
                                <td>{{ $songs->title }}</td>
                                <td>{{ $songs->artist }}</td>
                                <td>{{ $songs->duration }}</td>
                                <td>{{ $songs->year }}</td>
                                <td>{{ $songs->image_path }}</td>
                                <td>{{ $songs->video_path }}</td>
                                <td>{{ $songs->updated_at }}</td>
                                <td>{{ $songs->updated_at }}</td>
                                <td class="d-flex">
                                    <a href="" class="btn btn-outline-primary"> View </a>&nbsp;
                                    <a href={{ Route('edit', $songs->id) }} class="btn btn-outline-success">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href={{ Route('delete', $songs->id) }} class="btn btn-outline-danger">Delete</a>
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

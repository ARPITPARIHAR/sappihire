@extends('backend.layouts.app')

@section('meta_title', __('Sample Index'))

@section('page_name', __('Sample Index'))

@section('page_description', __('This is the sample index page displaying all records.'))

@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Sample') }}</a></li>
@endsection

@section('content')
    <!-- Add Bootstrap CSS for styling and responsiveness -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin: 20px;
        }
        .table th, .table td {
            text-align: center;
        }
    </style>

    <div class="container table-container">
        <h1 class="my-4">Sample Index</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Detail</th>
                    <th>Subject</th>
                    <th>Message</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($samples as $sample)
                    <tr>
                        <td>{{ $sample->id }}</td>
                        <td>{{ $sample->first }}</td>
                        <td>{{ $sample->last }}</td>
                        <td>{{ $sample->number }}</td>
                        <td>{{ $sample->email }}</td>
                        <td>{{ $sample->detail }}</td>
                        <td>{{ $sample->subject }}</td>
                        <td>{{ $sample->message }}</td>

                        <td>
                            {{-- <a href="{{ route('sample.edit', $sample->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                             <form action="{{ route('sample.destroy', $sample->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS for any interactive components -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('modal')
    <!-- Place for modals if needed -->
@endsection

@section('scripts')
    <!-- Place for additional scripts if needed -->
@endsection

@section('styles')
    <!-- Place for additional styles if needed -->
@endsection

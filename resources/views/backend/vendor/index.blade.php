@extends('backend.layouts.app')

@section('meta_title', __('Vendor Index'))

@section('page_name', __('Vendor Index'))

@section('page_description', __('This page displays all records from the table.'))

@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Table') }}</a></li>
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
        .thumbnail-img {
            max-width: 100px; /* Adjust as needed */
            height: auto;
        }
    </style>

    <div class="container table-container">
        <h1 class="my-4">Table Index</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Detail</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Image</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->phone }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->detail }}</td>
                        <td>{{ $record->subject }}</td>
                        <td>{{ $record->message }}</td>
                        <td><img src="{{ asset($record->thumbnail_img) }}" width="150"></td>

                        <td>
                            {{-- <a href="{{ route('table.edit', $record->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                             <form action="{{ route('vendor.destroy', $record->id) }}" method="POST" style="display:inline;">
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

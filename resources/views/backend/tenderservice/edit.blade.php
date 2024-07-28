@extends('backend.layouts.app')
@section('meta_title', __('Edit Training'))

@section('page_name', __('Edit Training'))

@section('page_description', __('Edit Training'))
@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Edit Training') }}</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                @if(session('success'))
                    <h5 class="text-success">{{ session('success') }}</h5>
                @else
                    <h5>@yield('page_name')</h5>
                @endif
            </div>
            <div class="card-block">
                <form action="{{ route('tenderservice.update', $details->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
               <div class="form-group row">
                    <label class="col-sm-2 col-form-label">{{ __('Header Image') }}</label>
                    <div class="col-sm-10">
                        <input type="file" name="header_image" class="form-control @error('header_image') form-control-danger @enderror">
                        <span class="messages">
                            @error('header_image')
                                <p class="text-danger error">{{ $message }}</p>
                            @enderror
                        </span>
                        <!-- Display the current header image if exists -->
                        @if($details->header_image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $details->header_image) }}" alt="{{ __('Header Image') }}" style="max-width: 200px;">
                            </div>
                        @endif
                    </div>
                </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="title" value="{{ old('title', $details->title) }}" placeholder="{{ __('Enter Title') }}" class="form-control @error('title') form-control-danger @enderror">
                            <span class="messages">
                                @error('title')
                                    <p class="text-danger error">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="category" id="category" value="{{ old('category', $details->category) }}" placeholder="{{ __('Enter Category') }}" class="form-control @error('category') form-control-danger @enderror">
                            <span class="messages">
                                @error('category')
                                    <p class="text-danger error">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('PDF File') }}</label>
                        <div class="col-sm-10">
                            <input type="file" name="pdf_file" class="form-control @error('pdf_file') form-control-danger @enderror">
                            <span class="messages">
                                @error('pdf_file')
                                    <p class="text-danger error">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                    </div>

                    <!-- Header Image Field -->


                    <div class="form-group row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary float-sm-right">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('backend/plugins/i18next/js/i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/plugins/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/plugins/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/plugins/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/plugins/summernote/summernote.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
    </script>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote.css') }}">
@endsection
@extends('frontend.layouts.app')
@section('meta_title','rcem')

@include('frontend.includes.navbar')


<div class="abt_instut">
    <h2>About Institute</h2>
    @foreach (\App\Models\About::all() as $aboutService)
    <p>{{ $aboutService->brief_description }}</p>
@endforeach

</div>

@include('frontend.includes.footer')
@section('style')

@endsection
@section('script')

@endsection

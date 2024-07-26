@extends('frontend.layouts.app')

@section('meta_title', $trainingEvent->title)

@include('frontend.includes.navbar')

<section style="margin-top: 30px; margin-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ordr_list">
             


                 <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Title</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trainingEvents as $key=>$trainingEvent)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $trainingEvent->title ?: 'Untitled' }}</td>
                                    <td>
                                        <a href="{{  asset($trainingEvent->pdf_file) }}" download >
                                            View PDF
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

@include('frontend.includes.footer')

@section('style')
<!-- Add any additional styles specific to this page -->
@endsection

@section('script')
<!-- Add any additional scripts specific to this page -->
@endsection
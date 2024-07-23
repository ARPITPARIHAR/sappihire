@extends('frontend.layouts.app')

@section('meta_title', $trainingEvent->title)

@include('frontend.includes.navbar')

<section style="margin-top: 30px; margin-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ordr_list">
                 <!-- Display the title of the training event -->

                    @if ($relatedPDFs->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No.</th> <!-- Add a column for serial numbers -->
                                        <th>Title</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($relatedPDFs as $pdf)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td> <!-- Use $loop->iteration for the serial number -->
                                            <td>{{ $pdf->title ?: 'Untitled' }}</td>
                                            <td>
                                                <a href="{{ asset('storage/' . $pdf->pdf_file) }}" target="_blank">
                                                    View PDF
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>No related PDFs available.</p>
                    @endif

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

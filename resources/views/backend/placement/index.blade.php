@extends('backend.layouts.app')
@section('meta_title', __('Placement Service'))

@section('page_name', __('Placement Service'))

@section('page_description', __('Placement Service'))

@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Placement Service') }}</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <!-- Zero config.table start -->
        <div class="card">
            <div class="card-header row">
                <div class="col-sm-2">
                    <a href="{{ route('placement.create') }}" class="btn btn-sm btn-primary">{{ __('Add Placement Service') }}</a>
                </div>
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Brief Description') }}</th>
                                <th>{{ __('Updated At') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($placements as $key => $placement)
                            <tr>
                                <td>{{ ($key + 1) + ($placements->currentPage() - 1) * $placements->perPage() }}</td>
                                <td>
                                    <div class="brief-description">
                                        {{ $placement->brief_description }}
                                    </div>
                                </td>
                                <td>{{ date('d-m-Y h:iA', strtotime($placement->updated_at)) }}</td>
                                <td>
                                    <a href="{{ route('placement.edit', encrypt($placement->id)) }}" class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                    <a href="{{ route('placement.delete', encrypt($placement->id)) }}" class="btn btn-sm btn-danger">{{ __('Delete') }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Brief Description') }}</th>
                                <th>{{ __('Updated At') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                        <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">
                            Showing {{ $placements->firstItem() }} to {{ $placements->lastItem() }} of {{ $placements->total() }} entries
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="float-sm-right">
                            {{ $placements->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('modal')

@endsection

@section('scripts')

@endsection

@section('styles')
<style>
    .brief-description {
        max-height: 6em; /* Limit to approximately 3 lines */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>
@endsection

@extends('layouts.app')

@section('tittletop', 'Service Request')
@section('tittle', 'Requests from clients')
@section('description', 'Dashboard')
@section('image', 'Dashboard')


@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('app/plugins/table/datatable/datatables.css') }}">
<link href="{{ asset('app/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('app/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />


@endsection

@section('footer')





@endsection




@section('body')


    <div class="row layout-top-spacing">
        <div id="tableFooter" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Services Request</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table class="table mb-4" >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Business Name</th>
                                    <th>Phone Number</th>
                                    <th>Business Type</th>
                                    <th>Budget</th>
                                    <th>Contacted</th>
                                    <th>Won</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $sericerequest as $request)


                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $request->name }}</td>
                                    <td>{{ $request->businessname }}</td>
                                    <td>{{ $request->phonenumber }}</td>
                                    <td>{{ $request->businesstype }}</td>
                                    <td>{{ $request->budget }}</td>
                                    <td>{{ $request->contactmethod ? 'Yes': 'No' }}</td>
                                    <td>{{ $request->won ? 'Yes': 'No'}}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li><a href="{{ route('detail.request', $request->id) }}"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Business Name</th>
                                    <th>Phone Number</th>
                                    <th>Business Type</th>
                                    <th>Budget</th>
                                    <th>Contacted</th>
                                    <th>Won</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $sericerequest->links() !!}
        </div>
    </div>


@endsection

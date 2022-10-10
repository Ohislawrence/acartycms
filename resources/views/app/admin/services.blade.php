@extends('layouts.app')

@section('tittletop', 'Our Service')
@section('tittle', 'What we offer')
@section('description', 'Dashboard')
@section('image', 'Dashboard')


@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('app/plugins/table/datatable/datatables.css') }}">
<link href="{{ asset('app/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('app/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />


@endsection

@section('footer')

<div class="modal fade" id="addservice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('services.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <input type="text" name="service" class="form-control" placeholder="Service *">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" placeholder="Service Desc *" name="desc"></textarea>
                    </div>
                    <hr/>
                    <div class="form-group mb-4">
                        <input type="text" name="st1" class="form-control" placeholder="Sub topic 1 *">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" placeholder="Service Desc ST1 *" name="st1desc"></textarea>
                    </div>
                    <div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" id="customFile" name="st1img">
                        <label class="custom-file-label" for="customFile">Choose file for ST1</label>
                    </div>
                    <hr/>
                    <div class="form-group mb-4">
                        <input type="text" name="st2" class="form-control" placeholder="Sub topic 2 *">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" placeholder="Service Desc ST2 *" name="st2desc"></textarea>
                    </div>
                    <div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" id="customFile" name="stimg">
                        <label class="custom-file-label" for="customFile">Choose file for ST2</label>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">*Required Fields</small>


            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be gone forever.",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });

</script>

@endsection




@section('body')


    <div class="row layout-top-spacing">
        <div id="tableFooter" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                    <div class="col-md-12 text-right mb-5">
                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#addservice">
                          Add Service
                        </button>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table class="table mb-4" >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Service</th>
                                    <th>Description</th>


                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $services as $service)


                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $service->service }}</td>
                                    <td>{{ $service->desc }}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li><a href=""  data-toggle="modal" data-target="#editservice{{ $service->id }}" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                            <li><form method="post" action="{{route('services.destroy', $service->id)}}">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger show_confirm"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></li>
                                                </form>
                                        </ul>
                                    </td>
                                </tr>

                                <!--edit model-->
                                <div class="modal fade" id="editservice{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add a Service</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('services.update' , $service->id) }}"  enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group mb-4">
                                                        <input type="text" name="service" class="form-control" value="{{ $service->service }}">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <textarea class="form-control" name="desc">{{ $service->desc }}</textarea>
                                                    </div>
                                                    <hr/>
                                                    <div class="form-group mb-4">
                                                        <input type="text" name="st1" class="form-control" value="{{ $service->st1 }}">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <textarea class="form-control" name="st1desc">{{ $service->st1desc }}</textarea>
                                                    </div>
                                                    <div class="custom-file mb-4">
                                                        <input type="file" class="custom-file-input" id="customFile" name="st1img">
                                                        <label class="custom-file-label" for="customFile">Choose file for ST1</label>
                                                    </div>
                                                    <hr/>
                                                    <div class="form-group mb-4">
                                                        <input type="text" name="st2" class="form-control" value="{{ $service->st2 }}">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <textarea class="form-control" name="st2desc">{{ $service->st2desc}}</textarea>
                                                    </div>
                                                    <div class="custom-file mb-4">
                                                        <input type="file" class="custom-file-input" id="customFile" name="stimg">
                                                        <label class="custom-file-label" for="customFile">Choose file for ST2</label>
                                                    </div>
                                                    <small id="emailHelp" class="form-text text-muted">*Required Fields</small>


                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--edit end-->
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Service</th>
                                    <th>Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

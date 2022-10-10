@extends('layouts.app')

@section('tittletop', 'Courses')
@section('tittle', 'All Courses')
@section('description', 'Dashboard')
@section('image', 'Dashboard')


@section('header')
<link href="{{ asset('guest/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('footer')

<div class="modal fade" id="add_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('course.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <input type="text" name="title" class="form-control" placeholder="Course Title *" value="{{ old('title') }}">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" placeholder="Course Description *" name="desc">{{ old('desc')}}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="cost" class="form-control" placeholder="Cost *" value="{{ old('cost') }}">
                    </div>
                    <hr/>
                    <div class="form-group mb-4">
                        <select class="form-control form-control" name="cert">
                            <option>Certificate</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">Choose Course Image</label>
                    </div>
                    <hr/>
                    <div class="form-group mb-4">
                        <select class="form-control form-control" name="coursecat">
                            <option>Category</option>
                            @foreach ($coursecat as $cat )
                            <option value="{{ $cat->id }}">{{ $cat->title  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <select class="form-control form-control" name="offered_by">
                            <option>offered By</option>
                            @foreach ($instrutors as $instrutor )
                            <option value="{{ $instrutor->id }}">{{ $instrutor->name  }}</option>
                            @endforeach
                        </select>
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

@endsection




@section('body')

<div class="row layout-top-spacing">
    <div id="tableFooter" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                        <h2>Courses</h2>
                    </div>
                    <div class="col-md-12 text-right mb-5">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_course">
                            Create Course
                        </button>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table mb-4" >
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Course</th>
                                <th>Category</th>
                                <th>Instuctor</th>
                                <th>Cost</th>
                                <th>Certificate</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $courses as $course)


                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->coursecat->title }}</td>
                                <td>{{ $course->user->name }}</td>
                                <td>{{ $course->cost }}</td>
                                <td>{{ $course->cert ? 'Yes': 'No' }}</td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><button type="button" data-toggle="modal" data-target="#add_course_edit"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></button></li>
                                        <li><form method="post" action="{{route('course.destroy', $course->id)}}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger show_confirm"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></li>
                                            </form></li>
                                    </ul>
                                </td>
                            </tr>
                            <!--edit starts-->
                            <div class="modal fade" id="add_course_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add a Service</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('course.update', $course->id) }}"  enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group mb-4">
                                                    <input type="text" name="title" class="form-control" placeholder="Course Title *" value="{{ $course->title }}">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <textarea class="form-control" placeholder="Course Description *" name="desc">{{ $course->desc}}</textarea>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <input type="text" name="cost" class="form-control" placeholder="Cost *" value="{{ $course->cost }}">
                                                </div>
                                                <hr/>
                                                <div class="form-group mb-4">
                                                    <select class="form-control form-control" name="cert">
                                                        <option>Certificate</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                                <div class="custom-file mb-4">
                                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                                    <label class="custom-file-label" for="customFile">Choose Course Image</label>
                                                </div>
                                                <hr/>
                                                <div class="form-group mb-4">
                                                    <select class="form-control form-control" name="coursecat">
                                                        <option>Category</option>
                                                        @foreach ($coursecat as $cat )
                                                        <option value="{{ $cat->id }}">{{ $cat->title  }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <select class="form-control form-control" name="offered_by">
                                                        <option>offered By</option>
                                                        @foreach ($instrutors as $instrutor )
                                                        <option value="{{ $instrutor->id }}">{{ $instrutor->name  }}</option>
                                                        @endforeach
                                                    </select>
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
                            <!--edit ends-->
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Course</th>
                                <th>Category</th>
                                <th>Instuctor</th>
                                <th>Cost</th>
                                <th>Certificate</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $courses->links() !!}
    </div>
</div>


@endsection

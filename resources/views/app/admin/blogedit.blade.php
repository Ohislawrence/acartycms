@extends('layouts.app')

@section('tittletop', 'Edit Blogs')
@section('tittle', 'New Blogs')
@section('description', 'Dashboard')
@section('image', 'Dashboard')


@section('header')
>

@endsection

@section('footer')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });

</script>

@endsection




@section('body')

<div class="row layout-top-spacing">
    <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Create New Blogpost</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form method="POST" action="{{ route('blogs.update', $blog->id) }}" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-4">
                        <label for="" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Title</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text"  name="title" class="form-control" id="" placeholder="" value="{{ $blog->title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Category</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <select name="category" class="form-control" aria-label="Select example">
                                <option value="">Select One</option>
                                @foreach ($cat as $cate )
                                <option value="{{ $cate->id }}" {{ $cate->id == $blog->category ? 'selected' : ''}} > {{ $cate->category }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Content</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <textarea name="content" rows="10" class="form-control ckeditor" aria-label="With textarea">{{ $blog->desc }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Feature Image</label>
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>Clear Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file" >
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="file" value="{{ $blog->banner }} name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                            </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary mt-3">POST !</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>



@endsection

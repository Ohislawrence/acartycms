@extends('layouts.app')

@section('tittletop', 'Service Request')
@section('tittle', 'Request')
@section('description', '')
@section('image', '')


@section('header')


@endsection

@section('footer')


@endsection




@section('body')
<div class="row">
<div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
        <h1>{{ $details->name }}</h1>
        <p>Sent at {{ \Carbon\Carbon::createFromTimestamp(strtotime($details->created_at))->format('d-m-Y')}}</p>
        <p>{{ $details->country }}</p>
    </div>
            </div>
    <div class="get-privacy-terms align-self-center">
        <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> Print</button>
    </div>



<div class="privacy-content-container">

    <section>
        <h5>Name</h5>
        <p>{{ $details->name }}</p>

        <h5>Business Name</h5>
        <p>{{ $details->businessname }}</p>

        <h5>Phone Number</h5>
        <p>{{ $details->phonenumber }}</p>

        <h5>Email</h5>
        <p>{{ $details->email }}</p>

        <h5>URL</h5>
        <p>{{ $details->url }}</p>

        <h5>Business Type</h5>
        <p>{{ $details->businesstype }}</p>

        <h5>Budget</h5>
        <p>{{ $details->budget }}</p>

    </section>



    <section>

        <h5>Service Description</h5>

        <p>{{ $details->details }}</p>
    </section>


    <section>

        <h5>Contacted?</h5>

        <p>{{ $details->contactmethod ? 'Yes': 'No' }}</p>

        <h5>Date Contacted</h5>

        <p>{{ $details->datecontacted ? $details->datecontacted : 'nil' }}</p>

        <h5>Contacted medium</h5>

        <p>{{ $details->contactmethod ? $details->contactmethod : 'nil' }}</p>

        <h5>Report</h5>

        <p>{{ $details->won ? $details->won : 'nil' }}</p>
    </section>

    <hr/>
    <section>
        <form method="POST" action="{{ route('update.request', $details->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group row mb-4">
                <label for="" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Date Contacted</label>
                <div class="col-xl-10 col-lg-9 col-sm-10">
                    <input type="date" name="datecontacted" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label for="" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Contact Method</label>
                <div class="col-xl-10 col-lg-9 col-sm-10">
                    <input type="text" name="contactmethod" class="form-control"  placeholder="">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label for="" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Details (won)</label>
                <div class="col-xl-10 col-lg-9 col-sm-10">

                    <textarea name="won" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </div>
            </div>
        </form>
    </section>


</div>

</div>
    </div></div>


@endsection

@extends('layouts.organisationDashboard')
@section('content')
<div class="content">
  <div class="my-50 text-center">
    <h2 class="font-w700 text-black mb-10">
      <i class="fa fa-plus text-muted mr-5"></i> Create Your Intern Profile
    </h2>
    <h3 class="h5 text-muted mb-0">
      Kindly ensure to provide the accurate details of your profile
    </h3>
  </div>
  <div class="block block-rounded block-fx-shadow">
    <div class="block-content">
      <form action="/staff" method="post" enctype="multipart/form-data">
        @csrf
        <h2 class="content-heading text-black">Vital Info</h2>

        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Pay extra attention since this is the data which customers will see first.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="form-group">
              <label for="re-listing-name">First Name</label>
              <input type="text" class="form-control form-control-lg" id="re-listing-name" name="first_name" placeholder="your first name">

            </div>
            <div class="form-group">
              <label for="re-listing-address">Last Name</label>
              <input type="text" class="form-control form-control-lg" id="re-listing-address" name="last_name" placeholder="your last name">

            </div>
            <div class="form-group">
              <label for="re-listing-address">Company Status</label>
              <input type="text" class="form-control form-control-lg" id="re-listing-address" name="company_status" placeholder="your company status">
            </div>

          </div>
        </div>
        <div class="row items-push">
          <div class="col-lg-7 offset-lg-4">
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-alt-success">
                <i class="fa fa-plus mr-5"></i>
                Create Staff
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
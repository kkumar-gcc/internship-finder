@extends('layouts.organisationDashboard')
@section('content')
<div class="content">
  <div class="my-50 text-center">
    <h2 class="font-w700 text-black mb-10">
      <i class="fa fa-plus text-muted mr-5"></i> Create Staff Profile
    </h2>
    <h3 class="h5 text-muted mb-0">
      Kindly ensure to provide the accurate details of your staff
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
              <input type="text" class="form-control form-control-lg {{$errors->has('first_name') ? 'border-danger' : ''}}" id="re-listing-name" name="first_name" placeholder="your first name">
              <small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('first_name')!!}</small>

            </div>
            <div class="form-group">
              <label for="re-listing-address">Last Name</label>
              <input type="text" class="form-control form-control-lg" id="re-listing-address" name="last_name" placeholder="your last name">
              <small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('last_name')!!}</small>
            </div>
            <div class="form-group">
              <label for="re-listing-name">Email</label>
              <input type="text" class="form-control form-control-lg {{$errors->has('email') ? 'border-danger' : ''}}" id="re-listing-name" name="email" placeholder="your first name">
              <small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('email')!!}</small>

            </div>
          </div>
        </div>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Add bright and clean photo of your staff
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="form-group">
              <div class="custom-file form">
                <input type="file" class="custom-file-input {{$errors->has('photo') ? 'border-danger' : ''}}" id="re-listing-photos" name="photo" data-toggle="custom-file-input">
                <label class="custom-file-label" for="re-listing-photos">Choose file</label>
              </div>
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
    </div>
    </form>
  </div>
</div>
</div>
@endsection
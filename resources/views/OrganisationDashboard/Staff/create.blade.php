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
      <form action="/dashboard/agent/profile" method="post" enctype="multipart/form-data">
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
              <input type="text" class="form-control form-control-lg {{$errors->has('firstName') ? 'border-danger' : ''}}" id="re-listing-name" name="first-name" placeholder="your first name">
              <small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('firstName')!!}</small>

            </div>
            <div class="form-group">
              <label for="re-listing-address">Last Name</label>
              <input type="text" class="form-control form-control-lg" id="re-listing-address" name="last-name" placeholder="your last name">
              <small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('lastName')!!}</small>

            </div>
            <div class="form-group">
              <label for="re-listing-address">Other Names</label>
              <input type="text" class="form-control form-control-lg" id="re-listing-address" name="other-names" placeholder="your other names">
              <small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('otherNames')!!}</small>

            </div>
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-status">Gender</label>
                <select class="form-control form-control-lg" id="re-listing-status" name="gender">

                  <option value="">Gender</option>

                </select>
                <small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('otherNames')!!}</small>
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading text-black">Contact Info</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              How can your customers reach you?
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-email">Email</label>
                <input type="text" class="form-control form-control-lg {{$errors->has('emailAddress') ? 'border-danger' : ''}}" id="re-listing-email" name="email-address">
                <small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('emailAddress')}}</small>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-phone">Phone</label>
                <input type="text" class="form-control form-control-lg {{$errors->has('phoneNumber') ? 'border-danger' : ''}}" id="re-listing-phone" name="phone-number">
                <small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('phoneNumber')}}</small>

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-phone">Alternate Phone</label>
                <input type="text" class="form-control form-control-lg {{$errors->has('alternativePhoneNumber') ? 'border-danger' : ''}}" id="re-listing-phone" name="alternative-phone-number">
                <small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('alternativePhoneNumber')}}</small>

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-phone">Residential Address</label>
                <input type="text" class="form-control form-control-lg {{$errors->has('residentialAddress') ? 'border-danger' : ''}}" id="re-listing-phone" name="residential-address">
                <small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('residentialAddress')}}</small>

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-phone">City</label>
                <input type="text" class="form-control form-control-lg {{$errors->has('city') ? 'border-danger' : ''}}" id="re-listing-phone" name="city">
                <small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('city')}}</small>

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-phone">State</label>
                <input type="text" class="form-control form-control-lg {{$errors->has('state') ? 'border-danger' : ''}}" id="re-listing-phone" name="state">
                <small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('state')}}</small>

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-phone">Region</label>
                <input type="text" class="form-control form-control-lg" id="re-listing-phone" name="region">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8">
                <label for="re-listing-status">Country</label>
                <select class="form-control form-control-lg" id="re-listing-status" name="country">

                  <option value="">Country</option>

                </select>
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading text-black">Photos</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Add bright and clean photo of yourself
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="form-group">
              <div class="custom-file form">
                <input type="file" class="custom-file-input {{$errors->has('photo') ? 'border-danger' : ''}}" id="re-listing-photos" name="photo" data-toggle="custom-file-input" multiple>
                <label class="custom-file-label" for="re-listing-photos">Choose files</label>
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading text-black">Additional Info</h2>
        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              We need just few more details from you
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="form-group">
              <label for="re-listing-description">Description</label>
              <textarea class="form-control form-control-lg {{$errors->has('Description') ? 'border-danger' : ''}}" id="re-listing-description" name="additional-info" rows="8" placeholder="Additional information like: When you like your customers to contact you"></textarea>
            </div>

          </div>
        </div>
        <div class="row items-push">
          <div class="col-lg-7 offset-lg-4">
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-alt-success">
                <i class="fa fa-plus mr-5"></i>
                Add Profile
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
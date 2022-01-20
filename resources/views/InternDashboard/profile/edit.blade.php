@extends('layouts.internDashboard')

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
			<form action="/intern/update{{$intern->id}}" method="post">
				@csrf
				@method('PUT')
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
							<input type="text" class="form-control form-control-lg {{$errors->has('first_name') ? 'border-danger' : ''}}" id="re-listing-name" name="first_name" placeholder="your first name" value="{{$intern->first_name ?? old('first_name')}}">
							<small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('first_name')!!}</small>

						</div>
						<div class="form-group">
							<label for="re-listing-address">Last Name</label>
							<input type="text" class="form-control form-control-lg" id="re-listing-address" name="last_name" placeholder="your last name" value="{{$intern->last_name ?? old('last_name')}}">
							<small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('last_name')!!}</small>

						</div>
						<div class="form-group">
							<label for="re-listing-address">Other Names</label>
							<input type="text" class="form-control form-control-lg" id="re-listing-address" name="other_name" placeholder="your other names" value="{{$intern->other_name ?? old('other_name')}}">
							<small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('other_name')!!}</small>

						</div>
						<div class="form-group row">
							<div class="col-md-8">
								<label for="re-listing-status">Gender</label>
								<select class="form-control form-control-lg" id="re-listing-status" name="gender">
									@foreach($gender as $key=> $value)
									<option value="{{$value}}">{{$value}}</option>
									@endforeach
								</select>
								<small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('gender')!!}</small>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-8">
								<label for="re-listing-phone">Date of birth</label>
								<input type="date" class="form-control form-control-lg {{$errors->has('date_of_birth') ? 'border-danger' : ''}}" id="re-listing-phone" name="date_of_birth" placeholder="E.g 1996-12-14">
								<small class=" form-text text-danger" style="font-size: 14px;">{{$errors->first('date_of_birth')}}</small>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-8">
								<label for="re-listing-phone">Areas of interest</label>
								<input data-role="tagsinput" type="text" class="form-control form-control-lg" id="re-listing-phone" name="area_of_interest">
								<small class=" form-text text-danger" style="font-size: 14px;">{{$errors->first('area_of_interest')}}</small>
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
								<label for="re-listing-phone">Phone</label>
								<input type="text" class="form-control form-control-lg {{$errors->has('phone') ? 'border-danger' : ''}}" id="re-listing-phone" name="phone">
								<small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('phone')}}</small>

							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-8">
								<label for="re-listing-phone">House Number</label>
								<input type="number" class="form-control form-control-lg" id="re-listing-phone" name="house_number">
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
								<label for="re-listing-status">Country</label>
								<select class="form-control form-control-lg" id="re-listing-status" name="country">
									@foreach($country as $key=> $value)
									<option value="{{$value}}">{{$value}}</option>
									@endforeach
								</select>
							</div>
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
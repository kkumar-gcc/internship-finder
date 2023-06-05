<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework | DEMO</title>
	<meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Codebase! You need to purchase a license for legal use! | DEMO">
	<meta name="author" content="pixelcave">
	<meta name="robots" content="noindex, nofollow">
	<meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework | DEMO">
	<meta property="og:site_name" content="Codebase">
	<meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Codebase! You need to purchase a license for legal use! | DEMO">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<link rel="shortcut icon" href="/media/favicons/favicon.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/media/favicons/favicon-192x192.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/media/favicons/apple-touch-icon-180x180.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&amp;display=swap">
	<link rel="stylesheet" id="css-main" href="/csss/codebase.min-4.3.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-16158021-6"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-16158021-6');
	</script>
</head>

<body>
	<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
		@include('xplorer_dashboard/includes.header');

		<nav id="sidebar">
			@include('xplorer_dashboard/includes.sidebar');
		</nav>

		<main id="main-container" style="margin-top: -20px;">
			<div class="content">
				<div class="my-50 text-center">
					<h2 class="font-w700 text-black mb-10">
						<i class="fa fa-plus text-muted mr-5"></i> Create Your Agent Profile
					</h2>
					<h3 class="h5 text-muted mb-0">
						Kindly ensure to provide the accurate details of your profile
					</h3>
				</div>
				<div class="block block-rounded block-fx-shadow">
					<div class="block-content">
						@foreach($agentProfile as $agentProfile)
						<form action="/dashboard/agent/profile/{{$agentProfile->id}}" method="post" enctype="multipart/form-data">

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
										<input type="text" class="form-control form-control-lg {{$errors->has('firstName') ? 'border-danger' : ''}}" id="re-listing-name" name="first-name" value="{{$agentProfile->first_name}}">
										<small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('firstName')!!}</small>

									</div>
									<div class="form-group">
										<label for="re-listing-address">Last Name</label>
										<input type="text" class="form-control form-control-lg" id="re-listing-address" name="last-name" placeholder="your last name" value="{{$agentProfile->last_name}}">
										<small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('lastName')!!}</small>

									</div>
									<div class="form-group">
										<label for="re-listing-address">Other Names</label>
										<input type="text" class="form-control form-control-lg" id="re-listing-address" name="other-names" placeholder="your other names" value="{{$agentProfile->other_names}}">
										<small class="form-text text-danger" style="font-size: 14px;">{!!$errors->first('otherNames')!!}</small>

									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<label for="re-listing-status">Gender</label>
											<select class="form-control form-control-lg" id="re-listing-status" name="gender">
												@foreach($gender as $gender)
												<option value="{{$gender}}">{{$agentProfile->gender}}</option>
												@endforeach
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
											<input type="text" class="form-control form-control-lg {{$errors->has('emailAddress') ? 'border-danger' : ''}}" id="re-listing-email" name="email-address" value="{{$agentProfile->email_address}}">
											<small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('emailAddress')}}</small>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<label for="re-listing-phone">Phone</label>
											<input type="text" class="form-control form-control-lg {{$errors->has('phoneNumber') ? 'border-danger' : ''}}" id="re-listing-phone" name="phone-number" value="{{$agentProfile->phone_number}}">
											<small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('phoneNumber')}}</small>

										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<label for="re-listing-phone">Alternate Phone</label>
											<input type="text" class="form-control form-control-lg {{$errors->has('alternativePhoneNumber') ? 'border-danger' : ''}}" id="re-listing-phone" name="alternative-phone-number" value="{{$agentProfile->alternative_phone_number}}">
											<small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('alternativePhoneNumber')}}</small>

										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<label for="re-listing-phone">Residential Address</label>
											<input type="text" class="form-control form-control-lg {{$errors->has('residentialAddress') ? 'border-danger' : ''}}" id="re-listing-phone" name="residential-address" value="{{$agentProfile->residential_address}}">
											<small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('residentialAddress')}}</small>

										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<label for="re-listing-phone">City</label>
											<input type="text" class="form-control form-control-lg {{$errors->has('city') ? 'border-danger' : ''}}" id="re-listing-phone" name="city" value="{{$agentProfile->city}}">
											<small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('city')}}</small>

										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<label for="re-listing-phone">State</label>
											<input type="text" class="form-control form-control-lg {{$errors->has('state') ? 'border-danger' : ''}}" id="re-listing-phone" name="state" value="{{$agentProfile->state}}">
											<small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('state')}}</small>

										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<label for="re-listing-phone">Region</label>
											<input type="text" class="form-control form-control-lg" id="re-listing-phone" name="region" value="{{$agentProfile->region}}">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<label for="re-listing-status">Country</label>
											<select class="form-control form-control-lg" id="re-listing-status" name="country">
												@foreach($country as $countries)
												<option value="{{$countries}}">{{$countries}}</option>
												@endforeach
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
											<input type="file" class="custom-file-input" id="re-listing-photos" name="photo" data-toggle="custom-file-input" multiple>
											<small class="form-text text-danger" style="font-size: 14px;">{{$errors->first('photo')}}</small>
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
										<textarea class="form-control form-control-lg {{$errors->has('Description') ? 'border-danger' : ''}}" id="re-listing-description" name="additional-info" rows="8">{{$agentProfile->addtional_info}}</textarea>
									</div>

								</div>
							</div>

							<div class="row items-push">
								<div class="col-lg-7 offset-lg-4">
									<div class="form-group">
										<button type="submit" class="btn btn-alt-success">
											<i class="fa fa-plus mr-5"></i>
											Edit Profile
										</button>
									</div>
								</div>
							</div>
							@endforeach
						</form>
					</div>
				</div>
			</div>
		</main>

	</div>
	<script src="/js/codebase.core.min-4.3.js"></script>
	<script src="/js/codebase.app.min-4.3.js"></script>
</body>

</html>
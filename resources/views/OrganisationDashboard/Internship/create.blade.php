@extends('layouts.organisationDashboard')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-soft-primary p-3">
                        <h5 class="mb-0 fs-17">Post a New Job!</h5>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <form action="/organization/internship/create/post" method="post" enctype="multipart/form-data">
                @csrf
               
                @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
        
                @if(session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                <input type="hidden" name="organization_id" value="{{ auth()->user()->organization->id }}">
                <div class="job-post-content box-shadow-md rounded-3 p-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="internshiptitle" class="form-label">Intern Title</label>
                                <input type="text" class="form-control" id="internshiptitle" name="title" placeholder="Title">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="description" class="form-label">Intern Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                    placeholder="Enter Job Description"></textarea>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="choices-single-categories" class="form-label">Categories</label>
                                <select class="form-select" data-trigger="" name="category"
                                    id="choices-single-categories" aria-label="Default select example">
                                    <option value="ne">Digital &amp; Creative</option>
                                    <option value="df">Retail</option>
                                    <option value="od">Management</option>
                                    <option value="rd">Human Resources</option>
                                </select>
                            </div>
                        </div>
                        <div class="custom-file form">
                            {{-- <label for="re-listing-photos">Date of birth</label> --}}
                            <input type="file"
                                class="custom-file-input {{ $errors->has('photo') ? 'border-danger' : '' }}"
                                id="re-listing-photos" name="photo" data-toggle="custom-file-input">
                            <label class="custom-file-label" for="re-listing-photos">Choose Profile
                                Image</label>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="Internshiptype" class="form-label">Intern Type</label>
                                <input type="text" class="form-control" id="Interntype" placeholder="Internship type" name="internshiptype">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="salary" class="form-label">Salary($)</label>
                                <input type="number" class="form-control" id="salary" name="salary" placeholder="Salary">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="qualification" class="form-label">Qualification</label>
                                <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="skills" class="form-label">Internship Skills </label>
                                <input type="text" class="form-control" id="skills" name="skills" placeholder="Internship skills">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="lastdate" class="form-label">Application Deadline Date</label>
                                <input type="date" class="form-control" name="lastdate" id="lastdate">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="choices-single-location" class="form-label">Country</label>
                                <select class="form-select" data-trigger="" name="location"
                                    id="choices-single-location" aria-label="Default select example">
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-3">
                            <div class="mb-4">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-3">
                            <div class="mb-4">
                                <label for="zipcode" class="form-label">Zipcode</label>
                                <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="text-end">
                                <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                                <button class="btn btn-primary" type="submit">Post Now <i
                                        class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end job-post-content-->
            </form>
        </div>
        <!--end container-->
    </section>
@endsection

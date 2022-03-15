@extends('layouts.internDashboard')
@section('style')

@section('content')
<section class="section">
    <div class="profile-container">
        <div class="row">
            <div class="col-lg-8 profile-left">
                <div class="card ">
                    <div>
                        <div class="job-details-compnay-profile">
                            <img src="{{asset ('ProfilePhoto')}}/i{{$internship->id}}.jpg" alt="" style="width: 100%; height:300px;" class="rounded-3">
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="mb-1">{{ $internship->title }}</h5>
                                    <ul class="list-inline text-muted mb-0">
                                        <li class="list-inline-item">
                                            <i class="mdi mdi-account"></i> 8 Vacancy
                                        </li>
                                        <li class="list-inline-item text-warning review-rating">
                                            <span class="badge bg-warning text-light">4.8</span> <i class="mdi mdi-star align-middle"></i><i class="mdi mdi-star align-middle"></i><i class="mdi mdi-star align-middle"></i><i class="mdi mdi-star align-middle"></i><i class="mdi mdi-star-half-full align-middle"></i>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <ul class="list-inline mb-0 text-lg-end mt-3 mt-lg-0">
                                        <li class="list-inline-item">
                                            <div class="favorite-icon">
                                                <a href="javascript:void(0)"><i class="uil uil-heart-alt"></i></a>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="favorite-icon">
                                                <a href="javascript:void(0)"><i class="uil uil-setting"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                            </div><!--end row-->    
                        </div>

                        <div class="mt-4">
                            <div class="row g-2">
                                <div class="col-lg-3">
                                    <div class="border rounded-start p-3">
                                        <p class="text-muted mb-0 fs-13">Experience</p>
                                        <p class="fw-medium fs-15 mb-0">Minimum 1 Year</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="border p-3">
                                        <p class="text-muted fs-13 mb-0">Employee type</p>
                                        <p class="fw-medium mb-0">Full Time</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="border p-3">
                                        <p class="text-muted fs-13 mb-0">Position</p>
                                        <p class="fw-medium mb-0">Senior</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="border rounded-end p-3">
                                        <p class="text-muted fs-13 mb-0">Offer Salary</p>
                                        <p class="fw-medium mb-0">$2150/ Month</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end Experience-->

                        <div class="mt-4">
                            <h5 class="mb-3">Job Description</h5>
                            <div class="job-detail-desc">
                                <p class="text-muted mb-0">As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent. You will help the team design beautiful interfaces that solve business challenges for our clients. We work with a number of Tier 1 banks on building web-based applications for AML, KYC and Sanctions List management workflows. This role is ideal if you are looking to segue your career into the FinTech or Big Data arenas.</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="mb-3">Responsibilities</h5>
                            <div class="job-detail-desc mt-2">
                                <p class="text-muted">As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent.</p>
                                <ul class="job-detail-list list-unstyled mb-0 text-muted">
                                    <li><i class="uil uil-circle"></i> Have sound knowledge of commercial activities.</li>
                                    <li><i class="uil uil-circle"></i> Build next-generation web applications with a focus on the client side</li> 
                                    <li><i class="uil uil-circle"></i> Work on multiple projects at once, and consistently meet draft deadlines</li> 
                                    <li><i class="uil uil-circle"></i> have already graduated or are currently in any year of study</li> 
                                    <li><i class="uil uil-circle"></i> Revise the work of previous designers to create a unified aesthetic for our brand materials</li> 
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <h5 class="mb-3">Qualification </h5>
                            <div class="job-detail-desc mt-2">
                                <ul class="job-detail-list list-unstyled mb-0 text-muted">
                                    <li><i class="uil uil-circle"></i> B.C.A / M.C.A under National University course complete.</li> 
                                    <li><i class="uil uil-circle"></i> 3 or more years of professional design experience</li> 
                                    <li><i class="uil uil-circle"></i> have already graduated or are currently in any year of study</li> 
                                    <li><i class="uil uil-circle"></i> Advanced degree or equivalent experience in graphic and web design</li> 
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="mb-3">Skill &amp; Experience</h5>
                            <div class="job-details-desc">
                                <ul class="job-detail-list list-unstyled mb-0 text-muted">
                                    <li><i class="uil uil-circle"></i> Understanding of key Design Principal</li>
                                    <li><i class="uil uil-circle"></i> Proficiency With HTML, CSS, Bootstrap</li> 
                                    <li><i class="uil uil-circle"></i> Wordpress: 1 year (Required)</li> 
                                    <li><i class="uil uil-circle"></i> Experience designing and developing responsive design websites</li>
                                    <li><i class="uil uil-circle"></i> web designing: 1 year (Preferred)</li>
                                </ul>
                                <div class="mt-4">
                                    <span class="badge bg-primary">PHP</span>
                                    <span class="badge bg-primary">JS</span>
                                    <span class="badge bg-primary">Marketing</span>
                                    <span class="badge bg-primary">REACT</span>
                                    <span class="badge bg-primary">PHOTOSHOP</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mt-1">
                                    Share this job:
                                </li>
                                <li class="list-inline-item mt-1">
                                    <a href="javascript:void(0)" class="btn btn-primary btn-hover"><i class="uil uil-facebook-f"></i> Facebook</a>
                                </li>
                                <li class="list-inline-item mt-1">
                                    <a href="javascript:void(0)" class="btn btn-danger btn-hover"><i class="uil uil-google"></i> Google+</a>
                                </li>
                                <li class="list-inline-item mt-1">
                                    <a href="javascript:void(0)" class="btn btn-success btn-hover"><i class="uil uil-linkedin-alt"></i> linkedin</a>
                                </li>
                            </ul>
                        </div>
                    </div><!--end card-body-->
                </div><!--end job-detail-->

                <div class="mt-4">
                    <h5>Related Jobs</h5>
                    <div class="job-box card mt-4">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-lg-1">
                                    <img src="assets/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3">
                                </div><!--end col-->
                                <div class="col-lg-10">
                                    <div class="mt-3 mt-lg-0">
                                        <h5 class="fs-17 mb-1"><a href="job-details.html" class="text-dark">HTML Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0">Jobcy Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-2">
                                            <span class="badge bg-soft-success mt-1">Full Time</span>
                                            <span class="badge bg-soft-warning mt-1">Urgent</span>
                                            <span class="badge bg-soft-info mt-1">Private</span>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="favorite-icon">
                                <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                            </div>
                        </div>
                        <div class="p-3 bg-light">
                            <div class="row justify-content-between">
                                <div class="col-md-8">
                                    <div>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="uil uil-tag"></i> Keywords :</li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="primary-link text-muted">Ui designer</a>,</li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="primary-link text-muted">developer</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-3">
                                    <div class="text-md-end">
                                        <a href="javascript:void(0)" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end job-box-->




                </div>

            </div><!--end col-->

            <div class="col-lg-4 profile-right">
                <!--start side-bar-->
                <div class="side-bar ms-lg-4">
                    <div class="card job-overview">
                        <div class="card-body p-4">
                            <h6 class="fs-17">Job Overview</h6>
                            <ul class="list-unstyled mt-4 mb-0">
                                <li>
                                    <div class="d-flex mt-4">
                                        <i class="uil uil-user icon bg-soft-primary"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Job Title</h6>
                                            <p class="text-muted mb-0">Product Designer</p> 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex mt-4">
                                        <i class="uil uil-star-half-alt icon bg-soft-primary"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Experience</h6>
                                            <p class="text-muted mb-0"> 0-3 Years</p> 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex mt-4">
                                        <i class="uil uil-location-point icon bg-soft-primary"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Location</h6>
                                            <p class="text-muted mb-0"> New york</p> 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex mt-4">
                                        <i class="uil uil-usd-circle icon bg-soft-primary"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Offered Salary</h6>
                                            <p class="text-muted mb-0">$35k - $45k</p> 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex mt-4">
                                        <i class="uil uil-graduation-cap icon bg-soft-primary"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Qualification</h6>
                                            <p class="text-muted mb-0">Bachelor Degree</p> 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex mt-4">
                                        <i class="uil uil-building icon bg-soft-primary"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Industry</h6>
                                            <p class="text-muted mb-0">Private</p> 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex mt-4">
                                        <i class="uil uil-history icon bg-soft-primary"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Date Posted</h6>
                                            <p class="text-muted mb-0">Posted 2 hrs ago</p> 
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-3">
                                <a href= "{{ $proposel->status != 'Apply' ? '/intern/internships/manage/'.auth()->user()->intern->id:'/intern/apply/'.Str::slug($internship->title).'/'.$internship->id  }}"  class="btn  btn-hover w-100 mt-2 {{$proposel->status != 'Apply' ? 'bg-soft-success' : 'btn-primary' }}">{{ $proposel->status }} <i class="uil uil-arrow-right"></i></a>
                                <a href="bookmark-jobs.html" class="btn btn-soft-warning btn-hover w-100 mt-2"><i class="uil uil-bookmark"></i> Add Bookmark</a>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end job-overview-->

                    <div class="card company-profile mt-4">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <img src="assets/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3">

                                <div class="mt-4">
                                    <h6 class="fs-17 mb-1">Jobcy Technology Pvt.Ltd</h6>
                                    <p class="text-muted">Since July 2017</p>
                                </div>
                            </div>
                            <ul class="list-unstyled mt-4">
                                <li>
                                    <div class="d-flex">
                                        <i class="uil uil-phone-volume text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Phone</h6>
                                            <p class="text-muted fs-14 mb-0">+589 560 56555</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-3">
                                    <div class="d-flex">
                                        <i class="uil uil-envelope text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Email</h6>
                                            <p class="text-muted fs-14 mb-0">pixltechnology@info.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-3">
                                    <div class="d-flex">
                                        <i class="uil uil-globe text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Website</h6>
                                            <p class="text-muted fs-14 text-break mb-0">www.Jobcytechnology.pvt.ltd.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-3">
                                    <div class="d-flex">
                                        <i class="uil uil-map-marker text-primary fs-4"></i>
                                        <div class="ms-3">
                                            <h6 class="fs-14 mb-2">Location</h6>
                                            <p class="text-muted fs-14 mb-0">Oakridge Lane Richardson.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <a href="/intern/organizations/{{ $internship->organization->id }}" class="btn btn-primary btn-hover w-100 rounded"><i class="mdi mdi-eye"></i> View Profile</a>
                            </div>
                        </div>
                    </div>

                  
                </div>
                <!--end side-bar-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection
@extends('layouts.internDashboard')
@section('style')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card side-bar">
                    <div class="card-body p-4">
                        <div class="candidate-profile text-center">
                            <img src="{{asset ('ProfilePhoto')}}/i{{$organization->id%26}}.jpg" alt="" class="avatar-lg rounded-circle">
                            <h6 class="fs-18 mb-1 mt-4">{{ $organization->organization_name }}</h6>
                            <p class="text-muted mb-4">Since July 2017</p>
                            <ul class="candidate-detail-social-menu list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="social-link"><i class="uil uil-phone-alt"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div><!--end candidate-profile-->

                    <div class="candidate-profile-overview  card-body border-top p-4">
                        <h6 class="fs-17 fw-medium mb-3">Profile Overview</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <div class="d-flex">
                                    <label class="text-dark mr-4">Owner Name</label>
                                    <div>
                                        <p class="text-muted mb-0 ">Charles Dickens</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <label class="text-dark mr-4">Employees</label>
                                    <div>
                                        <p class="text-muted mb-0">1500 - 1850</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <label class="text-dark mr-4">Location</label>
                                    <div>
                                        <p class="text-muted mb-0 ">New York</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <label class="text-dark mr-4">Website</label>
                                    <div>
                                        <a class="text-muted text-break mb-0" href="#">www.Jobcytecnologypvt.ltd.com</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <label class="text-dark mr-4">Established</label>
                                    <div>
                                        <p class="text-muted mb-0 mr-4">July 10 2017</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <a href="javascript:void(0)" class="btn btn-danger btn-hover w-100"><i class="uil uil-phone"></i> Contact</a>
                        </div>
                    </div><!--candidate-profile-overview-->
                    <div class="card-body p-4 border-top">
                        <div class="ur-detail-wrap">
                            <div class="ur-detail-wrap-header">
                                <h6 class="fs-17 fw-medium mb-3">Working Days</h6>
                            </div>
                            <div class="ur-detail-wrap-body">
                                <ul class="working-days">
                                    <li>Monday<span class="ml-4">9AM - 5PM</span></li>
                                    <li>Tuesday<span class="ml-4">9AM - 5PM</span></li>
                                    <li>Wednesday<span class="ml-4">9AM - 5PM</span></li>
                                    <li>Thursday<span class="ml-4">9AM - 5PM</span></li>
                                    <li>Friday<span class="ml-4">9AM - 5PM</span></li>
                                    <li>Saturday<span class="ml-4">9AM - 5PM</span></li>
                                    <li>Sunday<span class="text-danger ml-4">Close</span></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end card-body-->
                    <div class="card-body p-4 border-top">
                        <h6 class="fs-17 fw-medium mb-4">Company Location</h6>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628067715234!5m2!1sen!2sin" style="width:100%" allowfullscreen="" loading="lazy" height="250"></iframe>
                    </div>
                </div><!--end card-->
            </div><!--end col-->
            
            <div class="col-lg-8">
                <div class="card ms-lg-4 mt-4 mt-lg-0">
                    <div class="card-body p-4">

                        <div class="mb-5">
                            <h6 class="fs-17 fw-medium mb-4">About Company</h6>
                            <p class="text-muted"> Objectively pursue diverse catalysts for change for interoperable meta-services. Distinctively re-engineer 
                                revolutionary meta-services and premium architectures. Intrinsically incubate intuitive opportunities and 
                                real-time potentialities. Appropriately communicate one-to-one technology.</p>

                            <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate 
                                one-to-one technology.</p>

                            <p class="text-muted"> Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit 
                                seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa 
                                eiusmod Pinterest in do umami readymade swag.</p>
                        </div>
                    
                      
                        
                        <div>
                            <h6 class="fs-17 fw-medium mb-4">Current Opening</h6>
                          @foreach ($organization->internships as $internship)
                            <div class="job-box card mt-4">
                                <div class="p-4">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="{{asset ('ProfilePhoto')}}/i{{$internship->id%26}}.jpg" alt="" class="img-fluid rounded-3">
                                        </div><!--end col-->
                                        <div class="col-lg-10">
                                            <div class="mt-3 mt-lg-0">
                                                <h5 class="fs-16 fw-medium mb-1"><a href="/intern/internships/{{ $internship->id }}" class="text-dark">{{ $internship->title }}</a> <small class="text-muted fw-normal">(0-5 Yrs Exp.)</small></h5>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <p class="text-muted fs-14 mb-0">{{ $organization->organization_name }}</p>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-2">
                                                    <span class="badge bg-soft-blue mt-1">Internship</span>
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
                                                    <li class="list-inline-item fw-medium"><i class="uil uil-tag"></i> Keywords :</li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="primary-link text-muted">Ui designer</a>,</li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="primary-link text-muted">developer</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div class="text-md-end">
                                                <a href="/intern/internships/{{ $internship->id }}" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div><!--end job-box--> 
                        @endforeach     
                        </div>
                    </div><!-- card body end -->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection
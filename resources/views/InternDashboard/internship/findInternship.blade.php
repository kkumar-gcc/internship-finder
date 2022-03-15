@extends('layouts.internDashboard')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
    <section id="show-interns" class="ftco-section ftco-agent">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Internships</span>
                    <h2 class="mb-4">Apply for Verious Internships</h2>
                </div>
            </div>


            <div class="internship-container row">
                <div class="col-lg-9">
                    <!-- Job-list -->

                    @foreach ($internships as $internship)
                        <div class="internship-card card">
                            <div class="row internship-card-top">
                                <div class="col-lg-2">
                                    <a href="/intern/organizations/{{ $internship->organization_id}}"><img
                                            src="{{ asset('ProfilePhoto') }}/i{{ $internship->id % 26 }}.jpg" alt=""
                                             class="rounded-3"></a>
                                </div>
                                <!--end col-->
                                <div class="col-lg-10">
                                    <div class="mt-3 mt-lg-0">
                                        <h5 class="fs-17 mb-1"><a href="/intern/internships/{{ $internship->id }}"
                                                class="text-dark">{{ $internship->title }}</a></h5>
                                        <ul class="list-inline mb-0">
                                            {{-- <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0">
                                                    {{ $internship->organization->}}</p>
                                            </li> --}}
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>
                                                    {{ $internship->city }}</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i>
                                                    ${{ $internship->salary }}/ month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-2">
                                            <span class="badge bg-soft-danger mt-1">Part Time</span>
                                            <span class="badge bg-soft-warning mt-1 ml-5">Urgent</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>

                            <div class="internship-card-bottom">
                                <div class="row justify-content-between">
                                    <div class="col-md-8 mt-5">
                                        <div>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><i class="uil uil-tag"></i> Keywords
                                                    :</li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                        class="primary-link text-muted">Ui designer</a>,</li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                        class="primary-link text-muted">Manager</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="text-md-end">
                                            <a href="/intern/internships/{{ $internship->id }}" data-bs-toggle="modal"
                                                class="btn btn-primary show-card-btn mt-5" >Apply Now <i
                                                    class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->
                    @endforeach

                    <!-- End Job-list -->

                    <div class="row">
                        <div class="col-lg-12 mt-4 pt-2">
                            <nav aria-label="Page navigation example p-4">
                                {{ $internships->onEachSide(5)->links() }}
                            </nav>
                        </div>
                        <!--end col-->

                    </div>

                </div>
                <!-- START SIDE-BAR -->
                <div class="col-lg-3" style="position: sticky; height:100vh;">
                    <div class="side-bar mt-5 mt-lg-0">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="locationOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#location" aria-expanded="true" aria-controls="location">
                                        Location
                                    </button>
                                </h2>
                                <div id="location" class="accordion-collapse collapse show" aria-labelledby="locationOne">
                                    <div class="accordion-body">
                                        <div class="side-title">
                                            <div class="mb-3">
                                                <form class="position-relative">
                                                    <input class="form-control" type="search" placeholder="Search...">
                                                    <button
                                                        class="bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y me-2"
                                                        type="submit"><span
                                                            class="mdi mdi-magnify text-muted"></span></button>
                                                </form>
                                            </div>
                                            <div class="area-range">
                                                <div class="form-label mb-3">Area Range: <span class="example-val mt-2"
                                                        id="slider1-span">9.00</span> miles</div>
                                                <div id="slider1"
                                                    class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects"></div>
                                                        <div class="noUi-origin"
                                                            style="transform: translate(-428.571%); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                                tabindex="0" role="slider" aria-orientation="horizontal"
                                                                aria-valuemin="1.0" aria-valuemax="15.0" aria-valuenow="9.0"
                                                                aria-valuetext="9.00">
                                                                <div class="noUi-touch-area"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end accordion-item -->

                            <div class="accordion-item mt-4">
                                <h2 class="accordion-header" id="experienceOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#experience" aria-expanded="true" aria-controls="experience">
                                        Work experience
                                    </button>
                                </h2>
                                <div id="experience" class="accordion-collapse collapse show"
                                    aria-labelledby="experienceOne">
                                    <div class="accordion-body">
                                        <div class="side-title">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked1">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked1">No
                                                    experience</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked2" checked="">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked2">0-3
                                                    years</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked3">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked3">3-6
                                                    years</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked4">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked4">More
                                                    than 6 years</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end accordion-item -->

                            <div class="accordion-item mt-3">
                                <h2 class="accordion-header" id="jobType">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#jobtype" aria-expanded="false" aria-controls="jobtype">
                                        Type of employment
                                    </button>
                                </h2>
                                <div id="jobtype" class="accordion-collapse collapse show" aria-labelledby="jobType">
                                    <div class="accordion-body">
                                        <div class="side-title">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault6" checked="">
                                                <label class="form-check-label ms-2 text-muted" for="flexRadioDefault6">
                                                    Freelance
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2">
                                                <label class="form-check-label ms-2 text-muted" for="flexRadioDefault2">
                                                    Full Time
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault3">
                                                <label class="form-check-label ms-2 text-muted" for="flexRadioDefault3">
                                                    Internship
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault4">
                                                <label class="form-check-label ms-2 text-muted" for="flexRadioDefault4">
                                                    Part Time
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end accordion-item -->

                            <div class="accordion-item mt-3">
                                <h2 class="accordion-header" id="datePosted">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#dateposted" aria-expanded="false" aria-controls="dateposted">
                                        Date Posted
                                    </button>
                                </h2>
                                <div id="dateposted" class="accordion-collapse collapse show" aria-labelledby="datePosted">
                                    <div class="accordion-body">
                                        <div class="side-title form-check-all">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="">
                                                <label class="form-check-label ms-2 text-muted" for="checkAll">
                                                    All
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="datePosted"
                                                    value="last" id="flexCheckChecked5" checked="">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked5">
                                                    Last Hour
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="datePosted"
                                                    value="last" id="flexCheckChecked6">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked6">
                                                    Last 24 hours
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="datePosted"
                                                    value="last" id="flexCheckChecked7">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked7">
                                                    Last 7 days
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="datePosted"
                                                    value="last" id="flexCheckChecked8">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked8">
                                                    Last 14 days
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="datePosted"
                                                    value="last" id="flexCheckChecked9">
                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked9">
                                                    Last 30 days
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end accordion-item -->

                            <div class="accordion-item mt-3">
                                <h2 class="accordion-header" id="tagCloud">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#tagcloud" aria-expanded="false" aria-controls="tagcloud">
                                        Tags Cloud
                                    </button>
                                </h2>
                                <div id="tagcloud" class="accordion-collapse collapse show" aria-labelledby="tagCloud">
                                    <div class="accordion-body">
                                        <div class="side-title">
                                            <a href="javascript:void(0)"
                                                class="badge bg-info tag-cloud fs-13 mt-2">design</a>
                                            <a href="javascript:void(0)"
                                                class="badge bg-info tag-cloud fs-13 mt-2">marketing</a>
                                            <a href="javascript:void(0)"
                                                class="badge bg-info tag-cloud fs-13 mt-2">business</a>
                                            <a href="javascript:void(0)"
                                                class="badge bg-info tag-cloud fs-13 mt-2">developer</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end accordion-item -->

                        </div>
                        <!--end accordion-->

                    </div>
                    <!--end side-bar-->
                </div>
                <!-- END SIDE-BAR -->
            </div>
        </div>
    </section>
    </section>
@endsection

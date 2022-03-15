@extends('layouts.internDashboard')
@section('content')
    {{-- <section id="show-interns" class="ftco-section ftco-agent"> --}}

    <section class="section">
        <div class="container">
            @if (count($proposels) < 1)
                <div class="container text-center mt-20">
                    <div>
                        <div class="col-md-12">
                            <div class="error-template">
                                <h1>
                                    Oops!</h1>
                                <h2>
                                    No internship to manage</h2>
                                <div class="error-details p-4">
                                    You haven't applied for any internship!
                                </div>
                                <div class="error-actions">
                                    <a href="/intern/internships" class="btn btn-primary btn-lg"><span
                                            class="glyphicon glyphicon-home"></span>
                                        Search Internship </a><a href="/intern/organizations"
                                        class="btn btn-secondary btn-lg ml-8"><span
                                            class="glyphicon glyphicon-envelope"></span> View Organizations </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="mb-4 mb-lg-0">
                            <h6 class="mb-0"> My Job Listings </h6>
                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
                <div class="row">
                    @foreach ($proposels as $proposel)
                        <div class="col-lg-12">

                            <div class="job-box card mt-4">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <a href="company-details.html"><img
                                                    src="{{ asset('ProfilePhoto') }}/i{{ $proposel->id % 26 }}.jpg"
                                                    alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-9">
                                            <div class="mt-3 mt-lg-0">
                                                <h5 class="fs-17 mb-1"><a href="job-details.html"
                                                        class="text-dark">Project Manager</a> <small
                                                        class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <p class="text-muted fs-14 mb-0">
                                                            {{ $proposel->internship->organization->organization_name }}
                                                        </p>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>
                                                            California</p>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250
                                                            -
                                                            $800 / month</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-2">
                                                    <span class="badge bg-soft-success   mt-1 p-2">Full Time</span>
                                                    <span class="badge bg-soft-warning  mt-1 p-2">Urgent</span>
                                                    <span class="badge bg-soft-info  p-2 mt-1">Private</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <button class="mt-10 w-40 {{ $proposel->status=='Applied'?'bg-soft-warning':'bg-soft-success' }}">{{$proposel->status }}</button>
                                        <div class="col-lg-2 align-self-center">
                                            <ul class="list-inline mt-3 mb-0">
                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                    <a href="manage-jobs-post.html"
                                                        class="avatar-sm bg-success text-center rounded-circle fs-18">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="" data-bs-original-title="Delete">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal"
                                                        class="avatar-sm bg-danger d-inline-block text-center rounded-circle fs-18">
                                                        <i class="uil uil-trash-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->
                        </div>
                        <!--end col-->
                    @endforeach
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-12 mt-4 pt-2">
                        <nav aria-label="Page navigation example p-4">
                            {{ $proposels->onEachSide(5)->links() }}
                        </nav>
                    </div>
                    <!--end col-->
                </div><!-- end row -->
            @endif
        </div>
        <!--end container-->
    </section>



@endsection

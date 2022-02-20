@extends('layouts.organisationDashboard')

@section('content')
    <div class="container">
        @foreach ($internships as $internship)
            <div class="job-box card mt-4">
                <div class="p-4">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="{{ asset('ProfilePhoto') }}/i{{ $internship->id % 26 }}.jpg" alt=""
                                class="img-fluid rounded-3">
                        </div>
                        <!--end col-->
                        <div class="col-lg-10">
                            <div class="mt-3 mt-lg-0">
                                <h5 class="fs-16 fw-medium mb-1"><a href="/organization/internship/{{ $internship->id }}/proposels"
                                        class="text-dark">{{ $internship->title }}</a> <small
                                        class="text-muted fw-normal">(0-5 Yrs Exp.)</small></h5>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        {{-- <p class="text-muted fs-14 mb-0">{{ $organization->organization_name }}</p> --}}
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month
                                        </p>
                                    </li>
                                </ul>
                                <div class="mt-2">
                                    <span class="badge bg-soft-blue mt-1">Internship</span>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
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
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="primary-link text-muted">Ui designer</a>,</li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="primary-link text-muted">developer</a></li>
                                </ul>
                            </div>
                        </div>
                      
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end job-box-->
        @endforeach
    </div>
@endsection

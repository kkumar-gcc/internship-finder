@extends('layouts.organisationDashboard')

@section('content')
<div class="candidate-list-box card mt-4">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-auto">
                <div class="candidate-list-images">
                    <a href="javascript:void(0)"><img src="{{ asset('ProfilePhoto') }}/i{{ $proposel->id % 26 }}.jpg" alt="" style="width: 100px; height:100px;"
                            class="avatar-md img-thumbnail rounded-circle"></a>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-5">
                <div class="candidate-list-content mt-3 mt-lg-0">
                    <h5 class="fs-19 mb-0"><a href="/organization/internship/{{ $proposel->internship->id}}/proposels/{{ $proposel->id}}" class="primary-link">{{ $proposel->intern->first_name}}</a> <span class="badge bg-success ms-1"><i
                                class="mdi mdi-star align-middle"></i> 4.8</span></h5>
                    <p class="text-muted mb-2"> Project Manager</p>
                    <ul class="list-inline mb-0 text-muted">
                        <li class="list-inline-item">
                            <i class="mdi mdi-map-marker"></i> Oakridge Lane Richardson
                        </li>
                        <li class="list-inline-item">
                            <i class="uil uil-wallet"></i> $650 / hours
                        </li>
                    </ul>
                </div>
            </div>
            <!--end col-->

          
        </div>
        <!--end row-->
        <h2>{{ $proposel->internship->organization->organization_name }}</h2>
        <div class="mb-4 mt-4">
            <h3>Cover latter</h3>
            <p class="mt-4">{{ $proposel->reason }}</p>

        </div>
        <div class="mb-4 mt-4">
            <h3>Available-time</h3>
            <p class="mt-4">{{ $proposel->available_time}}</p>

        </div>

        <div class="favorite-icon">
            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
        </div>
    </div>
</div>
@endsection

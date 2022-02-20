@extends('layouts.internDashboard')
@section('content')
<section id="show-interns" class="ftco-section ftco-agent">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">organizations</span>
                <h2 class="mb-4">Meet Various Organizations</h2>
            </div>
        </div>
        
        @foreach($organizations->chunk(4) as $chunk)
        <div class="row justify-content-center">
            @foreach($chunk as $organization)
           
            <div class="col-lg-3 col-md-6">
                <div class="card text-center mb-4">
                    <div class="card-body px-4 py-5">
                        {{-- <div class="featured-label">
                            <span class="featured">4.9 <i class="mdi mdi-star-outline"></i></span>
                        </div> --}}
                        <img src="{{asset ('ProfilePhoto')}}/i{{$organization->id%26}}.jpg" alt=""  style="width: 200px; height:200px;" class="img-fluid rounded-3 mt-2">
                        <div class="mt-4 mb-4">
                            <a href="company-details.html" class="primary-link"><h6 class="fs-18 mb-2">{{$organization->organization_name}}</h6></a>
                            <p class="text-muted mb-4">New York</p>

                            <a href="/organizations/{{ $organization->id }}" class="btn btn-primary">{{ $organization->internships->count() }} Opening Internships</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach
        </div>
        @endforeach
    </div>
</section>
@endsection
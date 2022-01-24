@extends('layouts.organisationDashboard')
@section('content')
<section id="show-interns" class="ftco-section ftco-agent">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Interns</span>
                <h2 class="mb-4">Meet Various Interns</h2>
            </div>
        </div>
        @foreach($interns->chunk(4) as $chunk)
        <div class="row justify-content-center">
            @foreach($chunk as $intern)
            <div class="col-md-3 ftco-animate">
                <div class="agent">
                    <div class="img">
                        <img src="{{asset ('ProfilePhoto')}}/{{$intern->user->profile_image}}" style="width: 180px; height:200px;" class="img-fluid" alt="Colorlib Template">
                        <div class="desc">
                            <h3><a href="properties.html">{{$intern->area_of_interest}}</a></h3>
                            <p class="h-info"><span class="location">{{$intern->user->email}}</span> <span class="details">Schedule Appoinment</span></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>
@endsection
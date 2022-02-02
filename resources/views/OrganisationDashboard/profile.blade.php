@extends('layouts.organisationDashboard')
@section('styleLink')
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@endsection
@section('content')

    <div class="profile-container">

        <div class="top-container">
            <div class="card social">
                <div class="profile-header d-flex justify-content-between justify-content-center">
                    <div class="d-flex">
                        <div class="mr-3">
                            <img src="http://source.unsplash.com/random/200x201" class="rounded" alt="">
                        </div>
                        <div class="details">
                            <h5 class="mb-0">Louis Pierce</h5>
                            {{-- <span class="text-light">Ui UX Designer</span> --}}
                        </div>
                    </div>
                    {{-- <div>
                        <button class="btn btn-primary btn-sm">Follow</button>
                        <button class="btn btn-success btn-sm">Message</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="bottom-container">
            <div class="bottom-left-container">
                <div class="container-header">
                    <h2>Info</h2>
                    <ul class="header-dropdown dropdown">
                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);"  data-toggle="dropdown" 
                                 aria-expanded="false"><i data-feather="chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another Action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="container-body">
                    <small class="text-muted">Address: </small>
                    <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133"
                            style="border:0" allowfullscreen="" width="100%" height="150" frameborder="0"></iframe>
                    </div>
                    <hr>
                    <small class="text-muted">Email address: </small>
                    <p>louispierce@example.com</p>
                    <hr>
                    <small class="text-muted">Mobile: </small>
                    <p>+ 202-222-2121</p>
                    <hr>
                    <small class="text-muted">Birth Date: </small>
                    <p class="m-b-0">October 17th, 93</p>
                    <hr>
                    <small class="text-muted">Social: </small>
                    <p> <i data-feather="twitter"></i> twitter.com/example</p>
                    <p><i data-feather="facebook" class="mr-5"></i> facebook.com/example</p>
                    <p><i data-feather="github" class="mr-5"></i> github.com/example</p>
                    <p><i data-feather="instagram" class="mr-5"></i> instagram.com/example</p>
                </div>
            </div>
            <div class="bottom-right-container " id="theDiv">
                <div class="">

                    <div class="container-header">
                        <h2>Basic Information</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" id="theButton" class="full-screen"><i
                                        class="icon-frame"></i>icon</a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"  data-toggle="dropdown" 
                                aria-expanded="false"><i data-feather="chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="container-body">
                        <div class="">
                            <div class="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">-- Select Gander --</option>
                                        <option value="AF">Male</option>
                                        <option value="AX">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-calendar"></i></span>
                                        </div>
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                                            placeholder="Birthdate">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-globe"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="http://">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">

                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State/Province">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <textarea rows="4" type="text" class="form-control" placeholder="Address"></textarea>
                                </div>
                            </div>

                        </div>
                        <button type="button" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                        <button type="button" class="btn btn-round btn-default">Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    </div>
@endsection

@section('scriptLink')
    <script>
        feather.replace()
    </script>

@endsection

{{-- <div class="">
    <ul class="">
        <li class="list-group-item">
            Anyone seeing my profile page
            <div class="float-right">
                <label class="switch">
                    <input type="checkbox" checked="">
                    <span class="slider round"></span>
                </label>
            </div>
        </li>
        <li class="list-group-item">
            Anyone send me a message
            <div class="float-right">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </li>
        <li class="list-group-item">
            Anyone posts a comment on my post
            <div class="float-right">
                <label class="switch">
                    <input type="checkbox" checked="">
                    <span class="slider round"></span>
                </label>
            </div>
        </li>
        <li class="list-group-item">
            Anyone invite me to group
            <div class="float-right">
                <label class="switch">
                    <input type="checkbox" checked="">
                    <span class="slider round"></span>
                </label>
            </div>
        </li>
    </ul>
</div> --}}
{{-- <div class="card">
    <div class="container-header">
        <h2>Account Data</h2>
    </div>
    <div class="container-body">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" value="louispierce" disabled=""
                        placeholder="Username">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="form-group">
                    <input type="email" class="form-control" value="louis.info@yourdomain.com"
                        placeholder="Email">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <hr>
                <h6>Change Password</h6>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Current Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="New Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm New Password">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
        <button type="button" class="btn btn-round btn-default">Cancel</button>
    </div> --}}
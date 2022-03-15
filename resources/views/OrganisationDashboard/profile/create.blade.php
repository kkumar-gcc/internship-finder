@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">
                <i class="fa fa-plus text-muted mr-5"></i> Create Your Organization Profile
            </h2>
            <h3 class="h5 text-muted mb-0">
                Kindly ensure to provide the accurate details of your profile
            </h3>
        </div>
        <div class="block block-rounded block-fx-shadow">
            <div class="block-content">
                <form action="/organization/create/profile" method="post" enctype="multipart/form-data">
                    @csrf
                    <h2 class="content-heading text-black">Vital Info</h2>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Pay extra attention since this is the data which customers will see first.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="re-listing-name">Organization Name</label>
                                <input type="text"
                                    class="form-control form-control-lg {{ $errors->has('name') ? 'border-danger' : '' }}"
                                    id="re-listing-name" name="name" placeholder="your Organization name">
                                <small class="form-text text-danger"
                                    style="font-size: 14px;">{!! $errors->first('name') !!}</small>

                            </div>
                            <div class="form-group">
                                <div class="custom-file form">
                                    {{-- <label for="re-listing-photos">Date of birth</label> --}}
                                    <input type="file"
                                        class="custom-file-input {{ $errors->has('photo') ? 'border-danger' : '' }}"
                                        id="re-listing-photos" name="photo" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="re-listing-photos">Choose Profile
                                        Image</label>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <img id="preview-image-before-upload"
                                        src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                        alt="preview image" style="max-height: 250px;">
                                </div>
                            </div>
                            <div class="row items-push">
                                <div class="col-lg-7 offset-lg-4">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-alt-success">
                                            <i class="fa fa-plus mr-5"></i>
                                            Add Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#re-listing-photos').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
@endsection

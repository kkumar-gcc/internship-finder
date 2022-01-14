@extends('layouts.internDashboard')

@section('content')

<div class="content">
  <div class="row invisible" data-toggle="appear">
    <div class="col-md-4">
      <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-20 text-center">
            <div class="mb-10">
              <i class="fa fa-building fa-3x text-corporate"></i>
            </div>
            <div class="font-size-h4 font-w600">Lorem ipsum dolor sit amet.</div>
            <!-- <div class="text-muted">Consider Adding More!</div> -->
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-20 text-center">
            <div class="mb-10">
              <i class="fa fa-thumbs-up fa-3x text-elegance"></i>
            </div>
            <div class="font-size-h4 font-w600">Lorem Ipsum</div>
            <div class="text-muted">Lorem ipsum dolor sit amet.</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-20 text-center">
            <div class="mb-10">
              <i class="fa fa-bell fa-3x text-primary"></i>
            </div>
            <div class="font-size-h4 font-w600">0 Notification</div>
            <div class="text-muted">Lorem ipsum dolor sit amet.</div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="block block-rounded block-bordered invisible" data-toggle="appear">
    <div class="block-header block-header-default">
      <h3 class="block-title">Lorem Ipsum</h3>
      <div class="block-options">
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
          <thead>
            <tr>
              <th>Lorem Ipsum</th>
              <th>Lorem Ipsum</th>
              <th>Lorem Ipsum</th>
              <th>Lorem Ipsum</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

@endsection
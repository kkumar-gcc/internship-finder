<header id="page-header" style="margin-top: 2px;">
  <div class="content-header">
    <div class="content-header-section">
      <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-navicon"></i>
      </button>
      <button type="button" class="btn btn-circle btn-dual-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-search"></i>
      </button>
      <div class="content-header-item d-none d-sm-inline-block">
        <form action="https://demo.pixelcave.com/codebase/db_medical.html" method="post" onsubmit="return false;">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search"></i>
              </span>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="content-header-section">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-md d-sm-none"></i>

          <span class="d-none d-sm-inline-block">{{auth()->user()->name}}</span>

          <i class="fa fa-angle-down ml-5"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
          <a class="dropdown-item d-flex align-items-center justify-content-between" href="/">
            <span>
            <i class="fas fa-globe"></i> Back to website
            </span>

            <a class="dropdown-item d-flex align-items-center justify-content-between" href="/dashboard/apartment">
              <span>
                <i class="fa fa-building mr-5"></i>Visit Workspace
              </span>
              <span class="badge badge-info"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">
            <i class="far fa-user"></i> Profile
            </a>
            <div class="dropdown-divider"></div>

            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit">
                <i class="fa fa-unlock-alt mr-5"></i> Sign Out
              </button>
            </form>
        </div>
      </div>

    </div>
  </div>
  <div id="page-header-search" class="overlay-header">
    <div class="content-header content-header-fullrow">
      <form>
        <div class="input-group">
          <div class="input-group-prepend">
            <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
              <i class="fa fa-times"></i>
            </button>
          </div>
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary px-15">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div id="page-header-loader" class="overlay-header bg-primary">
    <div class="content-header content-header-fullrow text-center">
      <div class="content-header-item">
        <i class="fa fa-sun-o fa-spin text-white"></i>
      </div>
    </div>
  </div>

</header>
<div class="sidebar-content">
    <div class="content-header content-header-fullrow px-15">
        <div class="content-header-section sidebar-mini-visible-b">
            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
            </span>
        </div>
        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
            </button>
            <div>
                <a class="navbar-brand mb-4" href="index-2.html"><img src="/images/housexplorer-logo.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="js-sidebar-scroll">
        <div class="sidebar-mini-visible-b align-v animated fadeIn">
            <img class="img-avatar img-avatar32" src="/media/avatars/avatar11.jpg" alt="">
        </div>
        <div class="sidebar-mini-hidden-b text-center">

            <a class="img-link" href="javascript:void(0)" style="margin-top:30px">

                <img class="img-avatar" src="http://source.unsplash.com/random/200x201" alt="Your Photo">

            </a>
            <ul class="list-inline mt-10">
                <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="javascript:void(0)">{{Auth::user()->name}}</a>
                </li>
            </ul>

        </div>

        <div class="content-side content-side-full">

            <ul class="nav-main">
                <li>
                    <a class="active" href=""><i class="fa fa-hospital-o"></i><span class="sidebar-mini-hide">Overview</span></a>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage</span></li>
                <li>
                    @if(!auth()->user()->intern_id)
                    <a href="/create" class="nav-submenu" data-toggle="nav-submenu"><i class="fas fa-user"> </i> <span class="sidebar-mini-hide">Profile</span></a>
                    @else
                    <a href="/create" class="nav-submenu" data-toggle="nav-submenu"><i class="fas fa-user"> </i> <span class="sidebar-mini-hide">Profile</span></a>
                    @endif
                    <ul>
                        <li>
                            @if(!auth()->user()->agent_id)
                            <a href="/create"><i class="far fa-user"> </i> Create Profile</a>
                            @else
                            <a href="/create"><i class="far fa-user"> </i> Edit Profile</a>
                            @endif
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href=""><i class="fa fa-building"></i><span class="sidebar-mini-hide">Lorem Ipsum</span></a>
                    <ul>
                        <li>
                            <a href="">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Contact Us</span></li>
                <li>
                    <a href=""><i class="fa fa-pencil"></i><span class="sidebar-mini-hide"><i class="fas fa-envelope"> </i> Message Admin</span></a>
                </li>
            </ul>
        </div>

    </div>
</div>
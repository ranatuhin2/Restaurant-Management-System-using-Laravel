@php
    $segment4 = Request::segment(4);
    $segment5 = Request::segment(5);
    $info = \App\Helper\admin\siteInformation::siteInfo();
@endphp

<style>
    .os-host-overflow {
        overflow: initial !important;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin::dashboard') }}" class="brand-link">
        <img src="{{  $info['site_logo'] }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $info['site_name'] }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('upload/images/profile/' . Auth::user()['profile_picture']) }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin::profile', ['name' => Auth::user()['slug_name']]) }}"
                    class="d-block">{{ Auth::user()['name'] }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

{{--                <li class="nav-header">MISCELLANEOUS</li>--}}
                <li class="nav-item @if (url()->current() == route('admin::dashboard')) menu-open @endif">
                    <a href="#" class="nav-link @if (url()->current() == route('admin::dashboard')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::dashboard') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::index_about') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::index_image') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Image</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::team-index') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Our Team</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::menu-index') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Food Item</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::index-service') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::index-review') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Review</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::get-contact') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::booking-data') }}" class="nav-link  @if (url()->current() == route('admin::dashboard')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking</p>
                            </a>
                        </li>
                    </ul>
                    
                    
                </li>
                {{--<li class="nav-item
                      @if (request()->routeIs('admin::information')) menu-open @endif">
                    <a href="#"
                        class="nav-link
                         @if (request()->routeIs('admin::information')) active @endif">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            General Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin::information') }}"
                                class="nav-link
                            @if (request()->routeIs('admin::information')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>--}}
                <li class="nav-item">
                    <a href="{{ route('admin::team_member') }}"
                       class="nav-link
                            @if (in_array($segment4, ['team-member','add-team-member','edit-team-member']) ||
                                $segment5 == 'our_team')
                                active  @endif">
                        <i class="fas fa-users-cog nav-icon"></i>
                        <p>team member</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin::contact') }}"
                       class="nav-link
                            @if (in_array($segment4, ['contact','add-contact','edit-contact'])) active @endif">
                        <i class="fa fa-cog nav-icon"></i>
                        <p>Contact Info</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin::information') }}"
                       class="nav-link
                            @if (in_array($segment4, ['information','add-information','information-edit'])) active @endif">
                        <i class="fa fa-cog nav-icon"></i>
                        <p>General Settings</p>
                    </a>
                </li>
               {{-- <li class="nav-item">
                    <a href="{{ route('admin::aboutus.index') }}"
                        class="nav-link @if (request()->routeIs('admin::aboutus.*')) active @endif">
                        <i class="nav-icon fa fa-buysellads"></i>
                        <p> AboutUs</p>
                    </a>
                </li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

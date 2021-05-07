<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="../../index.html">
                <img src="images/logo.svg" alt="logo" /> </a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html">
                <img src="images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
                <li class="nav-item dropdown language-dropdown">
                    <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#"
                        data-toggle="dropdown" aria-expanded="false">
                        <div class="d-inline-flex mr-0 mr-md-3">
                            <div class="flag-icon-holder">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                        </div>
                        <span class="profile-text font-weight-medium d-none d-md-block">English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2"
                        aria-labelledby="LanguageDropdown">
                        <a class="dropdown-item">
                            <div class="flag-icon-holder">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>English
                        </a>
                        <a class="dropdown-item">
                            <div class="flag-icon-holder">
                                <i class="flag-icon flag-icon-fr"></i>
                            </div>French
                        </a>
                        <a class="dropdown-item">
                            <div class="flag-icon-holder">
                                <i class="flag-icon flag-icon-ae"></i>
                            </div>Arabic
                        </a>
                        <a class="dropdown-item">
                            <div class="flag-icon-holder">
                                <i class="flag-icon flag-icon-ru"></i>
                            </div>Russian
                        </a>
                    </div>
                </li>
            </ul>
            <form class="ml-auto search-form d-none d-md-block" action="#">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search Here">
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                        aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count bg-success">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                        aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                <p class="font-weight-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                <p class="font-weight-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration
                                </h6>
                                <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                        aria-expanded="false">
                        <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                            <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                        </div>
                        <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i
                                class="dropdown-item-icon ti-dashboard"></i></a>
                        <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                        <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                        <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                        <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </nav>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="profile-image">
                            <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                            <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper">
                            <p class="profile-name">Allen Moreno</p>
                            <p class="designation">Premium user</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-category">Main Menu</li>
                <li class="nav-item">
                    <a class="nav-link" href="main">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('citas/') }}">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Citas</span>
                    </a>
                    <div class="collapse" id="ui-basic">
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('medicos/') }}">
                        <i class="menu-icon typcn typcn-shopping-bag"></i>
                        <span class="menu-title">Medicos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('pacientes/') }}">
                        <i class="menu-icon typcn typcn-document-add"></i>
                        <span class="menu-title">Pacientes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('usuarios/') }}">
                        <i class="menu-icon typcn typcn-shopping-bag"></i>
                        <span class="menu-title">Usuarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('configuracion/') }}">
                        <i class="menu-icon typcn typcn-th-large-outline"></i>
                        <span class="menu-title">Configuracion</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('consultorios/') }}">
                        <i class="menu-icon typcn typcn-bell"></i>
                        <span class="menu-title">Consultorios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('especializacion/') }}">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Especializacion</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('facturacion/') }}">
                        <i class="menu-icon typcn typcn-document-add"></i>
                        <span class="menu-title">Facturacion</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('receta/') }}">
                        <i class="menu-icon typcn typcn-document-add"></i>
                        <span class="menu-title">Receta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('calendario/') }}">
                        <i class="menu-icon typcn typcn-document-add"></i>
                        <span class="menu-title">Calendario</span>
                    </a>
                </li>
            </ul>
        </nav>

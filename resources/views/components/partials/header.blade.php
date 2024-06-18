<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="img-fluid for-light" src="{{ asset('import/images/logo/logo.png') }}" alt="" />
                    <img class="img-fluid for-dark" src="{{ asset('import/images/logo/logo_light.png') }}"
                        alt="" />
                </a>
            </div>
        </div>
        <div class="col-4 col-xl-4 page-title">
            <h4 class="f-w-700">{{ $title }}</h4>
            <nav>
                <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
                    <li class="breadcrumb-item f-w-400 active">{{ $title }}</li>
                </ol>
            </nav>
        </div>
        <!-- Page Header Start-->
        <div class="header-wrapper col m-0">
            <div class="row">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="img-fluid" src="{{ asset('import/images/logo/logo.png') }}" alt=""></a>
                    </div>
                    <div class="toggle-sidebar">
                        <svg class="stroke-icon sidebar-toggle status_toggle middle">
                            <use href="{{ asset('import/svg/icon-sprite.svg#toggle-icon') }}"></use>
                        </svg>
                    </div>
                </div>
                <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode">
                                <svg>
                                    <use href="{{ asset('import/svg/icon-sprite.svg') }}#full-screen"></use>
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="mode">
                                <svg>
                                    <use href="{{ asset('import/svg/icon-sprite.svg#moon') }}"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown px-0 py-0">
                            <div class="d-flex profile-media align-items-center">
                                <img class="img-30" src="../import/images/dashboard/profile.png" alt="">
                                <div class="flex-grow-1"><span>{{ Auth::user()->name }}</span>
                                    <p class="mb-0 font-outfit">{{ Auth::user()->role }}<i class="fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="../template/private-chat.html">
                                        <i data-feather="user"></i><span>Account </span>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger btn-block w-100" type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->
    </div>
</div>

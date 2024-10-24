<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html">
                <img class="img-fluid" src="{{ asset('import/assets/images/logo/logo_light.png') }}" alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#toggle-icon') }}"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-toggle-icon') }}"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('import/assets/images/logo/logo-icon.png') }}" alt=""></a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="index.html">
                            <img class="img-fluid" src="{{ asset('import/assets/images/logo/logo-icon.png') }}"
                                alt="">
                        </a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    @if (Auth()->user()->role === 'admin')
                        <li class="sidebar-main-title">
                            <div>
                                <h6 class="lan-1">General</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard-admin') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-home') }}"></use>
                                </svg>
                                <span class="lan-3">Dashboard </span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"> </i>
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('form-create-umkm') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-form') }}"></use>
                                </svg>
                                <span>Form UMKM</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"> </i>
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('data-umkm-export') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-form') }}"></use>
                                </svg>
                                <span>Export</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"> </i>
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('data-umkm-import') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-form') }}"></use>
                                </svg>
                                <span>Import</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"> </i>
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('satuan') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-form') }}"></use>
                                </svg>
                                <span>Satuan</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"> </i>
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('pelatihan') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-form') }}"></use>
                                </svg>
                                <span>Pelatihan</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <i class="fa fa-thumb-tack"> </i>
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('user-management') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-form') }}"></use>
                                </svg>
                                <span>User</span>
                            </a>
                        </li>
                    @else
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('form-create-umkm-user') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('import/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('import/assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg>
                            <span class="lan-3">Form UMKM </span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
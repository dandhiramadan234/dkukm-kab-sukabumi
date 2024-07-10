<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

    <!-- Page Sidebar Start-->
    <div class="sidebar-wrapper" data-layout="stroke-svg">
        <div>
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="img-fluid" src="{{ asset('import/images/logo/logo_light.png') }}" alt="">
                </a>
                <div class="back-btn">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                </div>
            </div>
            <div class="logo-icon-wrapper">
                <a href="index.html"><img class="img-fluid" src="{{ asset('import/images/logo/logo-icon.png') }}"
                        alt="">
                </a>
            </div>
            @if (Auth()->user()->role === 'admin')
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <div class="mobile-back text-end">
                                    <span>Back</span>
                                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li class="pin-title sidebar-main-title">
                                <div>
                                    <h6>Pinned</h6>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"> </i>
                                <a class="sidebar-link sidebar-title link-nav" href="/dashboard">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#stroke-home') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#fill-home') }}"></use>
                                    </svg>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"> </i>
                                <a class="sidebar-link sidebar-title link-nav" href="/form-create-umkm">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#stroke-form') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#fill-form') }}"></use>
                                    </svg>
                                    <span>Form UMKM</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"> </i>
                                <a class="sidebar-link sidebar-title link-nav" href="/export-data">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#stroke-form') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#fill-form') }}"></use>
                                    </svg>
                                    <span>Export</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"> </i>
                                <a class="sidebar-link sidebar-title link-nav" href="/import-data">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#stroke-form') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#fill-form') }}"></use>
                                    </svg>
                                    <span>Import</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"> </i>
                                <a class="sidebar-link sidebar-title link-nav" href="/satuan">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#stroke-form') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#fill-form') }}"></use>
                                    </svg>
                                    <span>Satuan</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"> </i>
                                <a class="sidebar-link sidebar-title link-nav" href="/user-management">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#stroke-form') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#fill-form') }}"></use>
                                    </svg>
                                    <span>User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            @else
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <div class="mobile-back text-end">
                                    <span>Back</span>
                                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li class="pin-title sidebar-main-title">
                                <div>
                                    <h6>Pinned</h6>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"> </i>
                                <a class="sidebar-link sidebar-title link-nav" href="/form-create-umkm-user">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#stroke-form') }}"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('import/svg/icon-sprite.svg#fill-form') }}"></use>
                                    </svg>
                                    <span>Form UMKM</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            @endif
        </div>
    </div>
    <!-- Page Sidebar Ends-->
</div>

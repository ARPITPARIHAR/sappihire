<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ areActiveRoutes(['business-setting']) }}">
                {{-- <a href="{{ route('business-setting') }}">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">{{ __('Business Settings') }}</span>
                </a> --}}
            </li>


            <li class="{{ areActiveRoutes(['banner.index','banner.create','banner.edit']) }}">
                <a href="{{ route('sample.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('SAMPLE') }}</span>
                </a>
            </li>

            <li class="{{ areActiveRoutes(['galleries.index','galleries.create','galleries.edit']) }}">
                 <a href="{{ route('buyer.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('BUYER') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['tenderservice.index','tenderservice.create','tenderservice.edit']) }}">
                <a href="{{ route('vendor.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('VENDOR') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['tenderservice.index','tenderservice.create','tenderservice.edit']) }}">
                <a href="{{ route('team.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('TEAM') }}</span>
                </a>
            </li>






                </ul>
            </li>
        </ul>
    </div>
</nav>

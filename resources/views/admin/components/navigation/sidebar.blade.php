<div class="sideBar">
    <div class="cls-sidebar"></div>
    <div class="sidebar-inner">
        <ul class="sd-bar-menu">
            <li><a href=""><span class="img-span"><img src="{{ URL::asset('assets/img/user.png') }}" alt=""></span>{{ __('home.greet') }}</a></li>
            <li><a href=""><span class="img-span"><img src="{{ URL::asset('assets/img/r7.png') }}" alt=""> <span class="noti-count">3</span></span>{{ __('home.msg') }}</a></li>
            <li><a href="/admin/supplier"><span class="img-span"><img src="{{ URL::asset('assets/img/ic-2.png') }}" alt=""></span>{{ __('home.mysupinfo') }}</a></li>
            <li><a href="/admin/catalog"><span class="img-span"><img src="{{ URL::asset('assets/img/ic-3.png') }}" alt=""></span>{{ __('home.mycatalog') }}</a></li>
            <li><a href="/admin"><span class="img-span"><img src="{{ URL::asset('assets/img/ic-4.png') }}" alt=""></span>{{ __('home.accinfo') }}</a></li>
            <li><a href=""><span class="img-span"><img src="{{ URL::asset('assets/img/ic-5.png') }}" alt=""></span>{{ __('home.membership') }}</a></li>
            <li><a href=""><span class="img-span"><img src="{{ URL::asset('assets/img/ic-6.png') }}" alt=""></span>{{ __('home.invoices') }}</a></li>
            <li>
                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span class="img-span"><img src="{{ URL::asset('assets/img/ic-7.png') }}" alt=""></span> {{ __('home.logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>

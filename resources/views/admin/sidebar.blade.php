
<div
        id="m_ver_menu"
        class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
        m-menu-vertical="1"
        m-menu-scrollable="0" m-menu-dropdown-timeout="500">

    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
            <a href="{{route('admin_dashboard')}}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">
                            داشبورد
                        </span>
                        <span class="m-menu__link-badge">
                            {{--<span class="m-badge m-badge--danger">--}}
                            {{--2--}}
                            {{--</span>--}}
                        </span>
                    </span>
                </span>
            </a>
        </li>
        <li class="m-menu__section ">
            <h4 class="m-menu__section-text">
                منوی اصلی
            </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>

        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="{{ route('admin_teams') }}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon fa fa-users"></i>
                <span class="m-menu__link-text">
                    تیم ها
                </span>

            </a>
        </li>

        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="{{ route('admin_players') }}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon fa fa-user"></i>
                <span class="m-menu__link-text">
                    بازیکن ها
                </span>

            </a>
        </li>


    </ul>
</div>


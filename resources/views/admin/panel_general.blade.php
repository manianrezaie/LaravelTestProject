@extends('layouts.panelcommon')
@section('body')
    <style>
        #user-code {
            margin-top: 10%;
            border-radius: 22px;
            padding: 8px 13px;
            font-size: 15px;
        }

        #user-name {
            margin-top: 17%;
        }
    </style>
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- BEGIN: Header -->
        <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-dark ">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="{{ route('admin_dashboard') }}" class="m-brand__logo-wrapper">
                                    <img alt="" src="{{asset('img/logodashboard.png')}}"/>
                                </a>

                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <!-- BEGIN: Left Aside Minimize Toggle -->
                                <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block
					 ">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                                   class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Responsive Header Menu Toggler -->
                            {{--<a id="m_aside_header_menu_mobile_toggle" href="javascript:;"--}}
                            {{--class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">--}}
                            {{--<span></span>--}}
                            {{--</a>--}}
                            <!-- END -->
                                <!-- BEGIN: Topbar Toggler -->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                                   class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                                <!-- BEGIN: Topbar Toggler -->
                            </div>
                        </div>
                    </div>
                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "
                                id="m_aside_header_menu_mobile_close_btn">
                            <i class="la la-close"></i>
                        </button>

                    <!-- END: Horizontal Menu --> <!-- BEGIN: Topbar -->
                        <div id="m_header_topbar"
                             class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">


                                    <li direction="ltr"
                                        class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width"
                                        m-dropdown-toggle="click" m-dropdown-persistent="1" aria-expanded="true">
                                        <a href="#" class="m-nav__link m-dropdown__toggle"
                                           id="m_topbar_notification_icon">

                                            <span class="m-nav__link-icon">
													<i class="flaticon-email"></i>
												</span>
                                        </a>
                                        <div class="m-dropdown__wrapper" style="z-index: 101;">
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center"
                                                     style="background: url(/assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                    <span class="m-dropdown__header-subtitle">
															اطلاع رسانی ها
														</span>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand"
                                                            role="tablist">
                                                            <li class="nav-item m-tabs__item">
                                                                <a class="nav-link m-tabs__link active show"
                                                                   data-toggle="tab" href="#topbar_notifications_events"
                                                                   role="tab" aria-selected="true">
                                                                    پیام ها
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active show"
                                                                 id="topbar_notifications_events" role="tabpanel">
                                                                <div class="m-scrollable mCustomScrollbar _mCS_3 mCS-autoHide mCS_no_scrollbar"
                                                                     data-scrollable="true" data-max-height="250"
                                                                     data-mobile-max-height="200"
                                                                     style="max-height: 250px; height: 250px; position: relative; overflow: visible;">
                                                                    <div id="mCSB_3"
                                                                         class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside"
                                                                         style="max-height: none;" tabindex="0">
                                                                        <div id="mCSB_3_container"
                                                                             class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                             style="position:relative; top:0; left:0;"
                                                                             dir="ltr">
                                                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                                                <div class="m-list-timeline__items">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                        m-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="https://www.gravatar.com/avatar/{{md5(auth()->user()->email)}}"
                                                         style="border: 1px solid #55555545;"
                                                         class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
                                            <span class="m-topbar__username m--hide">
													Nick
												</span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center"
                                                     style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__pic">
                                                            <img src="{{asset('img/profilefree.jpg')}}"
                                                                 class="m--img-rounded m--marginless" alt=""/>
                                                        </div>
                                                        <div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	{{auth()->user()->name}}
																</span>
                                                            <a href=""
                                                               class="m-card-user__email m--font-weight-300 m-link">
                                                                {{auth()->user()->email}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					پروفایل
																				</span>
																			</span>
																		</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                                    <span class="m-nav__link-text">
																			تغییر کلمه عبور
																		</span>
                                                                </a>
                                                            </li>

                                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                                            <li class="m-nav__item">
                                                                <form id="frm-logout" action="{{ route('logout') }}"
                                                                      method="POST" style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>

                                                                <a href="{{route('logout')}}"
                                                                   onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                                                                   class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                    خروج
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <ul class="m-nav-sticky" style="margin-top: 30px;">
                                        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title=""
                                            data-placement="left" data-original-title="اینستاگرام">
                                            <a href="https://www.instagram.com/digibestnet" target="_blank">
                                                <i class="la la-cart-arrow-down"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </ul>
                            </div>
                        </div>
                        <!-- END: Topbar -->
                    </div>
                </div>
            </div>
        </header>
        <!-- END: Header -->
        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                <i class="la la-close"></i>
            </button>
            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
                <!-- BEGIN: Aside Menu -->
            @include('admin.sidebar')
            <!-- END: Aside Menu -->
            </div>
            <!-- END: Left Aside -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title ">
                                @yield('breadCrumb1' , 'پنل کاربری')

                                <span class="m--regular-font-size-lg1">@yield('breadCrumb2')</span>
                            </h3>
                        </div>
                        <div>
                            {{--  <h4 class="m-subheader__daterange m--padding-left-30 m--padding-right-30"
                                  id="m_dashboard_daterangepicker">
                                  {{auth()->user()->code}}
                              </h4>--}}
                        </div>
                        {{--
                                                <div>
                                                        <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                                                            <span class="m-subheader__daterange-label">
                                                                <span class="m-subheader__daterange-title"></span>
                                                                <span class="m-subheader__daterange-date m--font-brand"></span>
                                                            </span>
                                                            <a href="#"
                                                               class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                                                                <i class="la la-angle-down"></i>
                                                            </a>
                                                        </span>
                                                </div>
                        --}}
                    </div>
                </div>
                <!-- END: Subheader -->
                <div class="m-content">
                    @include('layouts.flash-messages')
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end:: Body -->
        <!-- begin::Footer -->
        <footer class="m-grid__item		m-footer ">
            <div class="m-container m-container--fluid m-container--full-height m-page__container">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2019 &copy; All right reserved
								{{--<a href="http://bigoffice.ir" class="m-link">--}}
									{{--BigOffice.ir--}}
								{{--</a>--}}
							</span>
                    </div>
                    <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                        {{--
                          <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                              <li class="m-nav__item">
                                  <a href="#" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                              About
                                          </span>
                                  </a>
                              </li>
                              <li class="m-nav__item">
                                  <a href="#" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                              Privacy
                                          </span>
                                  </a>
                              </li>
                              <li class="m-nav__item">
                                  <a href="#" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                              T&C
                                          </span>
                                  </a>
                              </li>
                              <li class="m-nav__item">
                                  <a href="#" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                              Purchase
                                          </span>
                                  </a>
                              </li>
                              <li class="m-nav__item m-nav__item">
                                  <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center"
                                     data-placement="left">
                                      <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                  </a>
                              </li>
                          </ul>
                          --}}
                    </div>
                </div>
            </div>
        </footer>
        <!-- end::Footer -->
    </div>
    <!-- end:: Page -->
    <!-- begin::Quick Sidebar -->
    {{--
     <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
         <div class="m-quick-sidebar__content m--hide">
                 <span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
                     <i class="la la-close"></i>
                 </span>
             <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                 <li class="nav-item m-tabs__item">
                     <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger"
                        role="tab">
                         Messages
                     </a>
                 </li>
                 <li class="nav-item m-tabs__item">
                     <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
                         Settings
                     </a>
                 </li>
                 <li class="nav-item m-tabs__item">
                     <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
                         Logs
                     </a>
                 </li>
             </ul>
             <div class="tab-content">
                 <div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
                     <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                         <div class="m-messenger__messages">
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--in">
                                     <div class="m-messenger__message-pic">
                                         <img src="assets/app/media/img//users/user3.jpg" alt=""/>
                                     </div>
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-username">
                                                 Megan wrote
                                             </div>
                                             <div class="m-messenger__message-text">
                                                 Hi Bob. What time will be the meeting ?
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--out">
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-text">
                                                 Hi Megan. It's at 2.30PM
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--in">
                                     <div class="m-messenger__message-pic">
                                         <img src="assets/app/media/img//users/user3.jpg" alt=""/>
                                     </div>
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-username">
                                                 Megan wrote
                                             </div>
                                             <div class="m-messenger__message-text">
                                                 Will the development team be joining ?
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--out">
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-text">
                                                 Yes sure. I invited them as well
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__datetime">
                                 2:30PM
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--in">
                                     <div class="m-messenger__message-pic">
                                         <img src="assets/app/media/img//users/user3.jpg" alt=""/>
                                     </div>
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-username">
                                                 Megan wrote
                                             </div>
                                             <div class="m-messenger__message-text">
                                                 Noted. For the Coca-Cola Mobile App project as well ?
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--out">
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-text">
                                                 Yes, sure.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--out">
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-text">
                                                 Please also prepare the quotation for the Loop CRM project as well.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__datetime">
                                 3:15PM
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--in">
                                     <div class="m-messenger__message-no-pic m--bg-fill-danger">
                                             <span>
                                                 M
                                             </span>
                                     </div>
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-username">
                                                 Megan wrote
                                             </div>
                                             <div class="m-messenger__message-text">
                                                 Noted. I will prepare it.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--out">
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-text">
                                                 Thanks Megan. I will see you later.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="m-messenger__wrapper">
                                 <div class="m-messenger__message m-messenger__message--in">
                                     <div class="m-messenger__message-pic">
                                         <img src="assets/app/media/img//users/user3.jpg" alt=""/>
                                     </div>
                                     <div class="m-messenger__message-body">
                                         <div class="m-messenger__message-arrow"></div>
                                         <div class="m-messenger__message-content">
                                             <div class="m-messenger__message-username">
                                                 Megan wrote
                                             </div>
                                             <div class="m-messenger__message-text">
                                                 Sure. See you in the meeting soon.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="m-messenger__seperator"></div>
                         <div class="m-messenger__form">
                             <div class="m-messenger__form-controls">
                                 <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                             </div>
                             <div class="m-messenger__form-tools">
                                 <a href="" class="m-messenger__form-attachment">
                                     <i class="la la-paperclip"></i>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
                     <div class="m-list-settings">
                         <div class="m-list-settings__group">
                             <div class="m-list-settings__heading">
                                 General Settings
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         Email Notifications
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" checked="checked" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         Site Tracking
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         SMS Alerts
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         Backup Storage
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         Audit Logs
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" checked="checked" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                         </div>
                         <div class="m-list-settings__group">
                             <div class="m-list-settings__heading">
                                 System Settings
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         System Logs
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         Error Reporting
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         Applications Logs
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         Backup Servers
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" checked="checked" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                             <div class="m-list-settings__item">
                                     <span class="m-list-settings__item-label">
                                         Audit Logs
                                     </span>
                                 <span class="m-list-settings__item-control">
                                         <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                             <label>
                                                 <input type="checkbox" name="">
                                                 <span></span>
                                             </label>
                                         </span>
                                     </span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
                     <div class="m-list-timeline">
                         <div class="m-list-timeline__group">
                             <div class="m-list-timeline__heading">
                                 System Logs
                             </div>
                             <div class="m-list-timeline__items">
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         12 new users registered
                                         <span class="m-badge m-badge--warning m-badge--wide">
                                                 important
                                             </span>
                                     </a>
                                     <span class="m-list-timeline__time">
                                             Just now
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         System shutdown
                                     </a>
                                     <span class="m-list-timeline__time">
                                             11 mins
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                     <a href="" class="m-list-timeline__text">
                                         New invoice received
                                     </a>
                                     <span class="m-list-timeline__time">
                                             20 mins
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Database overloaded 89%
                                         <span class="m-badge m-badge--success m-badge--wide">
                                                 resolved
                                             </span>
                                     </a>
                                     <span class="m-list-timeline__time">
                                             1 hr
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         System error
                                     </a>
                                     <span class="m-list-timeline__time">
                                             2 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Production server down
                                         <span class="m-badge m-badge--danger m-badge--wide">
                                                 pending
                                             </span>
                                     </a>
                                     <span class="m-list-timeline__time">
                                             3 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Production server up
                                     </a>
                                     <span class="m-list-timeline__time">
                                             5 hrs
                                         </span>
                                 </div>
                             </div>
                         </div>
                         <div class="m-list-timeline__group">
                             <div class="m-list-timeline__heading">
                                 Applications Logs
                             </div>
                             <div class="m-list-timeline__items">
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         New order received
                                         <span class="m-badge m-badge--info m-badge--wide">
                                                 urgent
                                             </span>
                                     </a>
                                     <span class="m-list-timeline__time">
                                             7 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         12 new users registered
                                     </a>
                                     <span class="m-list-timeline__time">
                                             Just now
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         System shutdown
                                     </a>
                                     <span class="m-list-timeline__time">
                                             11 mins
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                     <a href="" class="m-list-timeline__text">
                                         New invoices received
                                     </a>
                                     <span class="m-list-timeline__time">
                                             20 mins
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Database overloaded 89%
                                     </a>
                                     <span class="m-list-timeline__time">
                                             1 hr
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         System error
                                         <span class="m-badge m-badge--info m-badge--wide">
                                                 pending
                                             </span>
                                     </a>
                                     <span class="m-list-timeline__time">
                                             2 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Production server down
                                     </a>
                                     <span class="m-list-timeline__time">
                                             3 hrs
                                         </span>
                                 </div>
                             </div>
                         </div>
                         <div class="m-list-timeline__group">
                             <div class="m-list-timeline__heading">
                                 Server Logs
                             </div>
                             <div class="m-list-timeline__items">
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Production server up
                                     </a>
                                     <span class="m-list-timeline__time">
                                             5 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         New order received
                                     </a>
                                     <span class="m-list-timeline__time">
                                             7 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         12 new users registered
                                     </a>
                                     <span class="m-list-timeline__time">
                                             Just now
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         System shutdown
                                     </a>
                                     <span class="m-list-timeline__time">
                                             11 mins
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                     <a href="" class="m-list-timeline__text">
                                         New invoice received
                                     </a>
                                     <span class="m-list-timeline__time">
                                             20 mins
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Database overloaded 89%
                                     </a>
                                     <span class="m-list-timeline__time">
                                             1 hr
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         System error
                                     </a>
                                     <span class="m-list-timeline__time">
                                             2 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Production server down
                                     </a>
                                     <span class="m-list-timeline__time">
                                             3 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                     <a href="" class="m-list-timeline__text">
                                         Production server up
                                     </a>
                                     <span class="m-list-timeline__time">
                                             5 hrs
                                         </span>
                                 </div>
                                 <div class="m-list-timeline__item">
                                     <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                     <a href="" class="m-list-timeline__text">
                                         New order received
                                     </a>
                                     <span class="m-list-timeline__time">
                                             1117 hrs
                                         </span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     --}}
    <!-- end::Quick Sidebar -->
    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->            <!-- begin::Quick Nav -->
    {{--<ul class="m-nav-sticky" style="margin-top: 30px;">
       <!--
       <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
           <a href="">
               <i class="la la-eye"></i>
           </a>
       </li>
       <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
           <a href="" >
               <i class="la la-comments-o"></i>
           </a>
       </li>
       -->
      <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
           <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
              target="_blank">
               <i class="la la-cart-arrow-down"></i>
           </a>
       </li>
       <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
           <a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
               <i class="la la-code-fork"></i>
           </a>
       </li>
       <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
           <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
               <i class="la la-life-ring"></i>
           </a>
       </li>

    </ul>       --}}

    <!-- begin::Quick Nav -->
    <!--begin::Base Scripts -->

    <!--end::Base Scripts -->

    <div class="modal fade" id="modal_with_close" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_with_close_title">

                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_with_close_body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        خب !
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection

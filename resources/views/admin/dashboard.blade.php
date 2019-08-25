@extends('admin.panel_general')
@section('reststyle')
@endsection

@section('content')

    <section class="content">
        {{--top section--}}
        <div class="m-portlet ">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::Total Profit-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    تیم ها
                                </h4>
                                <br>
                                <span class="m-widget24__desc">
													تعداد
                                </span>
                                <span class="m-widget24__stats m--font-brand">
                                         {{\App\Models\Team::all()->count()}}
                                    <small></small>
												</span>
                                <div class="m--space-10"></div>
                                <div class="progress m-progress--sm">
                                    <div class="progress-bar m--bg-brand" role="progressbar" style="width: 100%;"
                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="m-widget24__change">
													<a href="">تیم جدید</a>
												</span>
                                <span class="m-widget24__number">
													<i class="fa fa-credit-card"></i>
												</span>
                            </div>
                        </div>
                        <!--end::Total Profit-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Feedbacks-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                   بازیکنان
                                </h4>
                                <br>
                                <span class="m-widget24__desc">
													تعداد
												</span>
                                <span class="m-widget24__stats m--font-info">
{{\App\Models\Player::all()->count()}}
												</span>
                                <div class="m--space-10"></div>
                                <div class="progress m-progress--sm">
                                    <div class="progress-bar m--bg-info" role="progressbar" style="width: 100%;"
                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="m-widget24__change">
													<a href="">بازیکن جدید
													</a>
												</span>
                                <span class="m-widget24__number">
													<i class="fa fa-globe"></i>
												</span>
                            </div>
                        </div>
                        <!--end::New Feedbacks-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Orders-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    مربی ها
                                </h4>
                                <br>
                                <span class="m-widget24__desc">
                                بزودی
								</span>
                                <span class="m-widget24__stats m--font-danger">
												</span>
                                <div class="m--space-10 text-right m--padding-right-20 m--font-boldest">

                                </div>
                                <div class="progress m-progress--sm">
                                    <div class="progress-bar m--bg-danger" role="progressbar" style="width: 100%;"
                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="m-widget24__change">
                                    <a href="#">
                                        مربی جدید
                                    </a>
                                </span>
                                <span class="m-widget24__number">
									<i class="fa fa-instagram"></i>
								</span>
                            </div>
                        </div>
                        <!--end::New Orders-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Users-->
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                لیگ ها
                                </h4>
                                <br>
                                <span class="m-widget24__desc">
									تعداد
                                </span>
                                <span class="m-widget24__stats m--font-success">
									0
                                </span>
                                <div class="m--space-10"></div>
                                <div class="progress m-progress--sm">
                                    <div class="progress-bar m--bg-success" role="progressbar" style="width: 100%;"
                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="m-widget24__change">
													به زودی
												</span>
                                <span class="m-widget24__number">
													<i class="fa fa-paper-plane"></i>
												</span>
                            </div>
                        </div>
                        <!--end::New Users-->
                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection

@section('restscripts')
    <script src="{{asset('js/panel/dashboard.js')}}" type="text/javascript"></script>
@endsection
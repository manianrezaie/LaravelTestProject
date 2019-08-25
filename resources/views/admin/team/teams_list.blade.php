@extends('admin.panel_general')

@section('breadCrumb1', 'تیم ها')
@section('breadCrumb2' ,'لیست همه')
@section('content')

    <h4>لیست تیم ها</h4>
    <a href="{{route('admin_new_team')}}" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air pull-left">
        <i class="fa fa-users">&nbsp;</i>
        ثبت تیم جدید
    </a>
    <div class="clearfix m--margin-bottom-20"></div>
    <div class="row">
        @foreach($teams as $team)
            <div class="col-xl-3">
                <div class="m-portlet   m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force"
                     style="direction: rtl">
                    <div class="m-portlet__head m-portlet__head--fit">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-action">
                                {{--<button type="button" class="btn btn-sm m-btn--pill  btn-brand">
                                    جزییات
                                </button>--}}
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body ">
                        <div class="m-widget19 ">
                            <div class="m--padding-5 m-widget19__pic m-portlet-fit--top m-portlet-fit--sides"
                                 style="min-height: 280px">
                                <img style="max-height: 300px" src="{{ \App\Http\Controllers\FileController::getImage($team->image, "thumb3", "images/teams") }}"
                                     alt="">
                                <h3 class="m-widget19__title m--font-light">
                                    {{$team->name}}
                                </h3>
                                <div class="m-widget19__shadow"></div>
                            </div>
                            <div class="m-widget19__content">
                                <div class="m-widget19__header">
                                    <div class="m-widget19__user-img">
                                        <img class="m-widget19__img" src="/img/boxed-bg.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget19__info">
														<span class="m-widget19__username m--font-bolder text-info">

                                                                <strong>{{$team->name}}</strong>

														</span>

                                    </div>
                                    <div class="m-widget19__stats">
														<span class="m-widget19__number m--font-brand">
															{{--{{$team->point}}--}}
														</span>
                                        <span class="m-widget19__comment">
															{{--امتیاز--}}
														</span>
                                    </div>
                                </div>
                                <div class="m-widget19__body">
                                    تعداد بازیکنان جاری: {{$team->players()->count()}}
                                    <p>&nbsp;</p>
                                </div>

                            </div>
                            <div class="m-widget19__action text-right m--margin-top-20">

                                <a href="{{route('admin_edit_team' , ['id'=>$team->id])}}"
                                   style="position: absolute;bottom: 39px;left: 26px;"
                                   class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom ">
                                    مشاهده جزئیات
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

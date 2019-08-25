@extends('admin.panel_general')

@section('breadcrumb1')
   بازیکنان
@endsection
@section('breadcrumb2')
    لیست  و افزودن
@endsection
@section('content')
    @if($errors->any())
        @if (session()->has('danger'))
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">{{ $errors->first() }}</div>
        @endif
    @endif

    <a href="{{route('admin_new_player')}}" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air pull-left">
        <i class="fa fa-users">&nbsp;</i>
        ثبت بازیکن جدید
    </a>
    <div class="clearfix m--margin-bottom-20"></div>

    <div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="fa fa-user"></i>
												</span>
                    <h3 class="m-portlet__head-text">
                        لیست  بازیکنان
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
            </div>
        </div>
        <div class="m-portlet__body">
            <table class="table  table-striped ">
                <thead>
                <tr role="row">
                    <th>شناسه</th>
                    <th>نام</th>
                    <th>شهر</th>
                    <th>امتیاز</th>
                    <th>تاریخ ثبت</th>
                    <th style="width: 5%">ویرایش</th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $item)
                    <tr role="row">
                        <th>{{$item->id}}</th>
                        <th>{{$item->full_name}}</th>
                        <th>{{$item->city}}</th>
                        <th>{{$item->score}}</th>
                        <th dir="ltr">{{$item->created_at->format('Y/m/d')}}</th>
                        <th>
                            <a href="{{route('admin_edit_player' , ['id' => $item->id])}}">
                                <i class="fa fa-pencil text text-primary"></i>
                            </a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="row">
                <div class="col-sm-5">

                </div>
                <div class="col-sm-12 text-center">
                    {{ $players->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

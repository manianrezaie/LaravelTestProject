@extends('admin.panel_general')

@section('breadCrumb1')
    تیم ها
@endsection
@section('breadCrumb2')
    @if(isset($team))
        ویرایش تیم {{$team->title}}
    @else
        ایجاد تیم جدید
    @endif
@endsection
@section('content')

    <form id="p_form"
          action="{{isset($team)?route('admin_edit_team_save' , ['id'=>$team->id]) : route('admin_new_team_save')}}"
          method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="m-portlet--full-height m-portlet m-portlet--creative m-portlet--bordered-semi">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-signs-1"></i>
												</span>
                                <h3 class="m-portlet__head-text">
                                    @if(isset($team))
                                        ویرایش تیم {{$team->title}}
                                        <input type="hidden" name="id" value="{{$team->id}}">
                                    @else
                                        ایجاد تیم جدید
                                    @endif
                                </h3>
                                <h2 class="m-portlet__head-label m-portlet__head-label--info">
                        <span>
                            <i class="flaticon-signs-1"></i>
                           تیم
                        </span>
                                </h2>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                        </div>
                    </div>
                    <div class="m-portlet__body">

                        <div class="form-group">
                            @if(isset($team))

                                <img class="img-thumbnail pull-left" style="max-height: 300px"
                                     src="{{ \App\Http\Controllers\FileController::getImage($team->image, "thumb3", "images/teams") }}"
                                     alt="">
                                <div class="clearfix"></div>
                            @endif
                            <div class="form-inline  m--margin-bottom-20">

                                <label for="name" class="m--margin-right-20">نام</label>
                                <input type="text" name="name" value="{{isset($team)?$team->name:''}}" id="name"
                                       required
                                       class="form-control" style=""/>
                                @if ($errors->has('name'))
                                    <div class="form-control-feedback  text-danger"> {{ $errors->first('name') }} </div>
                                @endif
                            </div>

                            <div class="form-inline  m--margin-bottom-20">
                                <label for="city" class="m--margin-right-20">شهر</label>
                                <input type="text" name="city" value="{{isset($team)?$team->city: ''}}"
                                       id="city"
                                       required
                                       class="form-control"/>
                                @if ($errors->has('city'))
                                    <div class="form-control-feedback  text-danger"> {{ $errors->first('city') }} </div>
                                @endif
                            </div>

                            <div class="form-inline  m--margin-bottom-20">
                                <label for="point" class="m--margin-right-20">
                                    @if(isset($team))
                                        تغییر تصویر
                                    @else
                                        تصویر
                                    @endif
                                </label>
                                <input type="file" min="0" max="100000" name="image"
                                       class="form-control"/>
                                @if ($errors->has('image'))
                                    <div class="form-control-feedback  text-danger"> {{ $errors->first('image') }} </div>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="pull-left btn btn-primary">
                            <i class="fa fa-floppy-o">&nbsp;</i>ذخیره
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('restscripts')
    <script src="/assets/demo/default/custom/crud/forms/widgets/form-repeater.js" type="text/javascript"></script>s
    <script>
        $(document).ready(function () {
            @if(isset($team))
            $(".repeater_container").html("");
            @endif
        });
    </script>
@endsection


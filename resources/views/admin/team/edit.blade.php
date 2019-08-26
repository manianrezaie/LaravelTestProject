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

    <style>
        .loading {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: #ffffff8c;
            min-height: 120px;
        ;

        }
    </style>
    @if(isset($team))
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet--full-height m-portlet m-portlet--creative m-portlet--bordered-semi">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h2 class="m-portlet__head-label m-portlet__head-label--info">
                                    <span>
                                       لیست بازیکنان
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="text text-info">
                            <i class="fa fa-plus-circle"></i>
                            جهت افزودن بازیکن ایتدا از لیست یک مورد را انتخاب کرده و کلید اینتر را فشار دهید!
                        </div>
                        <div class="form-inline">
                            <select style="width: 100%" class="form-control m-select2 select2-hidden-accessible"
                                    id="m_select2_4"
                                    name="param" data-select2-id="m_select2_4" tabindex="-1" aria-hidden="true">
                                    <option value="0">----</option>
                                @foreach(\App\Models\Player::all() as $playerItem)
                                    <option value="{{$playerItem->id}}">{{$playerItem->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="clearfix m--margin-top-80"></div>
                        <div class="text-center" style="position:relative;">
                            <div class="team-list position-relative">

                            </div>
                            <div class="loading">
                                <i class="fa fa-spinner text-primary fa-pulse fa-3x"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
    <form id="p_form"
          action="{{isset($team)?route('admin_edit_team_save' , ['id'=>$team->id]) : route('admin_new_team_save')}}"
          method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            @if(isset($team))
                <div class="col-xs-12 col-md-4">
                    <div class="m-portlet--full-height m-portlet m-portlet--creative m-portlet--bordered-semi">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-signs-1"></i>
												</span>
                                    <h3 class="m-portlet__head-text">

                                    </h3>
                                    <h2 class="m-portlet__head-label m-portlet__head-label--info">
                        <span>
                            <i class="flaticon-signs-1"></i>
                           تصویر
                        </span>
                                    </h2>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                            </div>
                        </div>
                        <div class="m-portlet__body">

                            <img class="img-thumbnail pull-left" style="max-height: 300px"
                                 src="{{ \App\Http\Controllers\FileController::getImage($team->image, "thumb3", "images/teams") }}"
                                 alt="">
                            <div class="clearfix"></div>

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
                    </div>
                </div>
            @endif

            <div class="col-xs-12 col-md-8">
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
    <script src="/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            @if(isset($team))
            $(".repeater_container").html("");
            loadPlayers();
            setSelect2Event();
            setRemoveEvents();
            @endif


        });

        function setSelect2Event() {
            $('#m_select2_4').on("select2:selecting", function (e) {
                addPlayerToTeam(e.params.args.data.id);
            });
        }

        function setRemoveEvents() {
            $('.removePlayer').on('click', function () {
                removePlayer($(this).data('id'));
            })
        }

        function removePlayer(playerId) {
            let url = '{{route("admin_get_team_players" , ['id' => $team->id])}}' + '?player_id=' + playerId
                + '&action=remove'
            ajaxPlayer(url);

        }

        function addPlayerToTeam(playerId) {
            let url = '{{route("admin_get_team_players" , ['id' => $team->id])}}' + '?player_id=' + playerId
                + '&action=add'
            ajaxPlayer(url);
        }

        function loadPlayers() {
            let url = '{{route("admin_get_team_players" , ['id' => $team->id])}}';
            ajaxPlayer(url);
        }

        function ajaxPlayer(url) {
            $(".loading").show();
            $.ajax({
                method: 'get',
                url: url,
                success: function (data) {
                    $('.team-list').html(data)
                    setRemoveEvents();
                }
            }).always(function () {
               $(".loading").hide();
            })
        }
    </script>
@endsection


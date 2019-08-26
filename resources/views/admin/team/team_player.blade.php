@foreach($team->players()->get() as $player )
    <div class="pull-left m--margin-left-5 border-info border rounded m--padding-5">
        <i style="cursor: pointer"
           class="fa fa-times text-danger  position-absolute removePlayer"
           data-id="{{$player->id}}" title="حذف بازیکن از تیم"></i>
        <img class="m--img-rounded" style="height: 70px;width: 70px"
             src="{{ \App\Http\Controllers\FileController::getImage($player->image, "thumb3", "images/players") }}"
             alt="">
        <div class="text text-body m--font-boldest m--margin-top-10 text-center">{{$player->full_name}}</div>
    </div>
@endforeach
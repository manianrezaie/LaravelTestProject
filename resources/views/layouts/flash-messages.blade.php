@if ($message = \Illuminate\Support\Facades\Session::get('danger'))
<div class="alert alert-danger alert-dismissible">
    <i  class="pointer pull-left" data-dismiss="alert" aria-hidden="true">
        <i class="fa fa-times pointer"></i>
    </i>
    <i class="icon fa fa-ban"></i>
    {!! $message !!}
</div>
@endif
@if ($message = \Illuminate\Support\Facades\Session::get('info'))
<div class="alert alert-info alert-dismissible">
    <i  class="pointer pull-left" data-dismiss="alert" aria-hidden="true">
        <i class="fa fa-times pointer"></i>
    </i>
    <i class="icon fa fa-info"></i>
    {!! $message !!}
</div>
@endif
@if ($message = \Illuminate\Support\Facades\Session::get('warning'))
<div class="alert alert-warning alert-dismissible">
    <i  class="pointer pull-left" data-dismiss="alert" aria-hidden="true">
        <i class="fa fa-times pointer"></i>
    </i>
    <i class="icon fa fa-warning"></i>
    {!! $message !!}
</div>
@endif
@if ($message = \Illuminate\Support\Facades\Session::get('success'))
<div class="alert alert-success alert-dismissible">
    <i  class="pointer pull-left" data-dismiss="alert" aria-hidden="true">
        <i class="fa fa-times pointer"></i>
    </i>
    <i class="icon fa fa-check"></i>
    {!! $message !!}
</div>
@endif

@if(Session::has('success'))
<div id="success_msg" class="alert {{ (Session::has('success')) ? '' : 'hidden' }} alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="fa-lg fa fa-check"></i>
    <strong>Success :</strong> <div class="msg">
        @if (Session::has('success'))
        {!! Session::get('success') !!}
        @endif
    </div>
</div>
@endif


@if(Session::has('warning_msg'))

<div id="warning_msg" class="alert {{ (Session::has('warning_msg')) ? '' : 'hidden' }} alert-warning fade in alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="fa-lg fa fa-warning"></i>
    <strong>Warning!</strong> <div class="msg">
        @if (Session::has('warning_msg'))
        {!! Session::get('warning_msg') !!}
        @endif
    </div>
</div>
@endif
@if(Session::has('exception_msg'))
<div id="exception_msg" class="alert {{ (Session::has('exception_msg')) ? '' : 'hidden' }} alert-danger  in alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="fa-lg fa fa-danger"></i>
    <strong>Whoops!</strong> There were some problems with your input.<br><div class="msg">
        @if (Session::has('exception_msg'))
        {!! Session::get('exception_msg') !!}
        @endif
    </div>
</div>
@endif

@if ($errors->any())
<div class="w-100 text-center">
    <div class="alert alert-danger alert-dismissable">
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        <strong>Whoops!</strong> There were some problems with your input.<br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif





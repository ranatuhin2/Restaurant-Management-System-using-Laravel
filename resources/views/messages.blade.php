@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="mdi mdi-account-check"></i>
        <strong>{{Session::get('success')}}</strong>
    </div>
@endif
@if(Session::has('password_success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="mdi mdi-account-check"></i>
        <strong>{{Session::get('password_success')}}</strong>
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger profile" style="font-size: 17px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('error')}}</strong>
    </div>
@endif
@if(Session::has('password_error'))
    <div class="alert alert-danger profile" style="font-size: 17px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('password_error')}}</strong>
    </div>
@endif
@if(Session::has('warning'))
    <div class="alert alert-warning profile" style="font-size: 17px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('warning')}}</strong>
    </div>
@endif
@if(Session::has('info'))
    <div class="alert alert-info profile" style="font-size: 17px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('info')}}</strong>
    </div>
@endif
@if(Session::has('primary'))
    <div class="alert alert-primary profile" style="font-size: 17px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('primary')}}</strong>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('success_two'))
    <div class="alert alert-success profile">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5>{{Session::get('success_two')}}</h5>
    </div>
@endif

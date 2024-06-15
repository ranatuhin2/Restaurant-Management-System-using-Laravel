@if (session()->has('success'))
    <div class="alert alert-success" id="message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session()->get('success') }}
    </div>
@endif
@if (session()->has('info'))
    <div class="alert alert-info" id="message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session()->get('info') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-error" id="message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session()->get('error') }}
    </div>
@endif
@if (session()->has('warning'))
    <div class="alert alert-warning" id="message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session()->get('warning') }}
    </div>
@endif
@if(count($errors) > 0 )
    <div class="alert alert-danger alert-dismissible fade show" role="alert"  id="message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="p-0 m-0" style="list-style: none;">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

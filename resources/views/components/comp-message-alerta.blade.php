@if(Session::has('message'))
<div class="alert alert-danger" role="alert">
    <h5 style="color: #da0b0b;"><strong>Error!</strong> {!! Session::get('message') !!}</h5>
</div>
@endif
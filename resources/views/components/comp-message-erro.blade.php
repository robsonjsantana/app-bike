@if(count($errors) > 0)
<div class="card-panel ef5350 red lighten-1">
    <ul>
        @foreach($errors->all() as $error)

        <div class="alert alert-danger mb-4" role="alert"><strong>Error!</strong>  {!!$error!!} </div>

        @endforeach
    </ul>
</div>
@endif
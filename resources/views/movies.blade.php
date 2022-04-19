<h1>Unesite film i ocenite ga</h1>



{{--<form action=""  method="POST">--}}
{{--    @csrf--}}
{{--    <input type="text" name="movie" placeholder="Movie">--}}
{{--    <input type="text" name="rate" placeholder="Rate">--}}
{{--    <input type="submit" name="submit" value="Submit">--}}
{{--</form>--}}

<div class="card-body">
    {!! Form::open(['route' => 'posts.store']) !!}
    <div class="form-group @if($errors->has('title')) has-error @endif">
        {!! Form::label('Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
        @if ($errors->has('title'))
            <span class="help-block">{!! $errors->first('title') !!}</span>@endif
    </div>

    <div class="form-group @if($errors->has('rate')) has-error @endif">
        {!! Form::label('rate') !!}
        {!! Form::text('rate', null, ['class' => 'form-control', 'placeholder' => 'rate']) !!}
        @if ($errors->has('rate'))
            <span class="help-block">{!! $errors->first('rate') !!}</span>@endif
    </div>
    {!! Form::submit('Submit',['class' => 'btn btn-sm btn-primary']) !!}
    {!! Form::close() !!}
</div>
</div>

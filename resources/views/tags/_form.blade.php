
<div class="form-group">

    {!! Form::label('name', 'Name:') !!}

    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::submit($submitBtnText, null, ['class' => 'btn btn-primary btn-lg  ']) !!}

</div>

<div class="form-group">

    {!! Form::label('name', 'Name:') !!}

    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('text', 'Text:') !!}

    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('published_at', 'Published at:') !!}

    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('tags', 'Tags:') !!}

    {!! Form::select('tags[]', $tags, $article->tags, ['class' => 'form-control', 'multiple']) !!}

</div>

<div class="form-group">

    {!! Form::label('slug', 'Slug:') !!}

    {!! Form::text('slug', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::submit($submitBtnText, null, ['class' => 'btn btn-primary btn-lg  ']) !!}

</div>
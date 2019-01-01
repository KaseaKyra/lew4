{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('name', 'Name', $errors, $song) !!}
    {!! Form::normalInput('link', 'Link', $errors, $song) !!}
    {!! Form::normalTextarea('lyric', 'Lyric', $errors, $song) !!}
    {!! Form::normalTextarea('description', 'Description', $errors, $song) !!}
</div>

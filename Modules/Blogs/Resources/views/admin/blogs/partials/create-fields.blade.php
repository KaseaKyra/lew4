{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('title', 'Title', $errors) !!}
    {!! Form::normalInput('content', 'Content', $errors) !!}
    {!! Form::normalInput('link', 'Link', $errors) !!}
    {!! Form::normalTextarea('description', 'Description', $errors) !!}
</div>
{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('title', 'Title', $errors, $blog) !!}
    {!! Form::normalInput('content', 'Content', $errors, $blog) !!}
    {!! Form::normalInput('link', 'Link', $errors, $blog) !!}
    {!! Form::normalTextarea('description', 'Description', $errors, $blog) !!}
</div>
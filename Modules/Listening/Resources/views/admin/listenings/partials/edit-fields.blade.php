{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('name', 'Name', $errors, $listening) !!}
    {!! Form::normalInput('link', 'Link', $errors, $listening) !!}
    {!! Form::normalTextarea('description', 'Description', $errors, $listening) !!}
</div>

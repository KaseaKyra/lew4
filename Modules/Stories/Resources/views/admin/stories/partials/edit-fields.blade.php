{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('name', 'Name', $errors, $story) !!}
    {!! Form::normalTextarea('content', 'Content', $errors, $story) !!}
</div>
{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('name', 'Name', $errors, $grammar) !!}
    {!! Form::normalTextarea('content', 'Content', $errors, $grammar) !!}
</div>

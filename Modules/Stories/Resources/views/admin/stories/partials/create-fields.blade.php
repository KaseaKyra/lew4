{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('name', 'Name', $errors) !!}
    {!! Form::normalTextarea('content', 'Content', $errors) !!}
</div>
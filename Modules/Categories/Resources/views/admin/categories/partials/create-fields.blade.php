{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('name', 'Name', $errors) !!}
    {!! Form::normalInput('router_name', 'Router Name', $errors) !!}
    {!! Form::normalTextarea('description', 'description', $errors) !!}
</div>
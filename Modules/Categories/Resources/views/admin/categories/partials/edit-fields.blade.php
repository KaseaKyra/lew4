{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form::normalInput('name', 'Name', $errors, $category) !!}
    {!! Form::normalInput('router_name', 'Router Name', $errors, $category) !!}
    {!! Form::normalTextarea('description', 'description', $errors, $category) !!}
</div>
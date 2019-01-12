{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form:: normalInput('title', 'Title', $errors, $rule) !!}
    {!! Form:: normalTextarea('example', 'Example', $errors, $rule) !!}
    {!! Form:: normalTextarea('remember', 'Remember', $errors, $rule) !!}
    {!! Form:: normalTextarea('be_careful', 'Be Careful', $errors, $rule) !!}
    {!! Form:: normalTextarea('we_say', 'We Say', $errors, $rule) !!}
    {!! Form:: normalTextarea('description', 'Description', $errors, $rule) !!}
</div>
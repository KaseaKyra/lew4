{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    {!! Form:: normalInput('title', 'Title', $errors) !!}
    {!! Form:: normalTextarea('example', 'Example', $errors) !!}
    {!! Form:: normalTextarea('remember', 'Remember', $errors) !!}
    {!! Form:: normalTextarea('be_careful', 'Be Careful', $errors) !!}
    {!! Form:: normalTextarea('we_say', 'We Say', $errors) !!}
    {!! Form:: normalTextarea('description', 'Description', $errors) !!}
</div>

{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    <div class="form-group">
        <label for="rule_id" class="text-capitalize">Rule Lesson</label>
        <select class="form-control" id="rule_id" name="rule_id">
            @foreach($rules as $rule)
                <option value="{{$rule->id}}">{{$rule->title}}</option>
            @endforeach
        </select>
    </div>
    {!! Form:: normalInput('answer', 'Question', $errors, $input) !!}
    {!! Form:: normalInput('i1', 'Input 1', $errors, $input) !!}
    {!! Form:: normalInput('i2', 'Input 2', $errors, $input) !!}
    {!! Form:: normalInput('i3', 'Input 3', $errors, $input) !!}
    {!! Form:: normalInput('i4', 'Input 4', $errors, $input) !!}
    {!! Form:: normalInput('i5', 'Input 5', $errors, $input) !!}
</div>
{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    <div class="form-group">
        <label for="question_id" class="text-capitalize">Question</label>
        <select class="form-control" id="question_id" name="question_id">
            @foreach($questions as $question)
                <option value="{{$question->id}}">{{strip_tags($question->question_content)}}</option>
            @endforeach
        </select>
    </div>
    {!! Form:: normalInput('option1', 'Option 1', $errors, $choose) !!}
    {!! Form:: normalInput('option2', 'Option 2', $errors, $choose) !!}
    {!! Form:: normalInput('option3', 'Option 3', $errors, $choose) !!}
</div>

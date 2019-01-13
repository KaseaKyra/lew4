{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    <div class="form-group">
        <label for="story_id" class="text-capitalize">Story</label>
        <select class="form-control" id="story_id" name="story_id">
            @foreach($stories as $story)
                <option value="{{$story->id}}">{{$story->name}}</option>
            @endforeach
        </select>
    </div>
    {!! Form:: normalInput('result1', 'Result 1', $errors) !!}
    {!! Form:: normalInput('result2', 'Result 2', $errors) !!}
    {!! Form:: normalInput('result3', 'Result 3', $errors) !!}
    {!! Form:: normalInput('result4', 'Result 4', $errors) !!}
    {!! Form:: normalInput('result5', 'Result 5', $errors) !!}
    {!! Form:: normalInput('result6', 'Result 6', $errors) !!}
    {!! Form:: normalInput('result7', 'Result 7', $errors) !!}
    {!! Form:: normalInput('result8', 'Result 8', $errors) !!}
</div>
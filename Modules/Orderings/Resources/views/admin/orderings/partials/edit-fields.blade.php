{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
{{--    <div class="form-group">
        <label for="story_id" class="text-capitalize">Story</label>
        <select class="form-control" id="story_id" name="story_id">
            @foreach($stories as $story)
                <option value="{{$story->id}}">{{$story->name}}</option>
            @endforeach
        </select>
    </div>--}}
    {!! Form:: normalInput('order1', 'Order 1', $errors, $ordering) !!}
    {!! Form:: normalInput('order2', 'Order 2', $errors, $ordering) !!}
    {!! Form:: normalInput('order3', 'Order 3', $errors, $ordering) !!}
    {!! Form:: normalInput('order4', 'Order 4', $errors, $ordering) !!}
    {!! Form:: normalInput('order5', 'Order 5', $errors, $ordering) !!}
    {!! Form:: normalInput('order6', 'Order 6', $errors, $ordering) !!}
    {!! Form:: normalInput('order7', 'Order 7', $errors, $ordering) !!}
    {!! Form:: normalInput('order8', 'Order 8', $errors, $ordering) !!}
</div>

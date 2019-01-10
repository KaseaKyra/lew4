{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    <div class="form-group">
        <label for="song_id" class="text-capitalize">Listening</label>
        <select class="form-control" id="song_id" name="song_id">
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$song->name}}</option>
            @endforeach
        </select>
    </div>
    {!! Form:: normalInput('a1', 'Answer 1', $errors) !!}
    {!! Form:: normalInput('a2', 'Answer 2', $errors) !!}
    {!! Form:: normalInput('a3', 'Answer 3', $errors) !!}
    {!! Form:: normalInput('a4', 'Answer 4', $errors) !!}
    {!! Form:: normalInput('a5', 'Answer 5', $errors) !!}
</div>

{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    <div class="form-group">
        <label for="song_id" class="text-capitalize">Song</label>
        <select class="form-control" id="song_id" name="song_id">
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$song->name}}</option>
            @endforeach
        </select>
    </div>
    {!! Form:: normalTextarea('question_content', 'Question Content', $errors) !!}
    {!! Form:: normalTextarea('answer', 'Answer', $errors) !!}
</div>

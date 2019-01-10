{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    <div class="form-group">
        {{--        <label for="song_id" class="text-capitalize">Listening</label>
                <select class="form-control" id="song_id" name="song_id">
                    @foreach($listenings as $listening)
                        <option value="{{$listening->id}}">{{$listening->name}}</option>
                    @endforeach
                </select>--}}
        <label for="question_id" class="text-capitalize">Question</label>
        <select class="form-control" id="question_id" name="question_id">
            @foreach($questions as $question)
                <option value="{{$question->id}}">{{strip_tags($question->question_content)}}</option>
            @endforeach
        </select>
    </div>
    {!! Form::normalTextarea('option 1', 'Option 1', $errors, $question) !!}
    {!! Form::normalTextarea('option 2', 'Option 2', $errors, $question) !!}
    {!! Form::normalTextarea('option 3', 'Option 3', $errors, $question) !!}
</div>

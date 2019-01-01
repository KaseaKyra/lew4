{{--
<div class="box-body">
    <p>
        Your fields //
    </p>
</div>
--}}
<div class="box-body">
    <div class="form-group">
        <label for="listening_id" class="text-capitalize">Listening</label>
        <select class="form-control" id="listening_id" name="listening_id">
            @foreach($listenings as $listening)
                <option value="{{$listening->id}}">{{$listening->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="question_content" class="text-capitalize">question content</label>
        <input type="text" class="form-control" id="question_content" name="question_content"
               value="{{$question->question_content}}">
    </div>
    <div class="form-group">
        <label for="answer" class="text-capitalize">answer</label>
        <input type="text" class="form-control" id="answer" name="answer" value="{{$question->answer}}">
    </div>
</div>

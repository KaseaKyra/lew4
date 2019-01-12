<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 12:22 PM
 */

namespace Modules\Frontend\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Answer\Repositories\AnswerRepository;
use Modules\Categories\Repositories\CategoryRepository;
use Modules\Grammar\Repositories\GrammarRepository;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Questions\Repositories\QuestionRepository;
use Modules\Rules\Repositories\RuleRepository;
use Modules\Songs\Repositories\SongRepository;
use Modules\Stories\Repositories\StoryRepository;
use Modules\User\Repositories\UserRepository;
use App\Http\Controllers\Controller;

/*use Nwidart\Modules\Routing\Controller;*/


class frontendController extends Controller
{
    private $song;
    private $listening;
    private $story;
    private $grammar;
    private $user;
    private $category;
    private $answer;
    private $question;
    private $rule;

    public function __construct(
        SongRepository $song,
        ListeningRepository $listening,
        StoryRepository $story,
        GrammarRepository $grammar,
        UserRepository $user,
        CategoryRepository $category,
        AnswerRepository $answer,
        QuestionRepository $question,
        RuleRepository $rule
    )
    {
        $this->song = $song;
        $this->listening = $listening;
        $this->story = $story;
        $this->grammar = $grammar;
        $this->user = $user;
        $this->category = $category;
        $this->answer = $answer;
        $this->question = $question;
        $this->rule = $rule;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('frontend::frontend.index', compact('categories'));
    }

    /*    public function checkSong()
        {
            dd(123);
        }*/

    public function getSongList()
    {
        $songs = $this->song->all();
        $categories = $this->category->all();
        return view('frontend::frontend.song_list', compact('songs', 'categories'));
    }

    public function getListeningList()
    {
        $listenings = $this->listening->all();
        $categories = $this->category->all();
        return view('frontend::frontend.listening_list', compact('listenings', 'categories'));
    }

    public function getStoryList()
    {
        $stories = $this->story->all();
        $categories = $this->category->all();
        return view('frontend::frontend.story_list', compact('stories', 'categories'));
    }

    public function getGame()
    {
        return view('frontend::frontend.game');
    }

    public function getGrammarList()
    {
        //$grammars = $this->grammar->all();
        $rules = $this->rule->all();
        $categories = $this->category->all();
        return view('frontend::frontend.grammar_list', compact('rules', 'categories'));
    }

    public function getSongById(Request $request)
    {
        $song = $this->song->find($request->id);
        return view('frontend::frontend.song', compact('song'));
    }

    public function getStoryById(Request $request)
    {
        $story = $this->story->find($request->id);
        return view('frontend::frontend.story', compact('story'));
    }

    public function getListeningById(Request $request)
    {
        $listening = $this->listening->find($request->id);
        //dd($listening);
        //$questions = $this->question->where('question_id', $request->id);
        $questions = DB::table('questions_questions')->where('listening_id', $request->id)->get();
        dd($questions);
        return view('frontend::frontend.listening', compact('listening', 'questions'));
    }

    public function getGrammarById(Request $request)
    {
        $rule = $this->rule->find($request->id);
        return view('frontend::frontend.grammar', compact('rule'));
    }

    public function checkSongAnswer(Request $request)
    {
        //dd($request->a1);
        // dd($request->all());
        //dd($this->song->find($request->id)->load('answer'));
        //if ($request->a1 == $answer->a1)
        //dd($answer);
        //dd($this->song->find($request->id)->load('answer'));
        //dd($answer->a1);
        /*echo ($a1);*/

        $answer = $this->song->find($request->id)->answer;
        $a1 = $this->cleanString($request->a1);
        $a2 = $this->cleanString($request->a2);
        $a3 = $this->cleanString($request->a3);
        $a4 = $this->cleanString($request->a4);
        $a5 = $this->cleanString($request->a5);

        if ($answer->a1 === $a1) {
            if ($answer->a2 === $a2) {
                if ($answer->a3 === $a3) {
                    if ($answer->a4 === $a4) {
                        if ($answer->a5 === $a5) {
                            return view('frontend::frontend.game');
                        }
                    }
                }
            }
        }
    }

    private function cleanString($string)
    {
        $string = strtolower($string);
        $string = trim($string);
        //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    public function login()
    {
        return view('frontend::frontend.comment');
    }
}
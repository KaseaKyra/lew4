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
use Modules\Blogs\Repositories\BlogRepository;
use Modules\Categories\Repositories\CategoryRepository;
use Modules\Grammar\Repositories\GrammarRepository;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Questions\Repositories\QuestionRepository;
use Modules\Results\Repositories\ResultRepository;
use Modules\Rules\Repositories\RuleRepository;
use Modules\Songs\Repositories\SongRepository;
use Modules\Sortings\Repositories\SortingRepository;
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
    private $sorting;
    private $blog;

    public function __construct(
        SongRepository $song,
        ListeningRepository $listening,
        StoryRepository $story,
        GrammarRepository $grammar,
        UserRepository $user,
        CategoryRepository $category,
        AnswerRepository $answer,
        QuestionRepository $question,
        RuleRepository $rule,
        SortingRepository $sorting,
        ResultRepository $result,
        BlogRepository $blog
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
        $this->sorting = $sorting;
        $this->result = $result;
        $this->blog = $blog;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('frontend::frontend.index', compact('categories'));
    }

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

    public function getBlog()
    {
        $blogs = $this->blog->all();
        return view('frontend::frontend.blog', compact('blogs'));
    }

    public function getAboutUs()
    {
        return view('frontend::frontend.about_us');
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
        /*dd($song->answer);
        $answer = $this->answer->find($request->id);*/
        return view('frontend::frontend.song', compact('song'));
    }

    public function getStoryById(Request $request)
    {
        $story = $this->story->find($request->id);
        $ordering = $this->story->find($request->id)->ordering;
        $result = $this->story->find($request->id)->result;
        //dd($ordering);
        return view('frontend::frontend.story', compact('story', 'ordering', 'result'));
    }

    public function getListeningById(Request $request)
    {
        //$listening = $this->listening->find($request->id);
        //dd($listening);
        //$questions = $this->question->where('question_id', $request->id);
        //dd($this->listening->find($request->id)->load('question'));
        //dd($this->listening->find($request->id)->question->load('choose'));
        //dd($questions);
        //$chooses = $this->listening->find($request->id)->load('question')->choose/*load('choose')*/;
        //dd($chooses);
        $listening = $this->listening->find($request->id);
        $question = $this->listening->find($request->id)->question;
        //$question = $this->listening->find($request->id)->load('question');
        //dd($question);
        return view('frontend::frontend.listening', compact('listening', 'question'));
    }

    public function getGrammarById(Request $request)
    {
        $rule = $this->rule->find($request->id);
        $sorting = $this->rule->find($request->id)->sorting;
        //dd($sortings);
        return view('frontend::frontend.grammar', compact('rule', 'sorting'));
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

        $result = 0;
        $song = $this->song->find($request->id);
        //dd($request->id);
        // dd($song);

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
                            $result = 1;
                        }
                    }
                }
            }
        }

        //dd($result);
        return view('frontend::frontend.check_song', compact('song', 'answer', 'request', 'result'));
    }

    public function checkGrammarAnswer(Request $request)
    {
        $check = 0;
        $i1 = $request->i1;
        $i2 = $request->i2;
        $i3 = $request->i3;
        $i4 = $request->i4;
        $i5 = $request->i5;

        $rule = $this->rule->find($request->id);
        $sorting = $this->rule->find($request->id)->sorting;
        $answerString = $sorting->i1 . ' '
            . $sorting->i2 . ' '
            . $sorting->i3 . ' '
            . $sorting->i4 . ' '
            . $sorting->i5;

        if ($sorting->i1 === $i1
            && $sorting->i2 === $i2
            && $sorting->i3 === $i3
            && $sorting->i4 === $i4
            && $sorting->i5 === $i5
        ) {
            $check = 1;
        }

        return view('frontend::frontend.check_grammar', compact('request', 'rule', 'sorting', 'check', 'answerString'));
    }

    public function checkListeningAnswer(Request $request)
    {
        $question = $this->question->find($request->id);
        $listening = $this->listening->find($request->id);
        //dd($listening);
        //dd($request);
        dd($question);
        return view('frontend::frontend.check_listening', compact('request', 'question', 'listening'));
    }

    public function checkStoryAnswer(Request $request)
    {
        //dd($request);
        $count = 0;
        $result = $this->story->find($request->id)->result;
        $story = $this->story->find($request->id);
        $ordering = $this->story->find($request->id)->ordering;
        //dd($result);

        $result1 = $this->cleanString($request->result1);
        $result2 = $this->cleanString($request->result2);
        $result3 = $this->cleanString($request->result3);
        $result4 = $this->cleanString($request->result4);
        $result5 = $this->cleanString($request->result5);
        $result6 = $this->cleanString($request->result6);
        $result7 = $this->cleanString($request->result7);
        $result8 = $this->cleanString($request->result8);

        if ($result1 === $result->result1) {
            $count = 1;
            if ($result2 === $result->result2) {
                $count = 2;
                if ($result3 === $result->result3) {
                    $count = 3;
                    if ($result4 === $result->result4) {
                        $count = 4;
                        if ($result5 === $result->result5) {
                            $count = 5;
                            if ($result5 === $result->result5) {
                                $count = 6;
                                if ($result7 === $result->result7) {
                                    $count = 7;
                                    if ($result8 === $result->result8) {
                                        $count = 8;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $answerString = $result->result1 . '-'
            . $result->result2 . '-'
            . $result->result3 . '-'
            . $result->result4 . '-'
            . $result->result5 . '-'
            . $result->result6 . '-'
            . $result->result7 . '-'
            . $result->result8;
        //dd($answerString);

        return view('frontend::frontend.check_story',
            compact('request', 'result', 'story', 'ordering', 'answerString', 'count'));
    }

    private function cleanString($string)
    {
        $string = strtolower($string);
        $string = trim($string);
        //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 12:22 PM
 */

namespace Modules\Frontend\Http\Controllers\frontend;

use Illuminate\Support\Facades\DB;
use Modules\Categories\Repositories\CategoryRepository;
use Modules\Grammar\Repositories\GrammarRepository;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Songs\Repositories\SongRepository;
use Modules\Stories\Repositories\StoryRepository;
use Modules\User\Repositories\UserRepository;
/*use Nwidart\Modules\Routing\Controller;*/

use App\Http\Controllers\Controller;

class frontendController extends Controller
{
    private $song;
    private $listening;
    private $story;
    private $grammar;
    private $user;
    private $category;

    public function __construct(
        SongRepository $song,
        ListeningRepository $listening,
        StoryRepository $story,
        GrammarRepository $grammar,
        UserRepository $user,
        CategoryRepository $category
    )
    {
        $this->song = $song;
        $this->listening = $listening;
        $this->story = $story;
        $this->grammar = $grammar;
        $this->user = $user;
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('frontend::frontend.index', compact('categories'));
    }

    public function checkSong()
    {
        dd(123);
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

    public function getGrammarList()
    {
        $grammars = $this->grammar->all();
        $categories = $this->category->all();
        return view('frontend::frontend.grammar_list', compact('grammars', 'categories'));
    }

    public function getSongById($id)
    {
        $song = $this->song->find($id);
        return view('frontend::frontend.song', compact('song'));
    }

    public function getStoryById($id)
    {
        $story = $this->story->find($id);
        return view('frontend::frontend.story', compact('story'));
    }

    public function getListeningById($id)
    {
        $listening = $this->listening->find($id);
        return view('frontend::frontend.listening', compact('listening'));
    }

    public function getGrammarById($id)
    {
        $grammar = $this->grammar->find($id);
        return view('frontend::frontend.grammar', compact( 'grammar'));
    }

    public function login()
    {
        return view('frontend::frontend.comment');
    }
}
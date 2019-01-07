<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 12:22 PM
 */

namespace Modules\Frontend\Http\Controllers\frontend;

use Modules\Categories\Repositories\CategoryRepository;
use Modules\Grammar\Repositories\GrammarRepository;
use Modules\Listening\Repositories\ListeningRepository;
use Modules\Songs\Repositories\SongRepository;
use Modules\Stories\Repositories\StoryRepository;
use Modules\User\Repositories\UserRepository;
use Nwidart\Modules\Routing\Controller;

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
        return view('frontend::frontend.song_list', compact('songs'));
    }

    public function getListeningList()
    {
        return view('frontend::frontend.listening_list');
    }

    public function getStoryList()
    {
        return view('frontend::frontend.story_list');
    }

    public function getGame()
    {
        return view('frontend::frontend.game');
    }

    public function getGrammarList()
    {
        return view('frontend::frontend.grammar_list');
    }

    public function getSongById($id)
    {
        return view('frontend::frontend.song', compact('id'));
    }

    public function login()
    {
        return view('frontend::frontend.comment');
    }
}
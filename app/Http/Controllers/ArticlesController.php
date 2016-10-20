<?php

namespace App\Http\Controllers;

use App\Article;

use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Request;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['show', 'index']]);
    }

    public function index() {

        $data = [
            'articles' => Article::latest('published_at')->published()->get(),
        ];
        return view('articles.index', $data);
    }


    public function show(Article $article) {

        if (is_null($article)) {
            abort(404);
        }
        $data = [
            'article' => $article
        ];
        return view('articles.item', $data);
    }


    public function create() {

        $article =  new Article();
        $tags = Tag::pluck( 'name', 'id');
        return view('articles.create', ['article' => $article, 'tags' => $tags]);
    }

    public function edit(Article $article) {

        $tags = Tag::pluck( 'name', 'id');
         return view('articles.update', ['article' => $article, 'tags' => $tags]);
    }

    public function delete() {

        return view('articles.update');
    }

    public function update(Article $article, CreateArticleRequest $request){

        $tags = $request->input('tags');


        $article->tags()->attach($tags);
        $article->update(Request::all());

        return redirect('articles');
    }


    public function store(CreateArticleRequest $request) {

        $article = new Article($request->all());
        $tags = $request->input('tags');

        dd($tags);

        $article->tags()->attach($tags);
        Auth::user()->articles()->save($article);

        //Session::flash('flash_message', 'Article created');

        flash('Article created')->important();
        return redirect('articles');
    }
}

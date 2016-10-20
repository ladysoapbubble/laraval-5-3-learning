<?php

namespace App\Http\Controllers;

use App\Article;

use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Request;
use App\Http\Requests;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['show', 'index']]);
    }

    public function index() {

        $data = [
            'tags' => Tag::latest()->get(),
        ];
        return view('tags.index', $data);
    }


    public function show(Tag $tag) {

        if (is_null($tag)) {
            abort(404);
        }
        $data = [
            'tag' => $tag
        ];
        return view('tags.item', $data);
    }


    public function create() {

        $tag =  new Tag();
        return view('tags.create', compact('tag'));
    }

    public function edit(Tag $tag) {

         return view('tags.update', ['tag' => $tag]);
    }

    public function delete() {

        return view('tags.update');
    }

    public function update(Tag $tag, TagRequest $request){

        $tag->update(Request::all());

        return redirect('tags');
    }


    public function store(TagRequest $request) {


        Tag::create($request->all());


        flash("Tag {$request->name}created")->important();
        return redirect('tags');
    }
}

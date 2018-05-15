<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
    
class IndexController extends Controller
{
    protected $message;
    protected $header;
    
   public function _construct() {
       $this->header = 'Hellow!';
       $this->message = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut  ';
   }
   public function index() {
       $header = 'Hellow!';
       $message = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut  ';
       $articles = Article::select(['id','title','content'])->get();
       //dump($articles);
       return view('page')->with(['message'=>$this->message, 'header'=>$this->header, 'articles'=> $articles]);
   }
    public function show($id) {
       // $article = Article::find($id);
        $article = Article::select(['id', 'title','content'])->where('id', $id)->first();
       // dump ($article);
        return view('article-content')->with(['message'=>$this->message, 'header'=>$this->header, 'article'=> $article]);
    }
    public function add() {
        return view('add-content')->with(['message'=>$this->message, 'header'=>$this->header]);
        
    }
    public function store(Request $request) {
        $this->validate($request, ['title'=>'required|max:255',
                                   'alias => required|unique:articles,alias',
                                   'content'=>'required']);
        $data = $request->all();
        $article = new Article;
        $article->fill($data);
        $article -> save();
        return redirect('/');
    }
}


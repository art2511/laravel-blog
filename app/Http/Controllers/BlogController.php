<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller {

    public function Submit(BlogRequest $req) {
        $data = $req->validated();
        Article::create([
            'user_id' => auth()->id(),
            'category_id' => $data['category_id'],
            'title' => $data['title'],
            'text' => $data['text']
        ]);

        return redirect()->route('writeblog')->with('success','Ваш блог был успешно опубликован');
    }

    public function ShowAll(Article $article) {
        return view('viewblogs', ['data' => Article::all()]);
    }

    public function ShowCurrent($id,Article $article) {
        $article = Article::whereId($id)->with('category')->first();
         return view('viewblog', ['data' => $article]);
    }

    public function ShowCurrentForUpdate($id,Article $article) {
        $article = Article::whereId($id)->with('category')->first();


        return view('updateblog', ['data' => $article,'categories' => Category::all()]);
    }

    public function Update($id,BlogRequest $req) {
//        $data = $req->validated();
//        DB::table('users')
//            ->where('id', '=',$id)
//            ->update($data);
        $article = Articles::find($id);
        $article->title = $req->input('title');
        $article->category_id = $req->input('category_id');
        $article->text = $req->input('text');

        DB::table('articles')->where('id', '=', $id)->put();

        return redirect()->route('viewblog-form')->with('success','Ваш блог был успешно обновлен');
    }

    public function Delete(Article $article) {
        dd($article);
        $article->delete();

        return redirect()->route('viewblogs')->with('success','Ваш блог был успешно удален');
    }
}

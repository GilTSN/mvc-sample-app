<?php

namespace App\Http\Controllers;

use App\Services\Validation\ArticlesValidation;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    protected $articlesValidationService;

    public function __construct()
    {
        $this->articlesValidationService = new ArticlesValidation();
    }

    /**
     * Render the articles view
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('articles/index', array(
            'articles' => Article::all()
        ));
    }

    /**
     * Shows a form to create a new article
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('articles/create');
    }

    public function store(Request $request)
    {
        // validates the input
        $validation = $this->articlesValidationService->validates($request);
        if ($validation !== true) {
            return redirect('articles/create')->withErrors($validation);
        }

        // stores the article
        $article = new Article;
        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->save();

        return redirect('/')->with('success_message', 'Operação efetuada com sucesso');
    }
}
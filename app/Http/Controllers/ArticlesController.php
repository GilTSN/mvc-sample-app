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

    /**
     * Stores a new article
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // validates the article
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

    /**
     * Shows an article
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('articles/show', array(
            'article' => Article::find($id)
        ));
    }

    /**
     * Shows a form to edit an article
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        return view('articles/edit', array(
            'article' => Article::find($id)
        ));
    }

    /**
     * Updates an article
     *
     * @param $id
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        // validates the article
        $validation = $this->articlesValidationService->validates($request);
        if ($validation !== true) {
            return redirect('articles/' . $id . '/edit')->withErrors($validation);
        }

        // update the article
        $article = Article::find($id);
        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->save();

        return redirect('/')->with('success_message', 'Operação efetuada com sucesso');
    }

    /**
     * Deletes an article
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        Article::destroy($id);

        return redirect('/')->with('success_message', 'Operação efetuada com sucesso');
    }
}
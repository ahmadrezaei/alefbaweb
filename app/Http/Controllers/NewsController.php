<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use App\Models\NewsView;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $news = News::query()
                    ->with('view')
                    ->orderByDesc('id')
                    ->get();

        return view('news.index', ['news' => $news]);
    }

    /**
     * Get popular news
     *
     * @return Application|Factory|View
     */
    public function popular()
    {
        $views = NewsView::query()->orderByDesc('views')->pluck('news_id');

        $news = News::query()
                    ->whereIn('id', $views)
                    ->with('view')
                    ->get()
                    ->sortByDesc(function ($post) {
                        return $post->view->views;
                    })
                    ->values();

        return view('news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     *
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreNewsRequest $request)
    {
        $news = News::query()->create($request->only(['title', 'content']));

        return redirect(
            route('news.show', $news->id)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     *
     * @return Application|Factory|View
     */
    public function show(News $news)
    {
        return view('news.show', ['news' => $news]);
    }

    /**
     * @param  News  $news
     *
     * @return bool[]
     */
    public function increment(News $news)
    {
        $news->view()->increment('views');

        return ['success' => true];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Work;
use App\Article;
use App\Link;
use App\Series;

class PublicController extends Controller
{
    /**
	 * Show the main homepage.
	 *
	 * @return Response
	 */
	public function index()
	{
		$recentBook = Work::orderBy('publish_date', 'desc')->first();
		$recentBookLink = $recentBook->links()->where('type', 'amazon')->first();
		$review = $recentBook->reviews()->orderBy('importance', 'desc')->first();
		$recentArticle = Article::orderBy('importance', 'desc')->first();
		return view('home', compact(['recentBook', 'recentBookLink', 'recentArticle', 'review']));
	}
	
	public function works()
	{
		// show a page for published works
		$works = Work::orderBy('publish_date', 'desc')->get();
		return view('works', compact('works'));
	}
	
	public function showWork($work)
	{
		return view('workDetail', compact('work'));
	}
	
	public function blog()
	{
		// show the public view-only blog page
		$articles = Article::orderBy('created_at', 'desc')->get();
		return view('blog', compact('articles'));
	}
	
	public function showTagged($tag)
	{
		$articles = is_string($tag) ? null : $tag->articles;
		return view('blog', compact(['articles', 'tag']));
	}
	
	public function showArticle($article)
	{
		return view('article', compact('article'));
	}
	
	public function series()
	{
		$allSeries = Series::orderBy('importance', 'desc')->get();
		return view('series', compact('allSeries'));
	}
	
	public function showSeries($series)
	{
		return view('seriesDetail', compact('series'));
	}
	
	public function contact()
	{
		// show a dedicated contact page
		return view('contact');
	}
	
	public function about()
	{
		// show a dedicated about page
		return view('about');
	}
}

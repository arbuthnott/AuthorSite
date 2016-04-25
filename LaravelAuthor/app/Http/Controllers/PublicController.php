<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Work;
use App\Article;
use App\Link;

class PublicController extends Controller
{
    /**
	 * Show the main homepage.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
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
	
	public function purchase()
	{
		// show a page with purchase instructions/links
		$amazon = Link::where('type', 'amazon')->get();
		$publisher = Link::where('type', 'publisher')->get();
		$other = Link::whereNotIn('type', ['amazon', 'publisher'])->get();
		return view('purchase', compact(['amazon', 'publisher', 'other']));
	}
	
	public function contact()
	{
		// show a dedicated contact page
		dd("contact method in public controller");
	}
	
	public function about()
	{
		// show a dedicated about page
		dd("about method in public controller");
	}
}

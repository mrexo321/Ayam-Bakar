<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Invoice;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function show(Article $article)
    {
        $articles = Article::where('user_id', auth()->user()->id);
        $invoices = Invoice::where('user_id', auth()->user()->id);
        return view('profile.show', compact('articles', 'invoices'));
    }
}

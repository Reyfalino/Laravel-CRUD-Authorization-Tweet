<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TweetUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): RedirectResponse
    {

        $tweet = Tweet::find($id);

        $tweet->update([
            'content' => request('content')]);

        return redirect()->route('dashboard');
    }
}

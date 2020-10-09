<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Link;

class LinkController extends Controller
{
    public function create(Request $request)
    {
        $link = new Link;

        $link->slug = Str::random(4);
        if(substr($request->get('url'), 0,8) == 'https://')
        {
            $link->url = $request->get('url');
        }
        else{
            $link->url = 'https://'.$request->get('url');
        }
        $link->save();

        return view('welcome')->with(['link' => $link]);
    }

    public function redirect($slug)
    {
        $url = Link::where('slug','=',$slug)->pluck('url');
        if($url->first() === null)
        {
            return view('notfound');
        }
        return redirect()->to($url->first());
    }
}

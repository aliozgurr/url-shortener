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

        //$link->shortened_url_slug = Str::random(4);

        if($request->get('slug') == null)
        {
            $link->shortened_url_slug = Str::random(4);
        }
        else
        {
            $link->shortened_url_slug = $request->get('slug');
        }

        if(substr($request->get('url'), 0,8) == 'https://')
        {
            $link->shortened_url = $request->get('url');
        }
        else{
            $link->shortened_url = 'https://'.$request->get('url');
        }

        $link->save();

        return view('welcome')->with(['link' => $link]);
    }

    public function redirect($slug)
    {
        $url = Link::where('shortened_url_slug','=',$slug)->pluck('shortened_url');
        if($url->first() === null)
        {
            return view('notfound');
        }
        return redirect()->to($url->first());
    }
}

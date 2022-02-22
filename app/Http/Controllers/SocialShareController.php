<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;

class SocialShareController extends Controller
{
    public function index(){
        $shareComponent=Share::page('https://www.youtube.com/watch?v=5GGnWsHmpd8','GOGOWA Suit',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit()
        ->getRawLinks();
        return view('social-share',compact('shareComponent'));
    }
}

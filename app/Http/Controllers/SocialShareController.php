<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Post;
  
class SocialShareController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $shareButtons = \Share::page(
            'https://makitweb.com/how-to-upload-multiple-files-with-vue-js-and-php/'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
  
        $posts = Post::get();
  
        return view('socialshare', compact('shareButtons', 'posts'));
    }
}
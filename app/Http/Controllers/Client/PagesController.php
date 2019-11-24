<?php

namespace App\Http\Controllers\Client;

use App\Mail\Discuss;
use App\Mail\Order;
use App\Models\Discussion;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    public function show(Page $page, Page $subpage = null): View
    {
        if ($subpage) {
            $page = $subpage;
        }

        return view('client.pages.default', compact('page'));
    }

    public function order(Request $request)
    {

        $data = [
            'user' => (object)$request->only('name', 'contact'),
        ];

        Mail::send(new Order($data));

        return \redirect()->route('client.index');
    }

    public function book()
    {
        $page = Page::where('slug', 'book')->first();
        $description = explode('</p>', $page->body, '3' );
        return \view('client.pages.book', compact('page', 'description') );
    }

    public function discussions()
    {
        $page = Page::where('slug', 'discussion-items' )->first();
        $discussions = Discussion::latest()->get();
        return \view('client.pages.discussions', compact('page', 'discussions'));
    }

    public function discussionSend(Request $request)
    {

        $data = [
            'user' => (object)$request->only('name', 'contact'),
            'message' =>$request->input('message'),
            'files'=>$request->input('files')
        ];

        Mail::send(new Discuss($data));

        return \redirect()->route('client.index');
    }
}

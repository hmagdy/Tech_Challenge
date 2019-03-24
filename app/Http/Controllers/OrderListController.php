<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderList;
use Illuminate\Support\Facades\DB;

class OrderListController extends Controller
{
    //

    public function index()
    {
        $listitems=OrderList::where('pubDate', date('y-m-d'))->get();

        return view('index',compact('listitems'));
    }

    public function showlist()
    {
        $listitems=OrderList::orderBy('pubDate','DESC')->get();

        return view('dashboard.show',compact('listitems'));
    }

    public function getrss() {
        $xml=('https://www.winespectator.com/rss/rss?t=dwp');
        $xmlDoc = new \DOMDocument();
        $xmlDoc->load($xml);
//get and output "<item>" elements
        $x=$xmlDoc->getElementsByTagName('item');
        $total_items= $x->length;

//clean table
        if($total_items>0)
        {
            DB::table('orderlists')->truncate();
        }


            for ($i=0; $i<$total_items; $i++) {
//saving each element
                $listitem=new OrderList();

                $listitem->title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
                $listitem->link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
                $listitem->description=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
                $listitem->guid=$x->item($i)->getElementsByTagName('guid')->item(0)->childNodes->item(0)->nodeValue;
                $date_string=$x->item($i)->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;
                $date = strtotime($date_string);
                $listitem->pubDate=date('y-m-d', $date);
                $listitem->save();



            }
            return redirect()->action('OrderListController@showlist');

    }
}

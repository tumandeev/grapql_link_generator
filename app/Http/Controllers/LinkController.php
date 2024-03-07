<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function redirect($alias)
    {
        $linkData = ShortLink::where('alias', $alias)->first();

        $linkData->count = $linkData->count + 1;
        $linkData->save();


        return redirect($linkData->link);
    }
}

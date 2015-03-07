<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/16/15
 * Time: 2:08 PM
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

class PriceController extends Controller{

    public function pricing()
    {
        return view('price.index');
    }
} 
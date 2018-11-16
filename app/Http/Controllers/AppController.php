<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;
class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return App::all();
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $app = App::where('title',$title)->first();
        return $app;
    }
}

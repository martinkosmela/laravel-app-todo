<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Show the ID for the given user.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        return 'This is task with ID: '.$id.'<br /> <a href="/">Go back</a>';
    }

}

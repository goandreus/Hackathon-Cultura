<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function search(){
        $q = Input::get('search');
        if ($q != ''){
            $user = Contacts::where('fName', 'LIKE', '%' . $q . '%')
                ->orWhere('lName', 'LIKE', '%' . $q . '%')
                ->orWhere('email', 'LIKE', $q)
                ->orWhere('email2', 'LIKE', $q)
                ->orWhere('email3', 'LIKE', $q)
                ->orWhere('gender', 'LIKE', $q)
                ->orWhere('pNumber', 'LIKE', $q . '%')
                ->orWhere('pNumber2', 'LIKE', $q)
                ->orWhere('pNumber3', 'LIKE', $q)
                ->orWhere('pNumber4', 'LIKE', $q)
                ->orWhere('job', 'LIKE', $q)
                ->orWhere('city', 'LIKE', $q)
                ->get();
            if (count($user) > 0)
                return view('search')->withDetails($user)->withQuery($q);
            }
        return view('search')->withMessage('No users found!');
    }


}

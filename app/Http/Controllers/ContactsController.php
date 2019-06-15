<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('add');
    }

    protected $redirectTo = '/home';

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'file' => 'string|max:255, mimes:png|jpg|gif|bmp|ico|mpeg|mp3|wav|mp4|avi|mkv|pdf|doc|docs|xlsx|ppt|zip|rar|txt|size:5000',
            'fName' => 'string|max:64|required',
            'lName' => 'string|max:64|required',
            'gender' => 'string|max:64|required',
            'pNumber' => 'string|max:64|required',
            'pNumber2' => 'string|max:64|required',
            'pNumber3' => 'string|max:64|required',
            'pNumber4' => 'string|max:64|required',
            'email' => 'string|max:64|required',
            'email2' => 'string|max:64|required',
            'email3' => 'string|max:64|required',
            'job' => 'string|max:64|required',
            'city' => 'string|max:64|required',
            'about' => 'string|max:64|required'
        ]);
    }

    public function store(Request $request)
    {
        $data=new Contacts();
        $data['user_id']=Auth::user()->id;

        $file = $request->file('image');
        if ($file){
            $fileExtension = $file->getClientOriginalExtension();
            $dbPath = "/image/" . $file->getClientOriginalName() . '_' . time() . '.' . $fileExtension;
            $file->move(public_path('/image/'), $dbPath);
            $data['image']=$dbPath;
        }

        $data['fName']=$request->input('fName');
        $data['lName']=$request->input('lName');

        $data['gender']=$request->input('gender');

        $data['pNumber']=$request->input('pNumber');
        $data['pNumber2']=$request->input('pNumber2');
        $data['pNumber3']=$request->input('pNumber3');
        $data['pNumber4']=$request->input('pNumber4');

        $data['email']=$request->input('email');
        $data['email2']=$request->input('email2');
        $data['email3']=$request->input('email3');

        $data['job']=$request->input('job');
        $data['city']=$request->input('city');
        $data['about']=$request->input('about');

        $message = 'Campo vacio...';
        if($request->user()->contacts()->save($data)){
            $message = 'Se agrego!';
        }

        return redirect('home')->with(['success' => $message]);
    }

    public function show()
    {
        $contacts = Contacts::orderBy('fName', 'ASC')->paginate(20);
        return view('home', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contacts::where('id', $id)->first();

        $message = 'Error...';
        if($contact->delete()){
            $message = 'Se Borro!';
        }

        return back()->with(['success' => $message]);
    }
}


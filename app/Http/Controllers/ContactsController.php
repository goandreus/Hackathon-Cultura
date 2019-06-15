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
            'lName' => 'string|max:32|required',
            'gender' => 'required|string',
            'pNumber' => 'required',
            'pNumber2' => 'integer',
            'pNumber3' => 'integer',
            'pNumber4' => 'integer',
            'email' => 'string|min:12|max:64|required',
            'email2' => 'string|min:12|max:64|required',
            'email3' => 'string|min:12|max:64|required',
            'job' => 'string|required',
            'city' => 'string|required',
            'about' => 'text'
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

        $message = 'There is some error...';
        if($request->user()->contacts()->save($data)){
            $message = 'Contact has been successfully added!';
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

        $message = 'There is some error...';
        if($contact->delete()){
            $message = 'Contact has been successfully deleted!';
        }

        return back()->with(['success' => $message]);
    }
}


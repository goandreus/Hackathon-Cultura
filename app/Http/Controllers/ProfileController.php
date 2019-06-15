<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function show($id)
    {
        $contacts = Contacts::all()->where('id', '=', $id);
        return view('profile', compact('contacts'));
    }

    public function editInfo(Request $request, $id)
    {
    	// $user = Auth::user()->contacts();
    	// $uid = $user->id;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileExtension = $file->getClientOriginalExtension();
            $dbPath = "/image/".$file->getClientOriginalName().'_'.time().'.'.$fileExtension;

            $file->move(public_path('/image/'), $dbPath);
            DB::table('contacts')->where('id', '=', $id)->update([
                    'image' => $dbPath
                ]);

        }
            $updatefName = $request->fName;
            $updatelName = $request->lName;
            $updateGender = $request->gender;
            $updatepNumber = $request->pNumber;
            $updatepNumber2 = $request->pNumber2;
            $updatepNumber3 = $request->pNumber3;
            $updatepNumber4 = $request->pNumber4;
            $updateEmail = $request->email;
            $updateEmail2 = $request->email2;
            $updateEmail3 = $request->email3;
            $updateJob = $request->job;
            $updateCity = $request->city;
            $updateAbout = $request->about;

            DB::table('contacts')
            	->where('id', '=', $id)
                ->update([
                    'fName' => $updatefName,
                    'lName' => $updatelName,
                    'gender' => $updateGender,
                    'pNumber' => $updatepNumber,
                    'pNumber2' => $updatepNumber2,
                    'pNumber3' => $updatepNumber3,
                    'pNumber4' => $updatepNumber4,
                    'email' => $updateEmail,
                    'email2' => $updateEmail2,
                    'email3' => $updateEmail3,
                    'job' => $updateJob,
                    'city' => $updateCity,
                    'about' => $updateAbout,
                ]);
            
        return back();

        // $contacts = App\Contacts::find($id);

        // $contacts->fName = $request->fName;
        // dd($contacts);
        // $flight->save();
    }


    public function destroy($id)
    {
        $data = Contacts::findOrFail($id);
        $data->delete();
        $message = "Contact successfully deleted!";
        if ($data->delete()){
            return view('home')->with('success', $message);
        }
    }
}

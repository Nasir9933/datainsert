<?php

namespace App\Http\Controllers;

use App\Models\blood_donation_data;
use App\Http\Requests\Storeblood_donation_dataRequest;
use App\Http\Requests\Updateblood_donation_dataRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class BloodDonationDataController extends Controller
{
   
    public function index()
    {
        //$blood_donation_datas = blood_donation_data::all();
        $blood_donation_datas = blood_donation_data::orderBy('id','desc')->get();
        return view('index',compact('blood_donation_datas'));
        //return view ('index');
 
    }
  
    public function create()
    {
        return view('add');
    }

    public function store(Storeblood_donation_dataRequest $request)
    {
        $blood_donation_datas = new blood_donation_data;
        $blood_donation_datas->blood_group = $request->blood_group;
        $blood_donation_datas->name = $request->name;
        $blood_donation_datas->phone_number = $request->phone_number;
        $blood_donation_datas->email = $request->email;
        $blood_donation_datas->address = $request->address;
        $blood_donation_datas->save();

        // return "success";
        return redirect()->route('add')->with('success' , "Main page data has been updated successfully");
    }

    public function show(blood_donation_data $blood_donation_data)
    {
        //
    }

    public function edit(blood_donation_data $blood_donation_data)
    {
        //
    }

    public function update($blood_donation_data_id)
    {
        $blood_donation_data = blood_donation_data::find($blood_donation_data_id);
        return view('edit',compact('blood_donation_data'));
    }


    
    public function destroy(Request $request)
    {
        $blood_donation_data = blood_donation_data::find($request->blood_donation_data_id);
        $blood_donation_data->delete();
        return Redirect::to('/');
    }
    public function editStore(Storeblood_donation_dataRequest $request)
    {
        $blood_donation_data = blood_donation_data::find($request->student_id);
        $blood_donation_data->blood_group = $request->blood_group;
        $blood_donation_data->name = $request->name;
        $blood_donation_data->phone_number = $request->phone_number;
        $student->email = $request->email;
        $blood_donation_data->address = $request->address;
        $student->save();
        return Redirect::to('/');
    }
}

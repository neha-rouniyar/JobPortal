<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function index(Request $request)
    {
        $searched_data=$request['search'] ?? "";
        if($searched_data != "")
        {
            $jobs=Jobs::where('job_title','LIKE','%'.$searched_data.'%')->get();
        }else{
            $jobs = Jobs::all();
        }
        return view('dashboard', compact('jobs','searched_data'));
    }
    public function job_form(Request $request)
    {
        $job_id=$request->id;
        return view('user.job_form',compact('job_id'));
    }
    public function apply_job(Request $request)
    {
        $job_id=$request->job_id;
        $rules = $request->validate([
            'full_name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'education' => 'required',
            'experience' => 'required',
            // 'cv' => 'required |mimes:pdf,doc,docx'
            'cv' => 'required'
        ]);
        if ($file = $request->hasFile('cv')) {
            $file = $request->file('cv');
            $filename = $file->getClientOriginalName();
            $imagepath = public_path() . '/images';
            $file->move($imagepath, $filename);

            $data = new Applicants();
            $data->applicant_name = $rules['full_name'];
            $data->applicant_address = $rules['address'];
            $data->applicant_email = $rules['email'];
            $data->applicant_contact = $rules['contact'];
            $data->document = $filename;
            $data->applicant_edu = $rules['education'];
            $data->applicant_experience = $rules['experience'];
            $data->job_id = $job_id;
            // $data->document = $filename;
            $data->save();
            return back()->with('message','Job Applied Successfully');
        }
    }
    public function user_view_job_detail(Request $request)
    {
        $id = $request->id;
        $job = Jobs::find($id);
        return view('user.view_job_detail', compact('job','id'));
    }
}
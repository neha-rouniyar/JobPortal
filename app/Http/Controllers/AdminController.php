<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\Jobs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.dashboard');
    }
    public function job_post(Request $request)
    {
        return view('admin.job_form');
    }
    public function view_jobs(Request $request)
    {
        $jobs = Jobs::all();
        return view('admin.view_jobs', compact('jobs'));
    }
    public function post_job(Request $request)
    {
        $rules = $request->validate([
            'job_title' => 'required',
            'company_name' => 'required',
            'company_location' => 'required',
            'job_type' => 'required',
            'job_desc' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'deadline' => 'required',
            'contact_info' => 'required',
        ]);
        $data = new Jobs();
        $data->job_title = $rules['job_title'];
        $data->company_name = $rules['company_name'];
        $data->company_location = $rules['company_name'];
        $data->job_type = $rules['job_type'];
        $data->job_desc = $rules['job_desc'];
        $data->qualification = $rules['qualification'];
        $data->experience = $rules['experience'];
        $data->application_deadline = $rules['deadline'];
        $data->contact_info = $rules['contact_info'];
        $data->save();
        return back()->with('message','New Job Added Successfully');
        // }
    }
    public function view_job_detail(Request $request)
    {
        $id = $request->id;
        $job = Jobs::find($id);
        // dd($job);
        return view('admin.job_detail', compact('job'));
    }
    public function applicants_list()
    {
        $applicants=Applicants::with('jobs')->get();
        return view('admin.applicants',compact('applicants'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Seeker;
use App\Startup;
use App\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SeekerController extends Controller
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

    public function jobApplication()
    {
    	return view('applicationForm');
    }

    public function profileForm()
    {
        return view('profileForm');
    }

    public function showProfile()
    {
        $loggedInUser = Auth::user();

        return view('showProfile')->with('user',$loggedInUser);
    }

    public function processProfile(Request $data)
    {
        $loggedInUser = Auth::user();
        $user_id = $loggedInUser->id;

        //resume pdf upload
        $name = $data['resume']->getClientOriginalName();
        $file = (object)$data['resume'];
        $file->move(public_path().'/files/',$name);
        
        $seeker = new Seeker();

        $seeker->user_id = $user_id;
        $seeker->resume = $name;
        $seeker->skills = $data['skills'];
        $seeker->save();

        return redirect('/home');
    }

    public function updateProfile()
    {
        $loggedInUser = Auth::user();
        $user_id = $loggedInUser->id;
        /*return $user_id;*/

        $seeker = User::find($user_id)->seeker;
        /*return $seeker;*/
        if($seeker==null)
        {
            return redirect('/profile');
        }

        return view('updateProfileForm')->with('seeker',$seeker);
    }

    public function processUpdateProfileForm(Request $data, $id)
    {
        $seeker = Seeker::find($id);

        $data = $data->all();

        $seeker->resume = $data['resume'];
        $seeker->skills = $data['skills'];
        $seeker->save();

        return redirect('/jobHome');
    }

    public function jobHome()
    {
        $jobs = Job::all();

        return view('jobHome')->with('jobs',$jobs);
    }

    public function downloadResume()
    {
        $loggedInUser = Auth::user();
        $user_id = $loggedInUser->id;

        $seeker = User::find($user_id)->seeker;
        $name = $seeker->resume;

        $file = public_path().'/files/'.$name;
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file,$name,$headers);
    }

    public function downloadResume2($name)
    {
        $file = public_path().'/files/'.$name;
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file,$name,$headers);
    }

    public function startupsJobs($id)
    {
        $jobs = Startup::find($id)->jobs;
        return view('startupsJobs')->with('jobs',$jobs);
    }

    public function showApplications($id)
    {
        $seekers = Job::find($id)->seekers;
        return view('showApplications')->with('seekers',$seekers)->with('job_id',$id);  
    }

    public function myApplications()
    {
        $loggedInUser = Auth::user();
        $user_id = $loggedInUser->id;

        $seeker = User::find($user_id)->seeker;
        $seeker_id = $seeker->id;

        $applications = Seeker::find($seeker_id)->jobs;
        return $applications;  
    }

    public function showJobs($id)
    {
        $jobs = DB::table('jobs')->where('startup_id','=',$id)->get();
        return view('showJobs')->with('jobs',$jobs);
    }

    public function sendApplication($id)
    {
        $loggedInUser = Auth::user();
        $user_id = $loggedInUser->id;

        $seeker = User::find($user_id)->seeker;

        $jobs = Job::find($id);

        $jobs->seekers()->attach($seeker);
        return redirect('/showStartups');
    }

    public function postJobs($id)
    {
        return view('postJobForm')->with('startup_id',$id);
    }

    public function processJob(Request $data)
    {
        $data = $data->all();

        $job = new Job();

        $job->startup_id = $data['startup_id'];
        $job->type = $data['type'];
        $job->description = $data['description'];
        $job->salary = $data['salary'];
        $job->vacancy = $data['vacancy'];
        $job->save();

        return redirect('/showMyStartups');
    }

    public function showMyJobs($id)
    {
        $myJobs = Startup::find($id)->jobs;
        return view('showMyJobs')->with('myJobs',$myJobs);
    }

    public function showApplicants($id)
    {
        $applicants = Job::find($id)->seekers;
        return view('showApplicants')->with('applicants',$applicants);
    }

    /*public function confirmApplication($id, $job_id)
    {
        $job = Job::find($job_id);
        $job->vacancy = $job->vacancy - 1;

        if ($job->vacancy == 0)
        {
            $hired = new Hire();
            $hired->startup_id = $job->startup_id;
            $hired->type = $job->type;
            $hired->description = $job->description;
            $hired->salary = $job->salary;
            $hired->save();
            $job->delete();
        }
        else
        {
            $job->save();
        }

        $employee = new Employee();
        $employee->seeker_id = $id;
        $employee->save();

        $employee->jobs()->attach($job);

        $startup = Job::find($job_id)->startup;


        return redirect('/home');
    }*/
}

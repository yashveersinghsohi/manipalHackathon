<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Review; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
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

    public function reviewHome()
    {
        $reviews = Review::all();
        return view('reviewHome')->with('reviews',$reviews);    
    }

    public function reviewHomeAjax(Request $data)
    {
        /*$reviews = Review::all();
        return view('reviewHome')->with('reviews',$reviews);*/
        /*dd($reviews);*/

        $title = $data->title;
        $keyword = $data->keyword;

        if($title == "Title")
        {
            $reviews = Review::all();
        }
        else
        {
            $reviews = DB::table('reviews')->where('title','=',$title)->get();
        }

        $array = array();

        foreach ($reviews as $review)
        {
            $array[] = $review;
        }

        echo json_encode($array);
    }

    public function review()
    {
        return view('reviewForm');
    }

    public function reviewFormSpeak()
    {
        return view('reviewFormSpeak');
    }


    public function postReview(Request $data)
    {
        $loggedInUser = Auth::user();
        $user_id = $loggedInUser->id;

        $data = $data->all();

        $review = new Review();
        $review->user_id = $user_id;
        $review->title = $data['title'];
        $review->description = $data['description'];
        $review->review = $data['review'];
        $review->save();
        /*return $data;*/
        return redirect('/reviewHome');
    }

    public function postReviewAudio(Request $data)
    {
        $loggedInUser = Auth::user();
        $user_id = $loggedInUser->id;

        $data = $data->all();

        /*$name = $data['review']->getClientOriginalName();
        $file = (object)$data['review'];
        $file->move(public_path().'/files/', $name);*/

        $review = new Review();
        $review->user_id = $user_id;
        $review->title = $data['title'];
        $review->review = $data['review'];
        $review->save();
        /*return $data;*/
        return redirect('/reviewHome');
    }


    /*public function recordTitle()
    {
        return view('translation');        
    }

    public function recordDescription()
    {
        
    }

    public function recordReview()
    {
        
    }*/

    public function upvoteReview($id)
    {
    	$review = Review::find($id);
 
    	$review->upvotes = $review->upvotes + 1;
    	$review->save();
    	
    	return redirect('/reviewHome'); 
    }

    public function downvoteReview($id)
    {
    	$review = Review::find($id);
    	
    	$review->downvotes = $review->downvotes + 1;
    	$review->save();
    	
    	return redirect('/reviewHome'); 
    }

    public function myReviews()
    {
        $loggedInUser = Auth::user();
        $user_id = $loggedInUser->id;

        $myReviews = User::find($user_id)->reviews;

        return view('myReviews')->with('myReviews',$myReviews); 
    }

    public function myPoints()
    {
        return view('myPoints');
    }
}

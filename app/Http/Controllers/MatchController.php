<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use App\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

class MatchController extends Controller
{
	private $page_limit;
	private $teamLogoPath;
	
	public function __construct()
    {	
		$this->middleware('auth');
        $this->page_limit = Config::get('custom.page_limit'); 
		$this->teamLogoPath = Config::get('custom.team_logo_image_path'); 
    }

    public function index(Request $request)
    {
		$matches = [];
		if($request->session()->has('usersess')){
			$session_id = session('usersess');
			$matches = Match::select('*')->where('sessionid', '=', $session_id)->paginate($this->page_limit); 
		}		
		return view('matches.index', compact('matches'));
    }
	
    public function playMatch()
    {
		$teams = Team::select('*')->where('status', '1')->get(); 
		return view('matches.playmatch', compact('teams'));
    }

    public function saveMatch(Request $request)
    {
		if($request->session()->has('usersess')){
			$session_id = session('usersess');
		}		
		$team_a = $request->input('team_a');
		$team_b = $request->input('team_b');
		
		$match_exits = Match::select('*')
			->where('team_a', '=', $team_a)
			->where('team_b', '=', $team_b)
			->where('sessionid', '=', $session_id)
			->first();
		if($match_exits){
			$match = $match_exits;
			$returnHTML = view('matches.alreadyplayed', compact('match'))->render();
			return response()->json(array('success' => true, 'html'=>$returnHTML));
		}	
	
		$titleA = Team::find($team_a)->name;
		$titleB = Team::find($team_b)->name;		
		$match_title = $titleA . " Vs ". $titleB;
		
		$team_a_score = rand(50, 150);
		$team_b_score = rand(50, 150);
		
		if($team_a_score > $team_b_score){
			$winner_team = $team_a;
			$is_draw = 'N';
		}
		if($team_a_score < $team_b_score){
			$winner_team = $team_b;
			$is_draw = 'N';
		}
		if($team_a_score == $team_b_score){
			$winner_team = null;
			$is_draw = 'Y';
		}
		
		//Save data in match
		$match = new Match;
		$match->title = $match_title;
		$match->sessionid = $session_id;
		$match->team_a = $team_a;
		$match->team_b = $team_b;
		$match->team_a_score = $team_a_score;
		$match->team_b_score = $team_b_score;		
		$match->winner_team = $winner_team;
		$match->is_draw = $is_draw;
		$match->save();
		
		//Save data in point
		//Note: Winner team get 2 points, if match is draw then both team get 1 point.
		if($is_draw == 'N'){
			$point = new Point;
			$point->sessionid = $session_id;
			$point->team_id = $winner_team;
			$point->match_id = $match->id;
			$point->points = 2;
			$point->save();
		}
		elseif($is_draw == 'Y'){
			$point = new Point;
			$point->sessionid = $session_id;
			$point->team_id = $team_a;
			$point->match_id = $match->id;
			$point->points = 1;
			$point->save();
			
			$point = new Point;
			$point->sessionid = $session_id;
			$point->team_id = $team_b;
			$point->match_id = $match->id;
			$point->points = 1;
			$point->save();
		}		

        //return response()->json(array('session_id'=> $session_id), 200); 
		$returnHTML = view('matches.result', compact('match'))->render();
		return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        //
    }
}

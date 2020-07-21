<?php

namespace App\Http\Controllers;

use App\Point;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class PointController extends Controller
{	
	private $page_limit;
	private $teamLogoPath;

    public function __construct()
    {	
		$this->middleware('auth');
        $this->page_limit = Config::get('custom.page_limit'); 
		$this->teamLogoPath = Config::get('custom.team_logo_image_path'); 
    } 
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		if($request->session()->has('usersess')){
			$session_id = session('usersess');
		}
		
		$teams = Team::select('*')->where('status', '1')->paginate($this->page_limit); 
		
		//DB::enableQueryLog();
		$points = DB::table("teams")
			->select(DB::raw('teams.id, sum(points.points) as total_point') )
			->leftJoin('points', 'teams.id', '=', 'points.team_id')
			->where('teams.status', '=', '1')
			->where('points.sessionid', '=', $session_id)
			->groupBy('teams.id')			
			->orderBy('teams.id', 'ASC')
			->get();
		//$queries = DB::getQueryLog();
		//dd($queries);
		$pointArray = [];
		foreach($points as $key => $point){
			$pointArray[$point->id] = ($point->total_point) ? $point->total_point : 0;
		}
		//dd($pointArray);
		return view('points.index', compact('teams', 'pointArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function show(Point $point)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function edit(Point $point)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Point $point)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function destroy(Point $point)
    {
        //
    }
}

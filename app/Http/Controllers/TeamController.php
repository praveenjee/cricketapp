<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class TeamController extends Controller
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
    public function index()
    {
		$teams = Team::select('*')->paginate($this->page_limit); 
		return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$rules = [
            'name' => 'required|string|max:255|unique:teams',
            'slug' => 'required|string|max:255',
            'logo_uri' => 'required',
            'club_state' => 'required'
        ];

        $messages = [
            'name.required' => 'The Name field is required.',
            'slug.required' => 'The Type field is required.',
            'club_state.required' => 'The Club state field is required.',
            'logo_uri.mimes' => 'File type: jpeg, jpg, png supported only.',
            'logo_uri.required' => 'Team logo is required.',          
            'logo_uri.max' => 'Maximum image size to upload is 200KB.'
        ];

		$validator = Validator::make($request->all(), $rules, $messages);
        
        if($validator->validate()){
            //$input = $request->all();

            $team = new Team;            
			$team->name = $request->input('name');
			$team->slug = $request->input('slug');
			$team->history = $request->input('history');
			$team->description = $request->input('description');
			$team->club_state = $request->input('club_state');
			$team->status = $request->input('status');
			$team->meta_title = $request->input('meta_title');
			$team->meta_keywords = $request->input('meta_keywords');
			$team->meta_description = $request->input('meta_description');

            //Save profile image
            if ($request->hasFile('logo_uri')) {
                $profile_image = $request->file('logo_uri');  

                $extension = $profile_image->getClientOriginalExtension();
                $filename = $profile_image->getClientOriginalName(); 
                $filename = str_replace(' ', '', strtolower($filename));                
                $filename = basename($filename, ".".$extension);
                $filename = $filename . "-".time().".".$extension;

                $destination_path = public_path($this->teamLogoPath);
                $profile_image->move($destination_path, $filename);

                $team->logo_uri = $filename;
            }
            $team->save();
            
            return redirect()->route('teams.index')->with('message','Team added successfully.');     
        }         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
		$players = $team->players()->paginate($this->page_limit);
		return view('teams.show', compact('team', 'players'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
		$team->name = $request->input('name');
		$team->slug = $request->input('slug');
		$team->history = $request->input('history');
		$team->description = $request->input('description');
		$team->club_state = $request->input('club_state');
		$team->status = $request->input('status');
		$team->meta_title = $request->input('meta_title');
		$team->meta_keywords = $request->input('meta_keywords');
		$team->meta_description = $request->input('meta_description');

        //Save profile image
        if ($request->hasFile('logo_uri')) {
            //Remove old profile image
            if ($team->logo_uri != "" && file_exists(public_path($this->teamLogoPath."/".$team->logo_uri))){
                @unlink(public_path($this->teamLogoPath."/".$team->logo_uri));
            }

            $profile_image = $request->file('logo_uri'); 

            $extension = $profile_image->getClientOriginalExtension();
            $filename = $profile_image->getClientOriginalName(); 
            $filename = str_replace(' ', '', strtolower($filename));                
            $filename = basename($filename, ".".$extension);
            $filename = $filename . "-".time().".".$extension;
                                        
            $destination_path = public_path($this->teamLogoPath);
            $profile_image->move($destination_path, $filename);

            $team->logo_uri = $filename;
        }
		$team->save();
		
        return redirect()->back()->with('message', 'Team updated successfully.');         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
		//Remove old profile image
		if ($team->logo_uri != "" && file_exists(public_path($this->teamLogoPath."/".$team->logo_uri))){
			@unlink(public_path($this->teamLogoPath."/".$team->logo_uri));
		}
		
        $team->delete(); 
        $team->players()->delete(); 
		return redirect()->route('teams.index')->with('message', 'Team deleted successfully.');
    }
}

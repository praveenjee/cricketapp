<?php

namespace App\Http\Controllers;

use App\Team;
use App\Player;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class PlayerController extends Controller
{	
	private $page_limit;
	private $teamLogoPath;
	
    public function __construct()
    {
        $this->page_limit = Config::get('custom.page_limit'); 
		$this->playerProfileImagePath = Config::get('custom.player_profile_image_path'); 
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$players = Player::select('*')->paginate($this->page_limit); 
		return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$allteams = Team::where('status', '1')->get();
		$countries = Country::all();
        return view('players.create', compact('allteams', 'countries'));
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
            'first_name' => 'required|string|max:255',
            'image_uri' => 'required',
            'jersey_number' => 'required',
            'team_id' => 'required',
        ];

        $messages = [
            'first_name.required' => 'The First Name field is required.',
			'image_uri.mimes' => 'File type: jpeg, jpg, png supported only.',
            'image_uri.required' => 'Player\'s profile image is required.',          
            'image_uri.max' => 'Maximum image size to upload is 200KB.',
            'jersey_number.required' => 'The Nersey number field is required.',
            'team_id.required' => 'The Team field is required.'
        ];

		$validator = Validator::make($request->all(), $rules, $messages);
        
        if($validator->validate()){

            $player = new Player;            
			$player->first_name = $request->input('first_name');
			$player->last_name = $request->input('last_name');
			$player->jersey_number = $request->input('jersey_number');
			$player->team_id = $request->input('team_id');
			$player->country_id = $request->input('country');
			$player->history = $request->input('history');
			$player->description = $request->input('description');
			$player->status = $request->input('status');
			$player->meta_title = $request->input('meta_title');
			$player->meta_keywords = $request->input('meta_keywords');
			$player->meta_description = $request->input('meta_description');

            //Save profile image
            if ($request->hasFile('image_uri')) {
                $profile_image = $request->file('image_uri');  

                $extension = $profile_image->getClientOriginalExtension();
                $filename = $profile_image->getClientOriginalName(); 
                $filename = str_replace(' ', '', strtolower($filename));                
                $filename = basename($filename, ".".$extension);
                $filename = $filename . "-".time().".".$extension;

                $destination_path = public_path($this->playerProfileImagePath);
                $profile_image->move($destination_path, $filename);

                $player->image_uri = $filename;
            }
            $player->save();   
         
            return redirect()->route('players.index')->with('message','Player added successfully.');     
        }    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
		$allteams = Team::where('status', '1')->get();
		$countries = Country::all();
        return view('players.edit', compact('player', 'allteams', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
		$player->first_name = $request->input('first_name');
		$player->last_name = $request->input('last_name');
		$player->jersey_number = $request->input('jersey_number');
		$player->team_id = $request->input('team_id');
		$player->country_id = $request->input('country');
		$player->history = $request->input('history');
		$player->description = $request->input('description');
		$player->status = $request->input('status');
		$player->meta_title = $request->input('meta_title');
		$player->meta_keywords = $request->input('meta_keywords');
		$player->meta_description = $request->input('meta_description');

        //Save profile image
        if ($request->hasFile('image_uri')) {
            //Remove old profile image
            if ($player->image_uri != "" && file_exists(public_path($this->playerProfileImagePath."/".$player->image_uri))){
                @unlink(public_path($this->playerProfileImagePath."/".$player->image_uri));
            }

            $profile_image = $request->file('image_uri'); 

            $extension = $profile_image->getClientOriginalExtension();
            $filename = $profile_image->getClientOriginalName(); 
            $filename = str_replace(' ', '', strtolower($filename));                
            $filename = basename($filename, ".".$extension);
            $filename = $filename . "-".time().".".$extension;
                                        
            $destination_path = public_path($this->playerProfileImagePath);
            $profile_image->move($destination_path, $filename);

            $player->image_uri = $filename;
        }
		$player->save(); 		

        return redirect()->back()->with('message', 'Player updated successfully.');          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
		//Remove old profile image
		if ($player->image_uri != "" && file_exists(public_path($this->playerProfileImagePath."/".$player->image_uri))){
			@unlink(public_path($this->playerProfileImagePath."/".$player->image_uri));
		}
		
        $player->delete(); 
		return redirect()->route('players.index')->with('message', 'Player deleted successfully.');
    }
}

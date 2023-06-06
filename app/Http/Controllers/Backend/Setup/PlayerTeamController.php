<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlayerTeam;


class PlayerTeamController extends Controller
{
    public function ViewPlayer(){
        $data['allData'] = PlayerTeam::all();
        return view('backend.setup.player_team.view_team', $data);
    }
    
    
    public function PlayerTeamAdd(){
        return view('backend.setup.player_team.add_team');
    }
    
    
    public function PlayerTeamStore(Request $request){
        
        $validateData = $request->validate([
            'name' => 'required|unique:player_teams,name',
        ]);

        $data = new PlayerTeam();
        $data->name = $request->name;

        $data->save();

        return redirect()->route('player.team.view');


    }


    public function PlayerTeamEdit($id){
        
        $editData = PlayerTeam::find($id);

        return view('backend.setup.player_team.edit_team', compact('editData'));

    }
    
    
    public function PlayerTeamUpdate(Request $request, $id){

        $data = PlayerTeam::find($id);

        $validateData = $request->validate([
            'name' => 'required|unique:player_teams,name,' .$data->id
        ]);

        $data->name = $request->name;
        $data->save();

        return redirect()->route('player.team.view');

    }
   
   
    public function PlayerTeamDelete($id){

        $team = PlayerTeam::find($id);

        $team->delete();

        return redirect()->route('player.team.view');

    }






}

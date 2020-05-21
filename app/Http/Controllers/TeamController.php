<?php

namespace App\Http\Controllers;

use App\Team;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(){
        $members = Team::all();
        return view('pages.team.index', [
            'members' => $members
        ]);
    }

    public function edit($id){
        $member = Team::findOrFail($id);
        return view('pages.team.edit',[
            'member' => $member
        ]);
    }

    public function update($id,Request $request){

        $teamMember = Team::find($id);

        $image = $request->image;
        $name = $request->name;
        $title = $request->title;
        $imageName = "";

        if(isset($image)){
            $path = $image->store('public/team');
            $imageName = explode("/", $path); 
            $imageName = $imageName[2];
        }else{
            $imageName = $teamMember->photo;
        }

        $teamMember->name = $name;
        $teamMember->title = $title;
        $teamMember->photo = $imageName;

        $teamMember->save();
        
        // dd($path);
        return redirect()->back();
        
    }

    public function delete($id){
        $teamMember = Team::findOrFail($id);

        $teamMember->delete();
        
        return redirect()->back();
    }
}

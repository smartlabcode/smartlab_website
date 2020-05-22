<?php

namespace App\Http\Controllers;

use App\Team;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function validateInput($request){
        return $request->validate([
            'name' => ['required','max:100'],
            'title' => ['required','max:100'],
            'image' => ['required']
        ]);
    }
    public function index(){
        $members = Team::withTrashed()->get();
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

        $validator=$this->validateInput($request);

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
        return redirect()->back()->withErrors($validator);
        
    }

    public function delete($id){
        $teamMember = Team::withTrashed()->findOrFail($id);

        if($teamMember->deleted_at != null){
            $teamMember->forceDelete();
        }
        $teamMember->delete();
        
        return redirect()->back();
    }

    public function restore($id){
        $teamMember = Team::withTrashed()->findOrFail($id);
        $teamMember->restore();

        return redirect()->back();

    }

    public function store(Request $request){

        $validator=$this->validateInput($request);

        $teamMember = new Team;

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
        return redirect()->back()->withErrors($validator);  
    }
}

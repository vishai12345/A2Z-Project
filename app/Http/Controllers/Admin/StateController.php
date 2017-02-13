<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\State;

class StateController extends Controller {

    // Class Constructor
   public function __construct()
    {
        $this->middleware('auth');
    }
	

    // States
    public function index() {
        //$data['states'] = State::all();
        $data['states'] = State::paginate(20);
		$data['page_type'] = 'states';
		$data['page'] = 'master';
        return view('admin/states', $data);
    }

    // Save State
    public function saveState(Request $request) {
        $this->validate($request, ['state_name' => 'required','state_code' => 'required']);
        $data = array('state_name' => $request->state_name, 'state_code' => $request->state_code, 'remember_token' => $request->_token);
        // Create State Slug
        $state_slug = $this->create_slug($request->state_name);
        // Check State Slug In DB
        $check_slug = State::where('slug', 'like', $state_slug . '%')->count();
        $data['slug'] = ($check_slug > 0) ? ($state_slug . '-' . $check_slug) : $state_slug;
        $state = new State($data);
        if ($state->save()) {
            return redirect('admin/states')->with("success", "State inserted successfully!");
        } else {
            return redirect('admin/states')->with("error", "State insertion failed!");
        }
    }

    // Update State Form
    public function editState($state_id = 0) {
        $data['state'] = State::find($state_id);
        $data['page_type'] = 'masters';
        $data['page'] = 'state';
        return view('admin/edit-state', $data);
    }

    // Update State
    public function updateState(Request $request) {
        $this->validate($request, ['state_name' => 'required']);
        // Create State Slug
        $state_slug = $this->create_slug($request->state_name);
        // Check State Slug In DB
        $check_slug = State::where('slug', 'like', $state_slug . '%')->count();
        $slug = ($check_slug > 0) ? ($state_slug . '-' . $check_slug) : $state_slug;
        $state = State::find($request->state_id);
        $state->state_name = $request->state_name;
        $state->slug = $slug;
        if ($state->save()) {
            return redirect()->action('Admin\StateController@index')->with("success", "State updated successfully!");
        } else {
            return redirect()->action('Admin\StateController@editState', ['state_id' => $state->id])->with("error", "State updation failed!");
        }
    }

    // Delete State
    public function deleteState($state_id = 0) {
        $delete_state = State::find($state_id);
        if ($delete_state->delete())
            return redirect('admin/states')->with("success", "State deleted successfully!");
        else
            return redirect('admin/states')->with("error", "State insertion failed!");
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\City;
use App\State;

class CityController extends Controller {
		
		public function __construct()
    {
        $this->middleware('auth');
    }
	

    // Cities    
    public function index() {
       
        $data['cities'] = City::paginate(20);
        $data['states'] = State::all();
		$data['page_type'] = 'cities';
		$data['page'] = 'master';
        return view('admin/cities', $data);
    }

    // Save City
    public function saveCity(Request $request) {
        $this->validate($request, ['city_name' => 'required']);
        $data = array('city_name' => $request->city_name, 'state_id' => $request->state_id, 'remember_token' => $request->_token);
        // Create City Slug
        $city_slug = $this->create_slug($request->city_name);
        // Check City Slug In DB
        $check_slug = City::where('slug', 'like', $city_slug . '%')->count();
        $data['slug'] = ($check_slug > 0) ? ($city_slug . '-' . $check_slug) : $city_slug;
        $city = new City($data);
        if ($city->save()) {
            return redirect('admin/cities')->with("success", "City inserted successfully!");
        } else {
            return redirect('admin/cities')->with("error", "City insertion failed!");
        }
    }

    // Update City Form
    public function editCity($city_id = 0) {
        $data['states'] = State::all();
        $data['city'] = City::find($city_id);
        $data['page_type'] = 'masters';
        $data['page'] = 'city';
        return view('admin/edit-city', $data);
    }

    // Update City
    public function updateCity(Request $request) {
        $this->validate($request, ['state_id' => 'required', 'city_name' => 'required']);
        // Create City Slug
        $city_slug = $this->create_slug($request->city_name);
        // Check City Slug In DB
        $check_slug = City::where('slug', 'like', $city_slug . '%')->count();
        $slug = ($check_slug > 0) ? ($city_slug . '-' . $check_slug) : $city_slug;
        $city = City::find($request->city_id);
        $city->state_id = $request->state_id;
        $city->city_name = $request->city_name;
        $city->slug = $slug;
        if ($city->save()) {
            return redirect()->action('Admin\CityController@index')->with("success", "City updated successfully!");
        } else {
            return redirect()->action('Admin\CityController@editCity', ['city_id' => $city->id])->with("error", "City updation failed!");
        }
    }

    // Delete City
    public function deleteCity($city_id = 0) {
        $delete_city = City::find($city_id);
        if ($delete_city->delete())
            return redirect('admin/cities')->with("success", "City deleted successfully!");
        else
            return redirect('admin/cities')->with("error", "City deletion failed!");
    }

    public function paging() {
        $cities = City::paginate(15);
        return view('admin/cities-alt', ['cities' => $cities]);
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Country;

class CountryController extends Controller {
		
		public function __construct()
    {
        $this->middleware('auth');
    }
	

    // Cities    
    public function index() {
       
        $data['countrys'] = Country::paginate(20);
        return view('admin/countrys', $data);
    }

    // Save Country
    public function saveCountry(Request $request) {
        $this->validate($request, ['country_name' => 'required']);
        $data = array('country_name' => $request->country_name,'remember_token' => $request->_token);
		
        $country = new Country($data);
        if ($country->save()) {
            return redirect('admin/countrys')->with("success", "Country inserted successfully!");
        } else {
            return redirect('admin/countrys')->with("error", "Country insertion failed!");
        }
    }

    // Update Country Form
    public function editCountry($country_id = 0) {
        $data['country'] = Country::find($country_id);
        return view('admin/edit-country', $data);
    }

    // Update Country
    public function updateCountry(Request $request) {
		
        $this->validate($request, ['country_id' => 'required', 'country_name' => 'required']);
       
        $country = Country::find($request->country_id);
        $country->country_name = $request->country_name;
        if ($country->save()) {
            return redirect()->action('Admin\CountryController@index')->with("success", "Country updated successfully!");
        } else {
            return redirect()->action('Admin\CountryController@editCountry', ['id' => $country->id])->with("error", "Country updation failed!");
        }
    }

    // Delete Country
    public function deleteCountry($country_id = 0) {
        $delete_country = Country::find($country_id);
        if ($delete_country->delete())
            return redirect('admin/countrys')->with("success", "Country deleted successfully!");
        else
            return redirect('admin/countrys')->with("error", "Country deletion failed!");
    }

    public function paging() {
        $cities = Country::paginate(15);
        return view('admin/cities-alt', ['cities' => $cities]);
    }

}

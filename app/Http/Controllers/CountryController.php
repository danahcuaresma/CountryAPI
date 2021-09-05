<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryModel;

class CountryController extends Controller
{
    // Create a country
    public function createCountryModel(Request $request) {
        $country = new CountryModel();
        $country->name = $request->input('name');
        $country->president = $request->input('president');
        $country->population = $request->input('population');
        $country->save();
        return response()->json($country);
    }

    // Get all countries
    public function getAllCountryModel(Request $request) {
        $countries = CountryModel::all();
        return response()->json($countries);
    }

    // Get country by ID
    public function getCountryModelById(Request $request, $id) {
        $country = CountryModel::find($id);
        return response()->json($country);
    }

    // Update country by ID
    public function updateCountryModelById(Request $request, $id) {
        $country = CountryModel::find($id);
        $country->name = $request->input('name');
        $country->president = $request->input('president');
        $country->population = $request->input('population');
        $country->save();
        return response()->json($country);
    }
    public function deleteCountryModelById(Request $request, $id) {
        $country = CountryModel::find($id)->delete();
        return response()->json($country);
    }
}

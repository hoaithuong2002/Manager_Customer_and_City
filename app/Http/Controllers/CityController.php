<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('cities.list', compact('cities'));
    }

    public function getCustomersInCity()
    {

    }
    public function create(){
        return view('cities.create');
    }
    public function store(Request $request){
        $city = new City();
        $city->name = $request->input('name');
        $city->save();

        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index');
    }
    public function edit($id){
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

}

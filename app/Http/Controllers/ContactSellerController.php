<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactsellers ;
class ContactSellerController extends Controller
{

	 
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return contactsellers::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'Message' => $data['Message'],
        ]);
    }
	public function index() {
        return view('index');
    }
 	public function ViewAll()
    {
   		
   		$contactSeller = contactsellers::all();
        return response()->json($contactSeller);

    }
 

}

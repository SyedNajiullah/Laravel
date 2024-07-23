<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class registration_controller
{
    public function view_form(){
        return view('registration_form');
    }

    public function validation(Request $req){
        $validation = Validator::make($req->all(), [

            'first_name' => 'required|string|min:3|max:10',
            'last_name' => 'required|string|min:3|max:10', 
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'age' => 'required|integer|min:18|max:100',
            'pic' => 'required|image|mimes:jpeg,bmp,png,jpg',
            'bio' => 'required|string|min:20|max:500',
            'sport' => 'nullable|boolean',
            'music' => 'nullable|boolean',
            'movie' => 'nullable|boolean', 
            'gender' => 'required|in:male,female',
            'country' => 'required|in:United States,Pakistan,Iraq,United Kingdom,Germany,Iran,Canada',
            'phone_number' => 'required|string|min:12',
            'address' => 'required|string|max:500|min:5',
            'city' => 'required|string|min:3|max:50',
            'postal_code' => 'required|string|min:5',
            'website_url' => 'required|url',
            'terms_and_condition' => 'required|accepted'

        ]);

        if($validation->fails()){
            // redirect->back meand to redirec on the same page and with errors() means with errors and withinput() means with the input that the user wrote
            return redirect()->back()->withErrors($validation)->withInput();
        }else{

            // Data insertion in the database code 

            DB::table('insertion')->insert(
                [
                    'first_name' => $req->first_name,
                    'last_name' => $req->last_name,
                    'email' => $req->email,
                    'password' => $req->password,
                    'age' => $req->age,
                    'image' => true,
                    'bio' => $req->bio,
                    'sport' => $req->has('sport'),//Returns true or false
                    'music' => $req->has('music'),
                    'movie' => $req->has('movie'),
                    'gender' => $req->gender,
                    'country' => $req->country,
                    'phone_number' => $req->phone_number,
                    'address' => $req->address,
                    'city' => $req->city, 
                    'postal_code' => $req->postal_code,
                    'website_url' => $req->website_url,
                    'terms_and_condition' => true
                ]
            );

            // returning to home form page once again

            return redirect('/registration')->with('success', "Registration complete thanks for staying with us. You are a member of our group Now");
        }
    }
}


//             'first_name' => 'required|string|min:3|max:10', it is required, string datatype. minimum 3 and maximum 10 charecters long
//             'last_name' => 'required|string|min:3|max:10', it is required, string datatype. minimum 3 and maximum 10 charecters long
//             'email' => 'required|email|unique:users,email', it is required, email datatype and every user should have a unique email
//             'password' => 'required|string|min:8|confirmed',it is required, string datatype. Minimum 8 charecters lonag and should be mach with the confirm_password
//             'age' => 'required|integer|min:18|max:100', it is required, integer datatype, minimum 18 and maximmum 100 charecters long
//             'pic' => 'required|image|mimes:jpeg,bmp,png,jpg', it is required, image datatype, can have jpeg, bmp, png or jpg as an extention.
//             'bio' => 'required|string|min:50|max:500', it is required, string datatype, minimum 50 charecters and maximmum 500 charecters
//             'sport' => 'nullable|boolean', it is not required, can be nullable. boolean datatype because it can store value and it cannot store value.
//             'music' => 'nullable|boolean', it is not required, can be nullable. boolean datatype because it can store value and it cannot store value.
//             'movie' => 'nullable|boolean', it is not required, can be nullable. boolean datatype because it can store value and it cannot store value.
//             'gender' => 'required|in:male,female', it is required, enum data type an should either be male or female
//             'country' => 'required|string|in:val1,val2,val3,val4,val5,val6,val7', it is required, string data type and have val1, val2, ......... val7 values. either one of them
//             'phone_number' => 'required|string|min:12',it is required, string datatype and should have minimmum 12 charecters
//             'address' => 'required|string|max:500|min:50', it is required string data type. Maximmum 500 charecters and minimmum 50 charecters
//             'city' => 'required|string|min:3|max:50', it is required, string data type and minimmum 3 and maximmum 50 charecters long
//             'postal_code' => 'required|string|min:5', it is required, string datatyoe and have 5 minimum charecters
//             'website_url' => 'required|url', it is required, its datatype should be url.
//             'terms_and_condition' => 'required|accepted', it is required. should be clicked for further process. accepted means it must be checked



/* DIFFERENCE BETWEEN INTEGER AND DIGITS */

// 12 = number, but 1 is a seperate digit and 2 is a seperate digit
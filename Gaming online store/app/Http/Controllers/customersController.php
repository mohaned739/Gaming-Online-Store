<?php

namespace App\Http\Controllers;

use App\User;
use App\product;
use Illuminate\Http\Request;

class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $cust=new User();
//        $cust->userFullName='Amr';
//        $cust->userEmail='Amr462@gmail.com';
//        $cust->userPassword=bcrypt('123456');
//        $cust->userPhoneNumber= 1098976400 ;
//        $cust->userAddress='Maadi';
//        $cust->userRole=1;
//        $cust->save();
//        return 'done';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $user=new users();
//        $user->name=$request->userFullName;
//        $user->email=$request->userEmail;
//        $user->password=$request->userPassword;
//        $user->phone_number=$request->userPhoneNumber;
//        $user->address=$request->userAddress;
//        $user->save();
//        return redirect('/showall');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function showAll()
    {
        $user=User::all();
        $prod=product::all();
        return view('admin_panel')->with('user',$user)->with('prod',$prod);
//        return view('show',compact('emp'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function promot_admin($id)
    {
        $pro=User::findorfail($id);
        if ($pro->userRole==0) {
            $pro->userRole = 1;
        }
        else{
            $pro->userRole = 0;
        }
        $pro->save();
        return redirect('/adminpanel');
    }
    public function destroy($id)
    {
        $del=User::findorfail($id);
        $del->userFullName="*".$del->userFullName;
        $del->userEmail="*".$del->userEmail;
        $del->save();
        return redirect('/adminpanel');
    }
}

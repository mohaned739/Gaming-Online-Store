<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Cast\Array_;


class productsController extends Controller
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

        $product=new product();
        $product->productName='Wolfenstein Youngblood Deluxe Edition';
        $product->productType='PS4';
        $product->productDescription='THIS IS GTAV';
        $product->productImage='images/store%20images/Wolfenstein_Youngblood_Deluxe_Edition_PS4.jpg';
        $product->productPrice=500;
        $product->save();
        return "Done";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod=new product();
        $prod->productName=$request->name;
        $prod->productPrice=$request->price;
        $prod->productDescription=$request->desc;
        $prod->productType=$request->type;
        $path="images/store%20images/";
        $prod->productImage=$path.$request->image;
        $prod->save();
        return redirect('/store');
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

    public function findproduct($id)
    {


        $prod2= product::findorFail($id);
        session_start();
//        if(session_id() == '' || !isset($_SESSION)){
            $_SESSION['cart2']= array();
//        }

            array_push($_SESSION['cart2'], $prod2);

       // return $_SESSION['cart'][0];
//        $prod = product::all();
//        return $_SESSION['cart2'];
        return redirect('/store')->with('cart2',$_SESSION['cart2']);

    }

    public function showAll()
    {
        $prod = product::all();
        if (Session::get('cart2')) {
            $cart = Session::get('cart2');
            return view('Store')->with('prod', $prod)->with('cart',$cart);
        }
        else {
            return view('Store')->with('prod', $prod);
        }
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_game($id)
    {
        $del=product::findorfail($id);
        $del->productName="*".$del->productName;
        $del->productType="*".$del->productType;
        $del->productDescription="*".$del->productDescription;
        $del->save();
        return redirect('/adminpanel');
    }
    public function destroy($id)
    {
        //
    }
}

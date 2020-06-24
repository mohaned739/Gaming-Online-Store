<?php

namespace App\Http\Controllers;

use App\product;
use App\User;
use Illuminate\Http\Request;

class ordersController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $path='ordersfile.txt';
//        $file_handle = fopen($path, 'r');
//
//        while (!feof($file_handle) ) {
//
//            $line_of_text = fgets($file_handle);
//            $id = explode('*', $line_of_text);
//
//            foreach ($id as $id2) {
////                echo $id2."</br>";
////                var_dump($id2)."<br>";
//                if ($id2!="") {
//                    $order=product::findorfail($id2);
//                    //$prod2 = product::findorFail($id2);
//                    array_push($_SESSION['cart'], $order);
//                }
//            }
//        }
//        fclose($file_handle);
//
//        file_put_contents("ordersfile.txt", "");
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
    public function showAll($id=null)
    {
//        session_destroy($_SESSION['cart']);


//        if(session_id() == '' || !isset($_SESSION)){
        session_start();
        $_SESSION['cart']= array();
//        }
        $path='ordersfile.txt';
        $file_handle = fopen($path, 'r');

        while (!feof($file_handle) ) {

            $line_of_text = fgets($file_handle);
            $id = explode('*', $line_of_text);

            foreach ($id as $id2) {
//                echo $id2."</br>";
//                var_dump($id2)."<br>";
                if ($id2!="") {
                $order=product::findorfail($id2);
                //$prod2 = product::findorFail($id2);
                    array_push($_SESSION['cart'], $order);
                }
            }
        }
        fclose($file_handle);

        return view("order")->with('cart',$_SESSION['cart']);
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
    public function destroy($id)
    {
        //
    }
}


@extends('layout.master')
@section('title')
    Order
    @endsection
@section('content')
    <link rel="stylesheet" href="css/order_style.css">
    <div class="container-fluid">
    <div class="container" id="order_title">
        Games Empire
    </div>
        {{--<div id="myForm">--}}
        {{--<form >--}}
            {{--<center>--}}
                {{--<label style="font-weight: bolder;font-size: 25px">Please enter your Address</label>--}}
            {{--<div id="inputform" >--}}

                {{--<textarea id="textbox" required style="resize: none;" ></textarea>--}}
            {{--</div></center>--}}
        {{--</form>--}}
        {{--</div>--}}

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table" class="table table-condensed">
                                <thead>
                                <tr>
                                    <td style="width: 50%;"><strong>Item</strong></td>
                                    <td style="width: 50%;" class="text-center"><strong>Price</strong></td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                               <div style="visibility: hidden"> {{$_SESSION['total']=0}}</div>
                                @foreach($cart as $item)
                                <tr>
                                    <td>{{$item->productName}}</td>
                                    <td class="text-center">{{$item->productPrice}}</td>
                                    <td><a href="#" id="delete_btn" class="btn btn-danger">Delete</a></td>
                                <div style="visibility: hidden">{{$_SESSION['total']+=$item->productPrice}}</div>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Total</strong></td>
                                    <td class="thick-line text-right">{{$_SESSION['total']}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="confirm"  class="btn-primary" >Confirm Order</button>
    </div>
    </div>

<script>
    var btn=document.getElementById("confirm");
    btn.onclick=function () {
        alert("Your order has been confirmed ");
    }
    var delete_btn=document.getElementById("delete_btn");
    delete_btn.onclick=function () {
//        document.getElementById("table").deleteRow();
    }

</script>
@endsection


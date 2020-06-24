
{{--////if(isset($cart))--}}
{{--////    foreach ($cart as $item){--}}
{{--////        print_r($item['productId']."<br>") ;--}}
{{--////    }--}}
{{--////--}}
{{--////else--}}
{{--////    echo '<h1>dfghjkkjhg</h1>';--}}
{{--//--}}
@extends('layout.master')


@section('title')
    Store
@endsection


@section('content')
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="css/store_style.css">
    <div class="container">
        <center><h1>Games</h1></center>
        <div id="orderbtn" onclick="orderBtn()" style="position: fixed;right: 13.6%;top: 25%;z-index: 5">
                <button class="btn btn-outline-secondary">Check Out</button>
                @if(isset($cart))
                <?php
                $fp=fopen("ordersfile.txt",'a');
                    foreach( $cart as $item ){
                        fwrite($fp,$item->productId."*");
                    }
                    fclose($fp) ;
                ?>

                <input type="hidden" value="{{count($cart)}}">
            @endif
        </div>
        <hr>

        <div class="row" style="position: relative">
            @foreach($prod as $item)
            <div class="col-sm-12">
            <div id="image" >
                <img src="{{$item->productImage}}" width="100%" height="250px">
            </div>
                <div id="game_name">
                    {{$item->productName}}
                </div>
            <div id="desc" >
               {{$item->productDescription}}
                </div>
          <div id="cart_price" >
              <div id="price"><h5>{{$item->productPrice}} EGP</h5></div>
              <div id="cart_btn"><a href="/store/{{$item->productId}}" class="btn btn-primary" > Add to Cart</a></div>
          </div><br><br><hr><br><br>
        </div>
                @endforeach
    </div>

    </div>

<script>
    function orderBtn() {
        @if(Auth::guest())
        alert("You must login to make an order", "");
        window.location.href = "/login";

        @elseif(!isset($cart)||empty($cart))
        alert("Your cart is empty", "");

        @else
                    window.location.href="/order";
        @endif
    }
</script>
@endsection

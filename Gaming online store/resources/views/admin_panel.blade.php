@extends("layout.master")
@section("head")
    Admin Panel
    @endsection
@section("content")
<link rel="stylesheet" href="css/admin_style.css">
<link rel="stylesheet" href="css/store_style.css">
<div class="container-fluid" id="cont">
    <button id="defaultOpen" class="tablink" onclick="openPage('Users', this, 'red')">Users</button>
    <button class="tablink" onclick="openPage('Products', this, 'orange')">Products</button>

    <div id="Users" class="tabcontent">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Password</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $item)
                @if($item->userFullName[0]!="*")
                <tr>
                    <td> {{$item->userFullName}} </td>
                    <td> {{$item->userEmail}}</td>
                    <td> {{$item->userPassword}}</td>
                    <td> {{$item->userPhoneNumber}}</td>
                    <td> {{$item->userAddress}}</td>
                    <td>
                        @if($item->userRole==0)
                            User
                            @else
                            Admin
                            @endif
                    </td>
                    <td>
                        {{--                    /edit/{{$item->id}}--}}
                        {{--<a href="" class="btn btn-info">Update</a> |--}}
                        <a href="/adminpanel/{{$item->id}}" id="delete_btn" class="btn btn-danger">Delete</a>
                        @if($item->userRole==0)

                        | <a href="/adminpanel2/{{$item->id}}" class="btn btn-primary">Promote to Admin</a>
                          @else
                            | <a href="/adminpanel2/{{$item->id}}" class="btn btn-danger">Dismiss Admin</a>
                        @endif
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>

    <div id="Products" class="tabcontent" style="overflow: scroll">
         <div id="add_game_btn" ><a href="/form" class="btn btn-success" >Add Game</a></div>
        <br><br><hr><br><br>
        <div class="row" style="position: relative">
            @foreach($prod as $item)
@if($item->productName[0]!="*"&&$item->productType[0]!="*"&&$item->productDescription[0]!="*")
                <div class="col-sm-12" style="border: solid">
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
                        <div id="del_game_btn" ><a href="/adminpanel3/{{$item->productId}}" class="btn btn-danger" >Delete</a></div>
                    </div><br><br><hr><br><br>
                </div>
    @endif
            @endforeach
        </div>
    </div>
</div>
    <script>
        function openPage(pageName, elmnt, color) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove the background color of all tablinks/buttons
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }

            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";

            // Add the specific color to the button used to open the tab content
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    @endsection

<!DOCTYPE html>
<html>
    <head>
        <title>Plugin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- font -->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
        
        <!-- font awsome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        
        <!-- jqueryt -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/Main.css"/>
        <style type="text/css">
          .fas{
            color: white;
          }
          body{
            background-image: url("img/1.jpg");
          }
          

          /*Slide bar nav*/
          body {
              font-family: "Lato", sans-serif;
          }

          .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
          }

          .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
              transition: 0.3s;
          }

          .sidenav a:hover {
              color: #f1f1f1;
          }

          .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
          }

          #main {
              transition: margin-left .5s;
              padding: 16px;
          }

          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }


          /*for dropdown*/

          /* Fixed sidenav, full height */
          .mySidenav {
              height: 100%;
              width: 200px;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              padding-top: 20px;
          }

          /* Style the sidenav links and the dropdown button */
          .mySidenav a, .dropdown-btn {
              padding: 6px 8px 6px 16px;
              text-decoration: none;
              font-size: 20px;
              color: #818181;
              display: block;
              border: none;
              background: none;
              width: 100%;
              text-align: left;
              cursor: pointer;
              outline: none;
          }

          /* On mouse-over */
          .sidenav a:hover, .dropdown-btn:hover {
              color: #f1f1f1;
          }

          /* Main content */
          .main {
              margin-left: 200px; /* Same as the width of the sidenav */
              font-size: 20px; /* Increased text to enable scrolling */
              padding: 0px 10px;
          }

          /* Add an active class to the active dropdown button */
          .active {
              background-color: green;
              color: white;
          }

          /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
          .dropdown-container {
              display: none;
              background-color: #262626;
              padding-left: 8px;
          }

          /* Optional: Style the caret down icon */
          .fa-caret-down {
              float: right;
              padding-right: 8px;
          }



          /*Trans*/
          .trans2{
            color: white;
            background-color: rgba(0,0,0,.2);
          }
          .trans4{
            color: white;
            background-color: rgba(0,0,0,.4);
          }
          .trans6{
            color: white;
            background-color: rgba(0,0,0,.6);
          }
          .trans8{
            color: white;
            background-color: rgba(0,0,0,.8);
          }
          .trans0{
            color: white;
            background-color: rgba(0,0,0,1);
          }
        </style>
    </head>
    <body>
        <div class="continer-fluid" id="main">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="col-sm-1">
              <span style="font-size:30px;cursor:pointer" id = "openNav"><i class="fas fa-arrow-circle-right"></i></span>  
            </div>
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="offset-sm-2 col-sm-4" align="center">          
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2 col-sm-10" type="search" placeholder="Search" aria-label="Search">
                </form>
              </div>
              <div class="col-sm-1" align="center">
                <i class="fas fa-envelope fa-2x"><sub><span class="badge badge-danger">3</span></sub></i>
              </div>
              <div class="col-sm-1" align="center">
                <i class="fas fa-bell fa-2x"><sub><span class="badge badge-danger">5</span></sub></i>
              </div>
              <div class="col-sm-1" align="center">
                <i class="fas fa-paint-brush fa-2x"></i>
              </div>
              <div class="col-sm-2" align="center">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aarav
                  </button>
                  <div class="dropdown-menu" aria-labelledby="profile_dropdown">
                    <button class="dropdown-item openLink" link="{{url('/')}}/profile" type="button" >View Profile</button>
                    <button class="dropdown-item openLink" link="{{url('/')}}/setting" type="button">Setting</button>
                    <button class="dropdown-item openLink" link="{{url('/')}}/logout" type="button">Logout</button>
                  </div>
                </div>
              </div>
            </div>
          </nav>


          <div id="mySidenav" class="sidenav trans6">
            <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>

            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#clients">Clients</a>
            <a href="#contact">Contact</a>
            <a class="dropdown-btn">Dropdown 
              <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-container">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
            <a href="#contact">Search</a>   
          </div>


          <br>
          <br>
          <br>

          <!-- ---------------------- Content Area:start ---------------- -->
          <div class="continer-fluid trans2">
            <br>
            <div class="row">
              <div class="offset-1 col-sm-4 trans4">
                Cow is a very famous and important domestic animal. It is known as the “Cow is our Mother” in India. Kids are generally assigned to write essay on cow in their classroom or exams. So, various types of cow essay are provided here in different words limit for your school going kids and children. You can select anyone of these:
                <div class="trans6">
                  No of Cow:<b><big><div class="trans8">@2000 </div></big></b>
                </div>
              </div>
              <div class="offset-sm-2 col-sm-4 trans4">
                Cow is a very famous and important domestic animal. It is known as the “Cow is our Mother” in India. Kids are generally assigned to write essay on cow in their classroom or exams. So, various types of cow essay are provided here in different words limit for your school going kids and children. You can select anyone of these:
                <div class="trans6">
                  No of Cow:<b><big><div class="trans8">@2000 </div></big></b>
                </div>
              </div>  
            </div>
            <!-- <form id="imgur">
              <input type="file" class="imgur" id = "inp" accept="image/*" data-max-size="5000"/>
            </form> -->
          <!-- ---------------------- Content Area:start ---------------- -->            
          </div>  
        </div>
        <script>
          
          $(function(){
            console.log("hellow");
            $("#openNav").click(function(){
              document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                $(".fa-arrow-circle-right").hide();
            });
            $("#closeNav").click(function(){
              console.log("hello:");
              document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
                $(".fa-arrow-circle-right").show();
            });
            $(".openLink").click(function(){
              window.open($(this).attr("link"));
            });

            setTimeout(function(){$("#openNav").click();console.log("done");},20);


            // //imgur uploading..Start
            //  $('.imgur').on("change", function() {
            //     $this = $(this);
            //   var $files = $(this).get(0).files;

            //   if ($files.length) {

            //     // Reject big files
            //     if ($files[0].size > $(this).data("max-size") * 1024) {
            //       alert("Please select a smaller file");
            //       return false;
            //     }
            //     console.log($files[0].mozFullPath);
            //     console.log($files);
            //     console.log($('.imgur').val());
            //     // Begin file upload
            //     console.log("Uploading file to Imgur..");
            //     var clientId = "48a6587a220b9c8"; // Your client Id
            //     var imgUrl = "http://i.imgur.com/l5OqYoZ.jpg";
            //     var base64Data; // for base 64 data 
            //     // this is to conver to base 64
            //     var A;
            //     var B;

            //     function findBase64(){
            //       console.log("in base64Data");
            //       //if ($this.files && $this.files[0]) {
            //         console.log("if if file");
            //         var FR= new FileReader();
                    
            //         FR.addEventListener("load", function(e) {
            //           base64Data = e.target.result;
            //           //return(base64Data);
            //           console.log("calculated");
            //           //console.log(base64Data);
            //           sendajax()
                      
            //         }); 
                    
            //         FR.readAsDataURL( $files[0] );
            //         B = $files[0];

            //         var A = new FormData();
            //         A.append("image", B);
            //       //}
            //     }//base 64 cnvertation function
            //     if(base64Data == null){
            //       console.log("null");
            //     }
            //     function sendajax(){
            //       console.log(base64Data.data);
            //       $.ajax({
            //         url: "https://api.imgur.com/3/upload",
            //         type: "POST",
            //         processData: false,
            //         data: {image: base64Data.data},
            //         error: function(response){
            //           console.log("Error In Uploading:");
            //           console.log(response);

            //         },
            //         beforeSend: function (xhr) {
            //           xhr.setRequestHeader("Authorization", "Client-ID " + clientId);
            //         },
            //         success: function(response) {
            //           // Image URL available at response.data.link
            //           console.log(response.data.link);
            //         }
            //       });//ajax end  
            //     }
            //     findBase64();
            //     //findBase64().done(sendajax());// calling both function one after other

            //   }//when file has grater than 0 kb length
            // });//imgur uploading..Start
          });



          /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;

          for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var dropdownContent = this.nextElementSibling;
              if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
              } else {
                dropdownContent.style.display = "block";
              }
            });
          }
        </script>
    </body>
</html>

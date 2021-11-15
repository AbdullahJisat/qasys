<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            .w3-sidebar a {
                font-family: "Roboto", sans-serif
            }

            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .w3-wide {
                font-family: "Montserrat", sans-serif;
            }
        </style>
    </head>
    <body class="antialiased w3-content" style="max-width:1200px">
        <!-- Sidebar/menu -->
            <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
              <div class="w3-container w3-display-container w3-padding-16">
                <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
                <h3 class="w3-wide"><b>IIUC STUDY COMPANION</b></h3>
              </div>
              <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
                <a href="{{ url('/') }}" class="w3-bar-item w3-button">Home</a>
                <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                  Courses <i class="fa fa-caret-down"></i>
                </a>
                <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                  @foreach ($courses as $course)
                    <a href="{{ url('/ques-by-course',$course->id) }}" class="w3-bar-item w3-button">{{ $course->name }}</a>
                  @endforeach
                </div>
                <a href="#" class="w3-bar-item w3-button">Teachers</a>

              </div>
              <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
                {{-- <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding"
                onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
                <a href="#footer" class="w3-bar-item w3-button w3-padding">Subscribe</a> --}}

                {{-- @if (Route::has('login'))
                        @auth
                            @if (Route::has('admin'))
                                <a href="{{ url('/admin') }}" class="w3-bar-item w3-button w3-padding">Home</a>
                            @elseif (Route::has('teacher'))
                                <a href="{{ url('/teacher') }}" class="w3-bar-item w3-button w3-padding">Home</a>
                            @elseif (Route::has('student'))
                                <a href="{{ url('/student') }}" class="w3-bar-item w3-button w3-padding">Home</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding">Register</a>
                            @endif
                        @endauth
                @endif --}}
            </nav>

            <!-- Top menu on small screens -->
            <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
              <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
              <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i
                  class="fa fa-bars"></i></a>
            </header>

            <!-- Overlay effect when opening sidebar on small screens -->
            <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
              id="myOverlay"></div>

            <!-- !PAGE CONTENT! -->
            <div class="w3-main" style="margin-left:250px">

              <!-- Push down content on small screens -->
              <div class="w3-hide-large" style="margin-top:83px"></div>

              <!-- Top header -->
              <header class="w3-container w3-xlarge">
                <p class="w3-left">IIUC Study Companion</p>
                <p class="w3-right">
                  @if (Route::has('login'))
                        @auth
                            @if (Route::has('admin'))
                                <a href="{{ url('/admin') }}" class="w3-bar-item w3-button w3-padding" style="font-size: medium;">Home</a>
                            @elseif (Route::has('teacher'))
                                <a href="{{ url('/teacher') }}" class="w3-bar-item w3-button w3-padding" style="font-size: medium;">Home</a>
                            @elseif (Route::has('student'))
                                <a href="{{ url('/student') }}" class="w3-bar-item w3-button w3-padding" style="font-size: medium;">Home</a>
                            @else
                                <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding" style="font-size: medium;">Home</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding" style="font-size: medium;">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding" style="font-size: medium;">Register</a>
                            @endif
                        @endauth
                @endif
                </p>
              </header>


              <div class="w3-container w3-text-black  w3-large" id="jeans">
                <p>Teachers</p>
              </div>
            @foreach ($teachers as $teacher)
            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <div class="w3-display-container">
                        <img src="{{ asset('teacher.png') }}" alt="" width="100%" height="200px">
                    </div>
                    <p>{{ $teacher->name }}<br><b>Assistant Professor</b></p>
                </div>
                </div>
            @endforeach


              <div class="w3-container w3-text-black  w3-large" id="jeans">
                <p>Videos</p>
              </div>

              <!-- Product grid -->
              <div class="w3-row w3-grayscale">
                <div class="w3-col 6 s6">
                  <div class="w3-container">
                    <video style="width:100%; height: 200px;" controls loop muted autoplay>
                      <source src="C:\Users\hp\Desktop\m.mkv" type="video/mp4">
                    </video>
                  </div>
                </div>

                <div class="w3-col 6 s6">
                  <div class="w3-container">
                      <video style="width:100%; height: 200px;" controls loop muted autoplay>
                        <source src="C:\Users\hp\Desktop\m.mkv" type="video/mp4">
                      </video>
                  </div>
                </div>
              </div>

              <!-- Subscribe section -->
              <div class="w3-container w3-black w3-padding-32" style="margin-top: 30px">
                <h1>Subscribe</h1>
                <p>To get special offers and VIP treatment:</p>
                <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
                <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
              </div>

              <!-- Footer -->
              <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
                <div class="w3-row-padding">
                  <div class="w3-col s4">
                    <h4>Contact</h4>
                    <p>Questions? Go ahead.</p>
                    <form action="/action_page.php" target="_blank">
                      <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
                      <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
                      <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
                      <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
                      <button type="submit" class="w3-button w3-block w3-black">Send</button>
                    </form>
                  </div>

                  <div class="w3-col s4">
                    <h4>About</h4>
                    <p><a href="#">About us</a></p>
                    <p><a href="#">We're hiring</a></p>
                    <p><a href="#">Support</a></p>
                    <p><a href="#">Find store</a></p>
                    <p><a href="#">Shipment</a></p>
                    <p><a href="#">Payment</a></p>
                    <p><a href="#">Gift card</a></p>
                    <p><a href="#">Return</a></p>
                    <p><a href="#">Help</a></p>
                  </div>

                  <div class="w3-col s4 w3-justify">
                    <h4>Store</h4>
                    <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
                    <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
                    <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
                    <h4>We accept</h4>
                    <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
                    <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
                    <br>
                    <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
                    <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
                    <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
                    <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
                    <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
                  </div>
                </div>
              </footer>

              <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp"
                  title="W3.CSS" target="_blank" class="w3-hover-opacity">Arif</a></div>

              <!-- End page content -->
            </div>

            <script>
              // Accordion
              function myAccFunc() {
                var x = document.getElementById("demoAcc");
                if (x.className.indexOf("w3-show") == -1) {
                  x.className += " w3-show";
                } else {
                  x.className = x.className.replace(" w3-show", "");
                }
              }

              // Click on the "Jeans" link on page load to open the accordion for demo purposes
              document.getElementById("myBtn").click();


              // Open and close sidebar
              function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
              }

              function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
              }
            </script>
    </body>
</html>


@extends('main.main-master')
@section('content')

@endsection

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style type="text/css">
      body {font-family: "Lato", sans-serif;}
      /* Style the links inside the sidenav */
      #mySidenav a {
        position: absolute; /* Position them relative to the browser window */
        left: -280px; /* Position them outside of the screen */
        transition: 0.3s; /* Add transition on hover */
        padding: 15px; /* 15px padding */
        width: 300px; /* Set a specific width */
        text-decoration: none; /* Remove underline */
        font-size: 20px; /* Increase font size */
        color: white; /* White text color */
        border-radius: 0 10px 10px 0; /* Rounded corners on the top right and bottom right side */
      }

      #mySidenav a:hover {
        left: 0; /* On mouse-over, make the elements appear as they should */
      }

      /* The about link: 20px from the top with a green background */
      #content-ifo {
        top: 70px;
        text-align: center;
        background-color: #4CAF50;
      }

      #content-skill {
        top: 130px;
        text-align: center;
        background-color: #2196F3; /* Blue */
      }

      #content-project {
        top: 190px;
        text-align: center;
        background-color: #f44336; /* Red */
      }

      #content-contact {
        top: 250px;
        text-align: center;
        background-color: #555 /* Light Black */
      }
/*//////////////////////contentbox//////////////////*/
      div.contentbox {
        background: #FFF;
        height: 625px;
        margin: 20px;
        font-size: 28px;
        text-align: center;
        border: #CCC 1px dashed;
      }
/*//////////////////////button on top//////////////////*/
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 40px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: black;
        color: white;
        cursor: pointer;
        padding: 30px;
        border-radius: 25px;
      }

      #myBtn:hover {
        background-color: #555;
      }
/*//////////////////////3D card//////////////////*/
      .flip3D{ width:280px; height:250px; margin:20px; margin-top: 100px; float:left; }
      .flip3D > .front{
	       position:absolute;
	       -webkit-transform: perspective( 600px ) rotateY( 0deg );
	       transform: perspective( 600px ) rotateY( 0deg );
	       background:#FC0; width:280px; height:250px; border-radius: 7px;
	       -webkit-backface-visibility: hidden;
	       backface-visibility: hidden;
	       transition: -webkit-transform .5s linear 0s;
	       transition: transform .5s linear 0s;
              }
      .flip3D > .back{
	        position:absolute;
	        -webkit-transform: perspective( 600px ) rotateY( 180deg );
	        transform: perspective( 600px ) rotateY( 180deg );
	        background: #80BFFF; width:280px; height:250px; border-radius: 7px;
	        -webkit-backface-visibility: hidden;
	        backface-visibility: hidden;
	        transition: -webkit-transform .5s linear 0s;
	        transition: transform .5s linear 0s;
        }
      .flip3D:hover > .front{
	       -webkit-transform: perspective( 600px ) rotateY( -180deg );
	        transform: perspective( 600px ) rotateY( -180deg );
        }
      .flip3D:hover > .back{
	       -webkit-transform: perspective( 600px ) rotateY( 0deg );
	        transform: perspective( 600px ) rotateY( 0deg );
        }
        /*//////////////////////3D card small//////////////////*/
              .flip3D2{ width:80px; height:80px; margin:10px; margin-top: 5px; float:left; }
              .flip3D2 > .front{
        	       position:absolute;
        	       -webkit-transform: perspective( 600px ) rotateY( 0deg );
        	       transform: perspective( 600px ) rotateY( 0deg );
        	       background:#FC0; width:80px; height:80px; border-radius: 7px;
        	       -webkit-backface-visibility: hidden;
        	       backface-visibility: hidden;
        	       transition: -webkit-transform .5s linear 0s;
        	       transition: transform .5s linear 0s;
                      }
              .flip3D2 > .back{
        	        position:absolute;
        	        -webkit-transform: perspective( 600px ) rotateY( 180deg );
        	        transform: perspective( 600px ) rotateY( 180deg );
        	        background: #80BFFF; width:80px; height:80px; border-radius: 7px;
        	        -webkit-backface-visibility: hidden;
        	        backface-visibility: hidden;
        	        transition: -webkit-transform .5s linear 0s;
        	        transition: transform .5s linear 0s;
                }
              .flip3D2:hover > .front{
        	       -webkit-transform: perspective( 600px ) rotateY( -180deg );
        	        transform: perspective( 600px ) rotateY( -180deg );
                }
              .flip3D2:hover > .back{
        	       -webkit-transform: perspective( 600px ) rotateY( 0deg );
        	        transform: perspective( 600px ) rotateY( 0deg );
                }
/*//////////////////////blog content info//////////////////*/
      .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 16px 18px;
        font-size: 17px;
        width: 50%;

      }

      .tablink:hover {
        background-color: #777;
      }

/* Style the tab content */
      .tabcontent {
        color: white;
        display: none;
        padding: 234px;
        text-align: center;
      }
      #PeronalDetail {background-color:red;}
      #OtherDetail {background-color:green;}

  /*//////////////////////icon social media//////////////////*/
      .fa {
        padding: 50px;
        font-size: 50px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin-left: 210px;
        margin-top: 245px;

        border-radius: 50%;
      }

      .fa:hover {
        opacity: 0.7;
      }

      .fa-facebook {
        background: #3B5998;
        color: white;
      }

      .fa-slack {
        background: #49c4a1;
        color: white;
      }

      .fa-github {
        background: #dd4b39;

        color: white;
      }
/*//////////////////////conten skill//////////////////*/
      .content-skill {
        background: #FFF;
        height: 90px;
        margin: 10px;
        font-size: 24px;
        text-align: left;
        border: #CCC 1px dashed;
      }
      </style>

      <script type="text/javascript">
          var scrollY = 0;
          var distance = 40;
          var speed = 24;

          function autoScrollTo(elements) {
            var currentY = window.pageYOffset;
            var targetY = document.getElementById(elements).offsetTop;
            var bodyHeight = document.body.offsetHeight;
            var yPos = currentY + window.innerHeight;
            var animator = setTimeout('autoScrollTo(\''+elements+'\')',speed);

            if (yPos > bodyHeight) {
                clearTimeout(animator);
            }else {
              if (currentY < targetY-distance) {
                    scrollY = currentY+distance;
                    window.scroll(0, scrollY)
              }else {
                  clearTimeout(animator);
              }
            }
          }

          window.onscroll = function() {scrollFunction()};

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
            } else {
              document.getElementById("myBtn").style.display = "none";
            }
          }

          function topFunction() {

            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }


      </script>

  </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div id="mySidenav" class="sidenav">
      <a href="#" id="content-ifo" onclick="return false;" onmousedown="autoScrollTo('content1');">Personal Information</a>
      <a href="#" id="content-skill" onclick="return false;" onmousedown="autoScrollTo('content2');">Programming Experiences</a>
      <a href="#" id="content-project" onclick="return false;" onmousedown="autoScrollTo('content3');">Projects</a>
      <a href="#" id="content-contact" onclick="return false;" onmousedown="autoScrollTo('content4');">Contact</a>
    </div>
<!-- ///////////////////////////////content info/////////////////////////////// -->
    <div id="content1" class="contentbox">

      <div id="PeronalDetail" class="tabcontent">
        <h3>Peronal Detail</h3>
      </div>

      <div id="OtherDetail" class="tabcontent">
        <h3>Other Detail</h3>
      </div>
      <button class="tablink" onclick="openInfo('PeronalDetail', this, 'red')" id="defaultOpen">Peronal Detail</button>
      <button class="tablink" onclick="openInfo('OtherDetail', this, 'green')">Other Detail</button>
      <script>
      function openInfo(info,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(info).style.display = "block";
          elmnt.style.backgroundColor = color;

      }

      document.getElementById("defaultOpen").click();
      </script>
    </div>
<!-- ///////////////////////////////content Programming Experiences/////////////////////////////// -->
    <div id="content2" class="contentbox">
      <h3>Programming Experiences</h3>
        <div id="content-skill-1" class="content-skill">Language
          <div class="flip3D2">
            <div class="back">Box 1 - Back</div>
            <div class="front">Box 1 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 2 - Back</div>
            <div class="front">Box 2 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 3 - Back</div>
            <div class="front">Box 3 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 4 - Back</div>
            <div class="front">Box 4 - Front</div>
          </div>
        </div>
        <div id="content-skill-2" class="content-skill">Interest in mobile application
          <div class="flip3D2">
            <div class="back">Box 1 - Back</div>
            <div class="front">Box 1 - Front</div>
          </div>
        </div>
        <div id="content-skill-3" class="content-skill">Interest in backend
          <div class="flip3D2">
            <div class="back">Box 1 - Back</div>
            <div class="front">Box 1 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 2 - Back</div>
            <div class="front">Box 2 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 3 - Back</div>
            <div class="front">Box 3 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 4 - Back</div>
            <div class="front">Box 4 - Front</div>
          </div>
        </div>
        <div id="content-skill-4" class="content-skill">Interest in frontend
          <div class="flip3D2">
            <div class="back">Box 1 - Back</div>
            <div class="front">Box 1 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 2 - Back</div>
            <div class="front">Box 2 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 3 - Back</div>
            <div class="front">Box 3 - Front</div>
          </div>
        </div>
        <div id="content-skill-5" class="content-skill">system admin
          <div class="flip3D2">
            <div class="back">Box 1 - Back</div>
            <div class="front">Box 1 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 2 - Back</div>
            <div class="front">Box 2 - Front</div>
          </div>
          <div class="flip3D2">
            <div class="back">Box 3 - Back</div>
            <div class="front">Box 3 - Front</div>
          </div>
        </div>
    </div>
<!-- ///////////////////////////////Projects/////////////////////////////// -->
    <div id="content3" class="contentbox">
      <h3>My Project</h3>
      <div class="flip3D">
        <div class="back">Box 1 - Back</div>
        <div class="front">Box 1 - Front</div>
      </div>
      <div class="flip3D">
        <div class="back">Box 2 - Back</div>
        <div class="front">Box 2 - Front</div>
      </div>
      <div class="flip3D">
        <div class="back">Box 3 - Back</div>
        <div class="front">Box 3 - Front</div>
      </div>
      <div class="flip3D">
        <div class="back">Box 4 - Back</div>
        <div class="front">Box 4 - Front</div>
      </div>
    </div>
<!-- ///////////////////////////////content Contact/////////////////////////////// -->
    <div id="content4" class="contentbox">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-slack"></a>
      <a href="#" class="fa fa-github"></a>
    </div>
  </body>
</html>

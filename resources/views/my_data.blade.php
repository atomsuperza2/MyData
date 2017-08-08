<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style type="text/css">
      body {
        font-family: "Lato", sans-serif;
        background-color: #FFF;
      }
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
        background-color: #FF8533;
      }

      #content-skill {
        top: 130px;
        text-align: center;
        background-color: #FF8C40; /* Blue */
      }

      #content-project {
        top: 190px;
        text-align: center;
        background-color: #FF944D; /* Red */
      }

      #content-contact {
        top: 250px;
        text-align: center;
        background-color: #FF9C59 /* Light Black */
      }
/*//////////////////////contentbox//////////////////*/
      div.contentbox {
        background: #FFF;
        color: white;
        height: 625px;
        margin: 45px;
        font-size: 28px;
        text-align: center;
        /*border: #CCC 1px dashed;*/ /* เส้นปะ */
        border-radius: 15px;

      }
      #content2 {
        background: #FF7D26;
        border-radius: 15px;
      }
      #content3 {
        background: #FF7D26;
        border-radius: 15px;
      }
      #content4 {
        height: 250px;
        background: #FF7D26;
        border-radius: 15px;
      }

/*//////////////////////button on top//////////////////*/
      #myBtn {
        display: none;
        position: fixed;
        bottom: 55px;
        right: 65px;
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
      .flip3D{ width:250px; height:250px; margin:30px; margin-top: 100px; float:left; }
      .flip3D > .front{
	       position:absolute;
	       -webkit-transform: perspective( 600px ) rotateY( 0deg );
	       transform: perspective( 600px ) rotateY( 0deg );
	       background:#FC0; width:250px; height:250px; border-radius: 7px;
	       -webkit-backface-visibility: hidden;
	       backface-visibility: hidden;
	       transition: -webkit-transform .5s linear 0s;
	       transition: transform .5s linear 0s;
              }
      .flip3D > .back{
	        position:absolute;
	        -webkit-transform: perspective( 600px ) rotateY( 180deg );
	        transform: perspective( 600px ) rotateY( 180deg );
	        background: #595959; width:250px; height:250px; border-radius: 7px;
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
              .flip3D2{ width:80px; height:80px; margin:10px; margin-top: 5px; margin-left: 20px; float:left; }
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
        	        background: #595959; width:80px; height:80px; border-radius: 7px;
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

      #defaultOpen {border-bottom-left-radius: 15px;}
      #OtherDetailb {border-bottom-right-radius: 15px;}
/* Style the tab content */
      .tabcontent {
        color: white;
        display: none;
        height: 550px;
        text-align: center;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
      }
      #OtherDetail {background-color:#FF7D26;}
      #PeronalDetail {background-color:#FF7D26;}

      div .content-pd1 {
        margin-top: 220px;
        margin-left: 220px;
        text-align: center;
        font-size: 40px;
        width: 200px;
        height: auto;
        border: #CCC 10px dashed;
      }
      div .content-pd2 {
        margin-top: 180px;
        margin-left: 100px;
        text-align: left;
        font-size: 20px;
        width: 500px;
        height: auto;
        /*border: #CCC 1px dashed;*/
      }
  /*//////////////////////icon social media//////////////////*/
      .fa {
        padding: 35px;
        font-size: 35px;
        width: 35px;
        text-align: center;
        text-decoration: none;
        margin-left: 30px;
        margin-top: 50px;
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
        background: #FF7D26;
        height: 90px;
        margin: 15px;
        font-size: 24px;
        /*text-align: right;*/
        /*border: #CCC 1px dashed;*/
        border-radius: 15px;
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
        <div class="row">
          <div class="col-md-5">
            <div class="content-pd1">
              Jirayu C.
            </div>
          </div>
          <div class="col-md-7">
            <div class="content-pd2">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Being the developer, programmer, and even software engineer at the same time seems to be overkill for a single person.
              Handling task that required multitasking of both creativity and logical to achieve a goal cannot be done practically.
              It required dedication, patient, and responsibility to sustain the quality and quantity to the very end.
            </div>
          </div>
        </div>
      </div>

      <div id="OtherDetail" class="tabcontent">
        <h3>Other Detail</h3>
      </div>
      <button class="tablink" onclick="openInfo('PeronalDetail', this, '#FF7D26')" id="defaultOpen">Peronal Detail</button>
      <button class="tablink" onclick="openInfo('OtherDetail', this, '#FF7D26')" id="OtherDetailb">Other Detail</button>
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
        <div id="content-skill-1" class="content-skill">
          <div class="row">
            <div class="col-md-4">
              <p style="text-align: right">Language</p>
            </div>
            <div class="col-md-8">
              <div class="flip3D2">
                <div class="back"> 85% </div>
                <div class="front"> <img src="/uploads/C.png" style="margin-top:5px; width:70px; height:70px;"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> 80% </div>
                <div class="front"> <img src="/uploads/php.png" style="margin-top:5px; width:70px; height:70px;"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> 60% </div>
                <div class="front"> <img src="/uploads/java.png" style="margin-top:5px; width:70px; height:70px;"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> 20% </div>
                <div class="front"> <img src="/uploads/js.png" style="margin-top:5px; width:70px; height:70px;"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
            </div>
          </div>
        </div>

        <div id="content-skill-2" class="content-skill">
          <div class="row">
            <div class="col-md-4">
              <p style="text-align: right">Interest in backend</p>

            </div>
            <div class="col-md-8">
              <div class="flip3D2">
                <div class="back"> 80% </div>
                <div class="front"><img src="/uploads/lara.png" style="margin-top:5px; width:70px; height:70px;"></div>
              </div>
              <div class="flip3D2">
                <div class="back"> 80%</div>
                <div class="front"><img src="/uploads/net1.png" style="margin-top:5px; width:70px; height:70px;"></div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
            </div>
          </div>
        </div>
        <div id="content-skill-3" class="content-skill">
          <div class="row">
            <div class="col-md-4">
              <p style="text-align: right">Interest in frontend</p>

            </div>
            <div class="col-md-8">
              <div class="flip3D2">
                <div class="back"></div>
                <div class="front"><img src="/uploads/jq.gif" style="margin-top:5px; width:70px; height:70px;"></div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"><img src="/uploads/b.png" style="margin-top:5px; width:70px; height:70px;"></div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"><img src="/uploads/sl.jpg" style="margin-top:5px; width:70px; height:70px;"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
            </div>
          </div>
        </div>
        <div id="content-skill-4" class="content-skill">
          <div class="row">
            <div class="col-md-4">
              <p style="text-align: right">system admin</p>
            </div>
            <div class="col-md-8">
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"><img src="/uploads/my.png" style="margin-top:5px; width:70px; height:70px;"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> <img src="/uploads/ms.png" style="margin-top:5px; width:70px; height:70px;"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"><img src="/uploads/psql.png" style="margin-top:5px; width:70px; height:70px;"> </div>
              </div>
              <div class="flip3D2">
                <div class="back">  </div>
                <div class="front">  </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
            </div>
          </div>
        </div>
        <div id="content-skill-5" class="content-skill">
          <div class="row">
            <div class="col-md-4">
                <p style="text-align: right">Interest in mobile application</p>
            </div>
            <div class="col-md-8">
              <div class="flip3D2">
                <div class="back"> 50% </div>
                <div class="front"> <img src="/uploads/as.png" style="margin-top:5px; width:70px; height:70px;">  </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
              <div class="flip3D2">
                <div class="back"> </div>
                <div class="front"> </div>
              </div>
            </div>
          </div>
        </div>
    </div>

<!-- ///////////////////////////////Projects/////////////////////////////// -->
    <div id="content3" class="contentbox">
      <h3>My Project</h3>
      <div class="flip3D">
        <div class="back"> </div>
        <div class="front"> </div>
      </div>
      <div class="flip3D">
        <div class="back"> </div>
        <div class="front"> </div>
      </div>
      <div class="flip3D">
        <div class="back"> </div>
        <div class="front"> </div>
      </div>
      <div class="flip3D">
        <div class="back"> </div>
        <div class="front"> </div>
      </div>
    </div>
<!-- ///////////////////////////////content Contact/////////////////////////////// -->
    <div id="content4" class="contentbox">
      <a href="https://www.facebook.com/jirayu.atommik" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-slack"></a>
      <a href="https://github.com/atomsuperza2" class="fa fa-github"></a>
    </div>
  </body>
</html>

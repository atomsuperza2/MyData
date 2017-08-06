<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Scroll Activated Animation</title>
        <style type="text/css">

            * {
                margin: 0;
                padding: 0;
            }
            body {
                font-family: Raleway, Arial;
            }

            .content {
                height: 600px;
                background-color: yellow;
                text-align: center;
            }

            .about {
                max-width: 600px;
                margin: 0 auto;
                padding: 100px 0;
                transform-style: preserve-3d;
                transform: perspective(800px);
            }
            .about h2 {
                text-transform: uppercase;
                font-size: 50px;
                font-weight: 400;
            }
            .about h2, .about p, .about img{
                transition: all 2.0s ease;
            }
            .about.hidden h2 {
                opacity: 0;
                transform: translate3d(0, 0, 400px) rotateY(-40deg);
            }
            .about.hidden p {
                opacity: 0;
                transform: translate3d(0, 0, 400px) rotateY(40deg);
            }
            .about.hidden img {
                opacity: 0;
                transform: translate3d(0, 0, 400px) rotateY(-40deg);
            }


           .myBtn {
             display: none;
             position: fixed;
             bottom: 20px;
             right: 30px;
             z-index: 99;
             border: none;
             outline: none;
             background-color: black;
             color: white;
             cursor: pointer;
             padding: 15px;
             border-radius: 10px;
           }

           .myBtn:hover {
             background-color: #555;
           }

        </style>


    </head>
    <body>
      <button class="myBtn" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


             <div class="content"><h1>wieuqwyoiueyi</h1></div>


        <div class="about hidden">
          <img src="/uploads/skill/skill.png" style="width:570px; height:370px;">
            <h2>This is heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum massa ac ex gravida, eu pharetra lorem hendrerit. Praesent sed massa eget massa vehicula volutpat. Donec augue ligula, pretium a congue sit amet, accumsan eget risus. Sed a imperdiet mauris. Proin ac purus at justo cursus ornare id eget elit. Cras a egestas massa. Fusce libero libero, pellentesque id vehicula ut, consectetur at lacus. Vestibulum mollis erat nibh. Fusce tincidunt lectus ut orci feugiat, sit amet scelerisque diam imperdiet. Donec et magna commodo, efficitur velit vel, aliquet enim. Duis nec mollis justo. Duis pulvinar vulputate leo at aliquam.</p>
        </div>


        <div class="content"><h1>qwrwqrqwrjqlwrqwrlkhqoir</h1></div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">

            (function() {

                var aboutEl = $('div.about'),
                    aboutElOffset = aboutEl.offset().top/2,
                    documentEl = $(document);

                documentEl.on('scroll', function() {
                    if ( documentEl.scrollTop() > aboutElOffset && aboutEl.hasClass('hidden') ) aboutEl.removeClass('hidden');
                });

            })();

            (function() {

            var windowH = $(window).height(),
                documElem = $(document),
                slideDownPage = $('.slide-down-page'),
                content = $('.content'),
                btns = $('.btn'),
                animSpeed = 100;

            slideDownPage.css({
                height: windowH + 'px',
                top: -windowH + 'px'
            });

            btns.on('click', function(e) {
                if ( $(this).hasClass('open') ) {
                    slideDownPage.animate({'top': 0}, animSpeed);
                    content.animate({'margin-top': windowH + 'px'}, animSpeed);
                }
                else {
                    slideDownPage.animate({'top': -windowH + 'px'}, animSpeed);
                    content.animate({'margin-top': 0}, animSpeed);
                }
                e.preventDefault();
            });

            documElem.on('scroll', function() {
                if ( $(this).scrollTop() > slideDownPage.height() && slideDownPage.css('top') === '0px' ) {
                    slideDownPage.css('top', -windowH + 'px');
                    content.css('margin-top', 0);
                    documElem.scrollTop(0);
                }

                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                  }
            });


        })();

            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }


        </script>

    </body>
</html>

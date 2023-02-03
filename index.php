<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="twitter:site" content="@metroui">
    <meta name="twitter:creator" content="@pimenov_sergey">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Metro 4 Components Library">
    <meta name="twitter:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins  .">
    <meta name="twitter:image" content="https://metroui.org.ua/images/m4-logo-social.png">

    <meta property="og:url" content="https://metroui.org.ua/index.html">
    <meta property="og:title" content="Metro 4 Components Library">
    <meta property="og:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins  .">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://metroui.org.ua/images/m4-logo-social.png">
    <meta property="og:image:secure_url" content="https://metroui.org.ua/images/m4-logo-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">

    <meta name="author" content="Sergey Pimenov">
    <meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
    <meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">

    <link href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="descktop.css" rel="stylesheet">

    <title>Desktop demo - Metro 4 :: Popular HTML, CSS and JS library</title>

    <style>
        .window-area {
            background: url("img28.jpg") center center no-repeat;
            background-size: cover;
        }

        #charm {
            height: calc(100vh - 40px);
            width: 396px;
            background-color: #1F4F5D;
        }

        /*--------------- [CONTEXT MENU 1] ---------------*/
        #menu {
            visibility: hidden;
            opacity: 0;
            position: fixed;
            background: #fff;
            color: #555;
            font-family: sans-serif;
            font-size: 11px;
            -webkit-transition: opacity .3s ease-in-out;
            -moz-transition: opacity .3s ease-in-out;
            -ms-transition: opacity .3s ease-in-out;
            -o-transition: opacity .5s ease-in-out;
            transition: opacity .3s ease-in-out;
            -webkit-box-shadow: 2px 2px 2px 0px rgba(143, 144, 145, 1);
            -moz-box-shadow: 2px 2px 2px 0px rgba(143, 144, 145, 1);
            box-shadow: 2px 2px 2px 0px rgba(143, 144, 145, 1);
            padding: 0px;
            border: 1px solid #C6C6C6;
        }

        #menu a {
            display: block;
            color: #555;
            text-decoration: none;
            padding: 6px 8px 6px 30px;
            width: 250px;
            position: relative;
        }

        #menu a img,
        #menu a i.fa {
            height: 20px;
            font-size: 17px;
            width: 20px;
            position: absolute;
            left: 5px;
            top: 2px;
        }

        #menu a span {
            color: #BCB1B3;
            float: right;
        }

        #menu a:hover {
            color: #fff;
            background: #3879D9;
        }

        #menu hr {
            border: 1px solid #EBEBEB;
            border-bottom: 0;
        }

        /*--------------- [CONTEXT MENU] ---------------*/
        #context-menu {
            position: fixed;
            z-index: 10000;
            background: #f1f3f4;
            transform: scale(0);
            /* transform-origin: top left; */
            transform-origin: bottom left;
            /* margin-top: 50px; */
            /* margin-left: 2.5px; */
        }

        #context-menu h1 {
            font-size: 1.5rem;
            margin: 0;
            margin-left: 5px;
            font-weight: 600;
        }

        /* #context-menu h1::before {
            content: " ";
            position: absolute;
            left: 0;
            bottom: 145px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 150px;
            margin-top: 5px;
        } */

        #context-menu.active {
            transform: scale(1);
            transition: transform 200ms ease-in-out;
        }

        #context-menu .item {
            padding: 8px 10px;
            padding-right: 20px;
            font-size: 15px;
            color: #000000;
        }

        .item-title {
            padding: 8px 10px;
            font-size: 15px;
            color: #000000;
        }

        #item-datasafety-lock-closed {
            display: none;
            transition: all 0.5s ease;
        }

        #item-datasafety-lock-open {
            transition: all 0.5s ease;
        }

        #context-menu-datenschutz:hover #item-datasafety-lock-closed {
            display: block;
        }

        #context-menu-datenschutz:hover #item-datasafety-lock-open {
            display: none;
        }

        #context-menu .item:hover {
            background: #cacdd1;
        }

        #context-menu .item a {
            color: #000000;
            text-decoration: none;
        }

        #context-menu .item i {
            display: inline-block;
            margin-right: 5px;
            margin-left: 10px;
        }

        #context-menu hr {
            margin: 2px;
            border-color: #555;
        }
    </style>
</head>

<body class="m4-cloak">
    <div data-role="charms" data-position="right" id="charm" class="p-4">
        <div class="h-100 d-flex flex-column">
            <div class="charm-top">
                <div class="text-center m-4">
                    <span>Google Chrome</span>
                </div>

                <div class="charm-notify">
                    <img class="icon" src="https://metroui.org.ua/images/me.jpg">
                    <div class="title">About Author</div>
                    <div class="content">The hornpipe fears with endurance, vandalize the galley until it waves.</div>
                    <div class="secondary">14:17 &bull; www.facebook.com</div>
                </div>
                <div class="charm-notify">
                    <img class="icon" src="https://metroui.org.ua/images/me.jpg">
                    <div class="title">About Author</div>
                    <div class="content">The hornpipe fears with endurance, vandalize the galley until it waves.</div>
                    <div class="secondary">14:17 &bull; www.facebook.com</div>
                </div>
                <div class="charm-notify">
                    <img class="icon" src="https://metroui.org.ua/images/me.jpg">
                    <div class="title">About Author</div>
                    <div class="content">The hornpipe fears with endurance, vandalize the galley until it waves.</div>
                    <div class="secondary">14:17 &bull; www.facebook.com</div>
                </div>

                <div class="text-center m-4">
                    <span>Information</span>
                </div>

                <div class="charm-notify">
                    <span class="icon mif-info"></span>
                    <div class="title">You have a news</div>
                    <div class="content">The hornpipe fears with endurance, vandalize the galley until it waves.</div>
                </div>

                <div class="clear mt-4 reduce-1">
                    <span class="place-left c-pointer">Collapse</span>
                    <span class="place-right c-pointer">Clear notifies</span>
                </div>

            </div>

            <div class="charm-bottom mt-auto">
                <div class="d-flex">
                    <div class="charm-tile">
                        <span class="icon mif-tablet-landscape"></span>
                        <span class="caption">Tablet mode</span>
                    </div>
                    <div class="charm-tile">
                        <span class="icon mif-wifi-full"></span>
                        <span class="caption">Network</span>
                    </div>
                    <div class="charm-tile">
                        <span class="icon mif-cog"></span>
                        <span class="caption">Preferences</span>
                    </div>
                    <div class="charm-tile active">
                        <span class="icon mif-rocket"></span>
                        <span class="caption">Fly mode</span>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="charm-tile active">
                        <span class="icon mif-target"></span>
                        <span class="caption">Position</span>
                    </div>
                    <div class="charm-tile">
                        <span class="icon mif-bluetooth"></span>
                        <span class="caption">Not connected</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop">
        <div class="window-area"></div>
        <div class="task-bar">
            <div class="task-bar-section">
                <button class="task-bar-item" id="start-menu-toggle" onClick="hideMenu()"><span class="mif-windows"></span></button>
                <div class="start-menu" data-role="dropdown" data-toggle-element="#start-menu-toggle">
                    <div class="start-menu-inner">
                        <div class="explorer">
                            <ul class="v-menu w-100 bg-brandColor2 fg-white">
                                <li><a onclick="createWindowYoutube()">Youtube window</a></li>
                                <li><a onclick="createWindow()">New window</a></li>
                                <li><a onclick="createWindowWithCustomButtons()">Custom buttons</a></li>
                                <li><a onclick="createWindowModal()">Modal window</a></li>
                                <li><a onclick="createWindowWithUrl(`http://192.168.101.214:1111`)">My website</a></li>
                                <li><a onclick="createWindowYouUrl()">My test</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="task-bar-section tasks"></div>
            <div class="task-bar-section system-tray ml-auto">
                <button class="task-bar-item" id="open-charm" onclick="openCharm()"><span
                        class="mif-comment"></span></button>
                <span style="line-height: 40px;" class="pr-4">
                    <span data-role="clock" class="w-auto fg-white reduce-1" data-show-date="false"></span>
                </span>
            </div>
        </div>
    </div>

    <!-- --------------- [CONTEXT MENU 1] --------------- -->
    <div id="menu">
        <a href="javascript:void(0)s">
            <img src="http://puu.sh/nr60s/42df867bf3.png" /> AdBlock Plus <span>Ctrl + ?!</span>
        </a>
        <a href="javascript:void(0)">
            <img src="http://puu.sh/nr5Z6/4360098fc1.png" /> SNTX <span>Ctrl + ?!</span>
        </a>
        <hr />
        <a href="javascript:void(0)" onclick="changeBackground()">
            <i class="fa fa-image"></i> Change Background Image
        </a>
        <a href="javascript:void(0)">
            <i class="fa fa-fort-awesome"></i> Fort Awesome <span>Ctrl + ?!</span>
        </a>
        <a href="javascript:void(0)">
            <i class="fa fa-flag"></i> Font Awesome <span>Ctrl + ?!</span>
        </a>
    </div>

    <!-- --------------- [CONTEXT MENU 2] --------------- -->
    <div id="context-menu">
        <!-- <div class="item-title" id="context-menu-title">
            <h1>Schnellwahl:</h1>
        </div>
        <div class="item" id="context-menu-home" onmouseleave="contextMenuHome_notActive()" onmouseenter="contextMenuHome_active()">
            <a href="/index.html"><i class="fa-solid fa-house"></i> <span class="button btn-min sys-button"></span>Home</a>
        </div>
        <div class="item" id="context-menu-contact" onmouseleave="contextMenuContact_notActive()" onmouseenter="contextMenuContact_active()">
            <a href="/kontakt.html"><i class="fa-solid fa-address-book"></i>Kontakt</a>
        </div>
        <div class="item" id="context-menu-link" onmouseleave="contextMenuLinks_notActive()" onmouseenter="contextMenuLinks_active()">
            <a href="/link.html"><i class="fa-solid fa-link"></i>Links</a>
        </div> -->
        <div id="context-menu-win-minimize" class="item">
            <a href="javascript:void(0)"><i class="fa fa-minus-square-o"></i>Minimize</a>
        </div>
        <div id="context-menu-win-maxmize" class="item">
            <a href="javascript:void(0)"><i class="fa fa-square-o"></i>Maxmize</a>
        </div>
        <div id="context-menu-win-close" class="item">
            <a href="javascript:void(0)"><i class="fa fa-close"></i>Close</a>
        </div>
    </div>

<!--    <script src="metro.min.js"></script>-->
    <script src="metro.js"></script> 
    <script src="desktop.js"></script>
    <script>
        changeBackground = () => {
            var background = $(".window-area").css("background");
            if (background.indexOf("img28") > -1) 
                $(".window-area").css("background", 'url("anime-background-images-1.jpg") center center no-repeat').css("background-size", "cover");
            else 
                $(".window-area").css("background", 'url("img28.jpg") center center no-repeat').css("background-size", "cover");
        }

        

        // function contextMenuHome_active() {
        //     document.getElementById("context-menu-home").innerHTML = '<a href="/index.html"><i class="fa-solid fa-house fa-beat" ></i>Home test</a>'
        // }

        // function contextMenuHome_notActive() {
        //     document.getElementById("context-menu-home").innerHTML = '<a href="/index.html"><i class="fa-solid fa-house" ></i>Home</a>'
        // }

        // function contextMenuContact_active() {
        //     document.getElementById("context-menu-contact").innerHTML = `<a onmouseout="contextMenuContact_notActive" onmouseover="contextMenuContact_active" href="/kontakt.html"><i class="fa-solid fa-address-book fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;" ></i>Kontakt</a>`
        // }

        // function contextMenuContact_notActive() {
        //     document.getElementById("context-menu-contact").innerHTML = `<a onmouseout="contextMenuContact_notActive" onmouseover="contextMenuContact_active" href="/kontakt.html"><i class="fa-solid fa-address-book"></i>Kontakt</a>`
        // }

        // function contextMenuLinks_active() {
        //     document.getElementById("context-menu-link").innerHTML = '<a href="/link.html"><i class="fa-solid fa-link fa-flip"></i>Links</a>'
        // }

        // function contextMenuLinks_notActive() {
        //     document.getElementById("context-menu-link").innerHTML = '<a href="/link.html"><i class="fa-solid fa-link"></i>Links</a>'
        // }
    </script>

    <script>
        isWindow = (className) => {
            if (className.includes("mif")) return true;
            if (className.includes("button")) return true;

            var winClassNames = [
                "window-area",
                "task-bar",
                "clock-divider",
                "task-bar-item",
                "task-bar-item started",
                "title",
                "clock-minute",
                "icon",
                "pr-4"
            ];

            return winClassNames.includes(className);
        }

        // document.addEventListener('contextmenu', event => event.preventDefault());
        document.addEventListener("contextmenu", function (e) {
            // console.log("e.target.nodeName===>", e.target, e.target.className, e.pageX, e.pageY);
            if (isWindow(e.target.className)) e.preventDefault();
            // if (e.target.nodeName === "IMG") e.preventDefault();
            // e.preventDefault();
            // const x = event.pageX;
            // const y = event.pageY;
            // openCustomContext(x, y)
        // }, false);
        });

        var winObj = $(".window-area");
        var i = document.getElementById("menu").style;

        winObj.on("contextmenu", function (e) {
            var posX = e.clientX;
            var posY = e.clientY;
            menu(posX, posY);
            e.preventDefault();
        });

        window.addEventListener("click", function () {
            $("#context-menu").removeClass("active");
            hideMenu();
        });

        $(document).on("click", function (e) {
            $("#context-menu").removeClass("active");
            hideMenu();
        });

        $('body').on('click', '*', function (e) {
            $("#context-menu").removeClass("active");
            hideMenu();
        });

        // if (document.addEventListener) {
        //     document.addEventListener('contextmenu', function (e) {
        //         var posX = e.clientX;
        //         var posY = e.clientY;
        //         menu(posX, posY);
        //         e.preventDefault();
        //     }, false);
        //     document.addEventListener('click', function (e) {
        //         i.opacity = "0";
        //         setTimeout(function () {
        //             i.visibility = "hidden";
        //         }, 300);
        //     }, false);
        // } else {
        //     document.attachEvent('oncontextmenu', function (e) {
        //         var posX = e.clientX;
        //         var posY = e.clientY;
        //         menu(posX, posY);
        //         e.preventDefault();
        //     });
        //     document.attachEvent('onclick', function (e) {
        //         i.opacity = "0";
        //         setTimeout(function () {
        //             i.visibility = "hidden";
        //         }, 300);
        //     });
        // }

        function menu(x, y) {
            i.top = y + "px";
            i.left = x + "px";
            i.visibility = "visible";
            i.opacity = "1";
        }

        hideMenu = () => {
            i.opacity = "0";
            setTimeout(function () {
                i.visibility = "hidden";
            }, 300);
        }
    </script>
</body>

</html>
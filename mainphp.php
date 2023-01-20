<!--       _
       .__(.)< (MEOW)
        \___)   
 ~~~~~~~~~~~~~~~~~~-->

<style>
    .container{
        width: 500px;
        margin:0 auto;
    }
    body {
        font-family: 'Minecraft';
        font-weight:500;
        font-style: normal;
        transition: all 1s;
    }
    #color-picker {
        width: 40px;
        height: 40px;
    }
    .box {
        width: 100px;
        height: 100px;
        background-color: rgb(0, 0, 0);
        position: absolute;
        top: 50%;
        left: 50%;
        border: dotted;
        border-radius: 5px;
    }
    .box:hover {
        border: solid;
    }
</style>

<html>
    <head>
        <script src="https://kit.fontawesome.com/26a2eb1317.js" crossorigin="anonymous"></script>
        <title>test page</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="css/stylesheet.css" rel="stylesheet"/>
        <link href="css/css_animations/animations.css" rel="stylesheet"/>
        <link href="css/btn1.css" rel="stylesheet"/>
        <link href="css/menubtngroup.css" rel="stylesheet"/>
        <link href="css/slider.css" rel="stylesheet"/>
        <link href="css/print_button.css" rel="stylesheet"/>
        <link href="css/rightclick.css" rel="stylesheet"/>
        <script type="text/javascript" src="js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>
    <body style="background:#8bd4c3;" onload="getLocation()">
        <nav>
            <div class="btn-group" class="container">
                <button onclick = "to_p1()">page 1</button>
                <button onclick = "to_p2()">page 2</button>
                <button onclick = "to_p3()">page 3</button>
                <button onclick = "to_p4()">page 4</button>
                <button onclick = "to_p5()">page 5</button>
                <button onclick = "to_p6()">page 6</button>
            </div>
            <div class="color-picker-group">
                <input type="color" id="color-picker" onchange="changeBackgroundColor()">
                <button onclick="resetBackgroundColor()" id="reset">Reset</button>
            </div>
        </nav>
        
            
        <div id = "div1" style="display:block">
            <article>
                <h1 class="container">page 1</h1>
                <p class="container">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptates sit, beatae vel est facilis, optio dolor molestias nam repellendus praesentium reprehenderit deserunt molestiae, eveniet ratione alias nesciunt ut eius.</p>
                <div>
                    <?php
                    include("database.php");
                    ?>
                </div>
            </article>
            <div id="footer">
                <div class="btn1" onclick="window.location.href='https://minecraft.net';">
                    <a><span>minecraft.net</span></a>
                </div>
            </div>
        </div>
            
        <div id = "div2" style="display:none">
            <nav>
                <div class="info">
                    <button class="print-button"><span class="print-icon"></span></button>
                </div>
            </nav>
            <article>
                <h1 class="container">scroll down for looong doge</h1>
                <div class="infinite">
                    <pre id="doge">
          ▄▄              ▄    
          ▌▒█           ▄▀▒▌   
          ▌▒▒█        ▄▀▒▒▒▐   
         ▐▄█▒▒▀▀▀▀▄▄▄▀▒▒▒▒▒▐   
       ▄▄▀▒▒▒▒▒▒▒▒▒▒▒█▒▒▄█▒▐   
     ▄▀▒▒▒░░░▒▒▒░░░▒▒▒▀██▀▒▌   
    ▐▒▒▒▄▄▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▄▒▌  
    ▌░░▌█▀▒▒▒▒▒▄▀█▄▒▒▒▒▒▒▒█▒▐  
   ▐░░░▒▒▒▒▒▒▒▒▌██▀▒▒░░░▒▒▒▀▄▌ 
   ▌░▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░▒▒▒▒▌ 
  ▌▒▒▒▄██▄▒▒▒▒▒▒▒▒░░░░░░░░▒▒▒▐ 
  ▐▒▒▐▄█▄█▌▒▒▒▒▒▒▒▒▒▒░▒░▒░▒▒▒▒▌
  ▐▒▒▐▀▐▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒░▒▒▐ 
   ▌▒▒▀▄▄▄▄▄▄▀▒▒▒▒▒▒▒░▒░▒░▒▒▒▌ 
   ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▒▐  
    ▀▄▒▒▒▒▒▒░▒▒▒▒▒▒▒▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌  
    ▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌  
    ▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒░▒▒▒▒▒▒▒▒▒▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌  
    ▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌
    ▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌</pre>
<pre class="neck" id="doge">
    ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌  
    ▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌  
    ▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒░▒▒▒▒▒▒▒▒▒▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌  
    ▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌
    ▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▄▒▒▒▒▌  
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░▒░▒▒▄▒▐  
    ▀▄▒▒▒▒▒▒▒▒░▒▒▒▒▒░▒▒▄▒▒▒▒▌</pre>
                </div>
                <script type="text/javascript" src="js/page2.js"></script>
            </article>
        </div>

        <div id = "div3" style="display:none;">
            <article>
                <h1 class="container">page 3</h1>
                <p class="container">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptates sit, beatae vel est facilis, optio dolor molestias nam repellendus praesentium reprehenderit deserunt molestiae, eveniet ratione alias nesciunt ut eius.</p>
                    
            </article>
            <aside style= "float: right;">
                <img src="favicon.ico" draggable="false" id="rotate">
            </aside>
            
        </div>
        
        <div id = "div4" style="display:none">
            <h1 class="container">this is page 4</h1>
            <dl>
                <dt>Definition list</dt>
                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.</dd>
                <dt>Lorem ipsum dolor sit amet</dt>
                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.</dd>
            </dl>
            <h1></h1>
            <h1></h1>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Vestibulum auctor dapibus neque.</li>
            </ul>
            <h1></h1>
            <h1></h1>
            <ul>
                <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
            </ul>
            <h1></h1>
            <h1></h1>
            <ol>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Vestibulum auctor dapibus neque.</li>
            </ol>
            <h1></h1>
            <h1></h1>
            <nav>
                <ul>
                    <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
                    <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
                    <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
                    <li><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Praesent</a></li>
                    <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
                </ul>
            </nav>
            <h1></h1>
            <h1></h1>
            <form action="#" method="post">
                <div>
                    <label for="name">Text Input:</label>
                    <input type="text"/>
                    <input type="color"/>
                    <input type="date"/>
                    <input type="datetime"/>
                    <input type="datetime-local"/>
                    <input type="email"/>
                    <input type="email"/>
                    <input type="number"/>
                    <input type="image"/>
                    <input type="password"/>
                    <input type="range"/>
                    <input type="tel"/>
                    <input type="time"/>
                    <input type="url"/>
                </div>

                <div>
                    <h4>Radio Button Choice</h4>

                    <label for="radio-choice-1">Choice 1</label>
                    <input type="radio" name="radio-choice-1" id="radio-choice-1" tabindex="2" value="choice-1" />

                <label for="radio-choice-2">Choice 2</label>
                    <input type="radio" name="radio-choice-2" id="radio-choice-2" tabindex="3" value="choice-2" />
                </div>

                <div>
                    <label for="select-choice">Select Dropdown Choice:</label>
                    <select name="select-choice" id="select-choice">
                    <option value="Choice 1">Choice 1</option>
                    <option value="Choice 2">Choice 2</option>
                    <option value="Choice 3">Choice 3</option>
                    </select>
                </div>

                <div>
                    <label for="textarea">Textarea:</label>
                    <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
                </div>

                <div>
                    <label for="checkbox">Checkbox:</label>
                    <input type="checkbox" name="checkbox" id="checkbox" />
                </div>

            <div>
                <input type="submit" value="Submit" />
            </div>
            </form>
            <h1></h1>
            <h1></h1>
            <div>
            <h1>HTML Ipsum Presents</h1>

                <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

                <h2>Header Level 2</h2>

                <ol>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                </ol>

                <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

                <h3>Header Level 3</h3>

                <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                </ul>

                <pre><code>
                #header h1 a {
                display: block;
                width: 300px;
                height: 80px;
                }
                </code></pre>
            </div>
            <blink>blinking test ???</blink>
            <h1></h1>
            <h1></h1>
            <p><b>This text is bold</b></p>
            <p><i>This text is italic</i></p>
            <p>This is<sub> subscript</sub> and <sup>superscript</sup></p>
            <p>Do not forget to buy <mark>milk</mark> today.</p>
            <p>My favorite color is <del>blue</del> <ins>red</ins>.</p>
            <kbd>This is sample text inside kbd markup</kbd>

            <div id="footer">
                <div class="btn1" onclick="window.location.href='https://github.com/umit-09/rephtml.github.io';">
                    <a><span>project page</span></a>
                </div>
            </div>
        </div>

        <div id = "div5" style="display:none">
            <article>
                <p class="container">this page is under developmet</p>
                <p></p>
                <div class="container" id="coords">
                    <p class="container" id="info1"></p>
                    <p></p>
                    <p class="container" id="info2"></p>
                    <p></p>
                    <p>Your Coordinates Are:</p><p id="locationid"></p>
                </div>
    
                
    
                <script>
                    var x = document.getElementById("locationid");
                    function getLocation() {
                        var x = document.getElementById("locationid");
                        //Check if Geolocation is supported 
                        if (navigator.geolocation) {
                        //the watchposition() method show the position of the user and update it while is moving
                            navigator.geolocation.watchPosition(showPosition);
                        } else { 
                        //If not, display a message to the user
                            x.innerHTML = "Geolocation is not supported by this browser.";
                        }
                    }
                    //The showPosition() function outputs the Latitude and Longitude
                    function showPosition(position) {
                        x.innerHTML = position.coords.latitude + "N    " + position.coords.longitude + "E";
                    }
                </script>
                <script>
                    let userAgent = navigator.userAgent;
                    var browserName = (function (agent) {        switch (true) {
                            case agent.indexOf("edge") > -1: return "MS Edge";
                            case agent.indexOf("edg/") > -1: return "Edge (chromium based)";
                            case agent.indexOf("opr") > -1 && !!window.opr: return "Opera";
                            case agent.indexOf("chrome") > -1 && !!window.chrome: return "Chrome";
                            case agent.indexOf("trident") > -1: return "MS IE";
                            case agent.indexOf("firefox") > -1: return "Mozilla Firefox";
                            case agent.indexOf("safari") > -1: return "Safari";
                            default: return "other";
                        }
                    })(window.navigator.userAgent.toLowerCase());
                    document.getElementById("info1").innerText="You are using "+ browserName +" browser"; 
                    $.getJSON('https://api.db-ip.com/v2/free/self', function(data) {
                        document.getElementById("info2").innerText=JSON.stringify(data, null, 2);
                    });
                </script>
            </article>
            <div id="footer">
                <div class="btn1" onclick="window.location.href='html/rr.html';">
                    <a><span>main page</span></a>
                </div>
                <div class="btn1" onclick="window.location.href='html/leson.html';">
                    <a><span>lesson</span></a>
                </div>
                <div class="btn1" onclick="window.location.href='html/video.html';">
                    <a><span>video</span></a>
                </div>
            </div>
        </div>

        <div id = "div6" style="display:none">
            <div class="box" id="box1"></div>
            <div class="box" id="box2"></div>
            <div class="box" id="box3"></div>
            <div class="box" id="box4"></div>
            <div class="box" id="box5"></div>
            <script type="text/javascript" src="js/movingboxes.js"></script>
        </div>

        <div id="context-menu">
            <div class="item" onclick = "to_p1()">Page 1</div>
            <div class="item" onclick = "to_p2()">Page 2</div>
            <div class="item" onclick = "to_p3()">Page 3</div>
            <div class="item" onclick = "to_p4()">Page 4</div>
            <div class="item" onclick = "to_p5()">Page 5</div>
            <div class="item" onclick = "to_p6()">Page 6</div>
            <div class="item" onclick="window.location.href='html/close.html';">CLOSE</div>
            <script type="text/javascript" src="js/rightclick.js"></script>
        </div>
        </div>
    </body>
</html>

<!DOCTYPE html>

<style>
    .container{
        width: 500px; /*ortalanacak div genişliği*/
        margin:0 auto; /*alt-üst(0) sağ-sol(auto) boşluk olacak*/
    }
    body {
        font-family: 'Minecraft';
        font-weight:500;
        font-style: normal;
    }
</style>

<html lang="tr">
    <head>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://kit.fontawesome.com/26a2eb1317.js" crossorigin="anonymous"></script>
        <title>minecraft</title>
        <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
        <link href="/css/stylesheet.css" rel="stylesheet"/>
        <link href="/css/btn1.css" rel="stylesheet"/>
        <link href="/css/body.css" rel="stylesheet"/>
        <script type="text/javascript" src="/js/script.js"></script>
        
    </head>
    <body style="background:rgb(139, 212, 195);" >
        <nav>
            <button type="submit" onclick = "p2_to_p1()">page 1</button>
            <button type="submit" onclick = "p1_to_p2()">page 2</button>
        </nav>
        
            
            <div id="div1" style="display:block">
                <article>
                    <h1 class="container">Minecraft</h1>
                    <p class="container">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptates sit, beatae vel est facilis, optio dolor molestias nam repellendus praesentium reprehenderit deserunt molestiae, eveniet ratione alias nesciunt ut eius.</p>
                </article>
                <footer>
                    <div class="btn1" onclick="window.location.href='https://minecraft.net';" href="">
                        <a><span>minecraft.net</span></a>
                    </div>
                </footer>
            </div>
                
            <div id = "div2" style="display:none">
                <h1 class="container">test</h1>
            </div>
        
        
    </body>
</html>
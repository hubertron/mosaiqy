<?php require "includes/header.php" ?>

</head>

<body>

    <header>
        <hgroup>
            <h1>Mosaiqy</h1>
            <h2>A nice plugin for <em>jQuery 1.6+</em> &amp; <em>HTML5</em></h2>
            <h3>(<em>8Kb</em> minified - <em>3.6Kb</em> minified + gzip)</h3>
            <!-- yes I am an hgroup supporter -->
        </hgroup>
            
        <p class="github-ribbon">
           <a href="https://github.com/fcalderan/mosaiqy" target="new">Hosted on Github</a>
        </p>
    </header>
    
    <div class="loading mosaiqy">
        <ul>
            <li>
                <div>
                    <figure><a href="images/zoom/1.jpg"><img src="images/thumb/1.jpg">
                        <figcaption>Rifugio &laquo;Citt&agrave; di Fiume&raquo;</figcaption></a>
                    </figure>
                </div>
            </li>
            <li>
                <div>
                <figure><a href="images/zoom/2.jpg"><img src="images/thumb/2.jpg">
                    <figcaption>Veduta dal rifugio &laquo;Citt&agrave; di Fiume&raquo;</figcaption></a>           
                </figure>
                </div>
            </li>
            <li>
                <div>
                <figure><a href="images/zoom/3.jpg"><img src="images/thumb/3.jpg">
                    <figcaption>Veduta dal rifugio &laquo;Pradidali&raquo;</figcaption></a>           
                </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/4.jpg"><img src="images/thumb/4.jpg">
                        <figcaption>Rifugio &laquo;Pradidali&raquo;</figcaption></a>           
                    </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/5.jpg"><img src="images/thumb/5.jpg">
                        <figcaption>Due simpatici escursionisti</figcaption></a>            
                    </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/6.jpg"><img src="images/thumb/6.jpg">
                        <figcaption>Veduta della Marmolada lungo il sentiero per il Rifugio &laquo;Venezia&raquo;</figcaption></a>            
                    </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/7.jpg"><img src="images/thumb/7.jpg">
                        <figcaption>Arrivando al rifugio &laquo;Pradidali&raquo;</figcaption></a>           
                    </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/8.jpg"><img src="images/thumb/8.jpg" longdesc="test.html">
                        <figcaption>Veduta dal rifugio &laquo;Pradidali&raquo;</figcaption></a>            
                    </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/9.jpg"><img src="images/thumb/9.jpg">
                        <figcaption>Rifugio &laquo;Locatelli&raquo;</figcaption></a>            
                    </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/10.jpg"><img src="images/thumb/10.jpg">
                        <figcaption>Veduta dal rifugio &laquo;Citt&agrave; di Fiume&raquo;</figcaption></a>           
                    </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/11.jpg"><img src="images/thumb/11.jpg"></a>
                        <figcaption>Due mucche al rifugio &laquo;Citt&agrave; di Fiume&raquo;</figcaption>            
                    </figure>
                </div>
            </li>
            <li>
                <div>
                    <figure><a href="images/zoom/12.jpg"><img src="images/thumb/12.jpg">
                        <figcaption>Due mucche al rifugio &laquo;Citt&agrave; di Fiume&raquo;</figcaption></a>            
                    </figure>
                </div>
            </li>
        </ul>
     </div>
    
    <?php
        $gs = $_POST['gridsize'];
    ?>
    <section>
        <h2>Choose your favourite grid size</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
            <select name="gridsize" onchange="this.parentNode.submit()">
                <option value="2x6" <?php if ($gs == "2x6") echo "selected"; ?> >2x6</option>
                <option value="3x4" <?php if ($gs == "3x4" || $gs == '') echo "selected"; ?> >3x4</option>
                <option value="4x3" <?php if ($gs == "4x3") echo "selected"; ?> >4x3</option>
                <option value="6x2" <?php if ($gs == "6x2") echo "selected"; ?> >6x2</option>
            </select>
        </form>
    </section>
    
    <section>
        <h2>Thanks to</h2>
        <p>So many people here, just give me a moment...</p>
    </section>
    
    <section>
        <h2>Special thanks to</h2>
        <p>
            A great thank goes to "Gargano delizie" distillery who gave me the opportunity to easily reach
            the famous <a href="http://xkcd.com/323/"
            title="A moderate alcohol quantity is definitely a javascript good part. Crockford should tell about it"><q>Ballmer
            peak</q></a> with theirs delicious melon's cream at 17%.
        </p>
    </section>
    <?php
        $rows = 3;
        $cols = 4;
        
        if (isset($_POST['gridsize'])) {
            list($rows, $cols) = explode("x", $_POST['gridsize']);
        }
    ?>



    <!-- jquery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"> </script>
    <script src="lib/mosaiqy1.0.0.js" id="mosaiqy_tpl">
        <div>
            <figure><a href="images/zoom/${img}"><img src="images/thumb/${img}">
              <figcaption>${desc}</figcaption></a>
            </figure>
        </div>
    </script>
    
    <script>
    $(document).ready(function() {
        $('.mosaiqy').mosaiqy({
            template        : '#mosaiqy_tpl',
            rows            : <?php echo $rows ?>,
            cols            : <?php echo $cols ?>,
            avoidDuplicates : true,
            animationDelay  : 1500,
            loop            : true,
            indexData       : 12,
<?php
                require "includes/json.php";
?>
            
            
        });
        
    });
    </script>



     
</body>
</html>
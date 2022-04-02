<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/jbd3udn.css">

    <title>Daniel Winters | Developer Portfolio</title>
</head>
<body>
    
    <div class="environment">
        
        <div class="menu">
            <a href="#">File</a>
            <a href="#">Edit</a>
            <a href="#">Selection</a>
            <a href="#">View</a>
            <a href="#">Go</a>
            <a href="#">Run</a>
            <a href="#">Terminal</a>
            <a href="#">Help</a>
        </div>
        <div class="quickPanel">
            <div class="navigation">
                <li><a href="#"><img src="./img/explorer-icon.png"></img></a></li>
                <li><a href="#"><img src="./img/search-icon.png"></img></a></li>
                <li><a href="#"><img src="./img/source-control-icon.png"></img></a></li>
                <li><a href="#"><img src="./img/debug-icon.png"></img></a></li>
                <li><a href="#"><img src="./img/extensions-icon.png"></img></a></li>
                </div>
            <div class="user">
                <li><a href="#"><img src="./img/accounts-icon.png"></img></a></li>
                <li><a href="#"><img src="./img/settings-icon.png"></img></a></li>
            </div>
            
        </div>
        <div class="explorer">
            <div class="explorerTitle">EXPLORER
            <img class="moreIcon" src="./img/more-icon.png"></img>
            </div>
            <div class="accordion">
            <div class="explorerAccordion">

                <button class="explorerButton active"><span class="material-icons" id="accordionIcon">
                        navigate_next</span>PORTFOLIO-WEBSITE</button>
                <div class="explorerPanel">
                    <div class="explorerPortfolio">
                        <a onclick="btnclick('./files/index.html')">
                        <img src="./img/html-icon.png"></img>
                        <p>index.html </p>
                        </a>
                    </div>
                    <div class="explorerPortfolio">
                        <a onclick="btnclick('./files/portfolio.html')">
                        <img src="./img/html-icon.png"></img>
                        <p>portfolio.html </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bottomAccordion">
                
                <button class="explorerButton"><span class="material-icons" id="accordionIcon">
                    navigate_next</span>OUTLINE</button>
                <div class="explorerPanel">
                  <p></p>
                </div>
                
                <button class="explorerButton"><span class="material-icons" id="accordionIcon">
                    navigate_next</span>TIMELINE</button>
                <div class="explorerPanel">
                  <p></p>
                </div> 
            </div>
            </div>
        </div>
        <div class="file">
            <div class="fileTab">
                <img src="./img/html-icon.png"></img>
                <p>index.html</p>
                <img src="./img/close-icon.png"></img>
            </div>
        </div>
        <div class="line">
            <img src="./img/html-icon.png"></img>
            <p>index.html > ...</p>
        </div>
        <div class="main" id="main">
            <?php include ('./files/index.html');?>
        </div>
        <div class="footer">

        </div>
      </div>
    
      
</body>
<script src="./js/accordion.js"></script>
<script src="./js/nav.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</html>
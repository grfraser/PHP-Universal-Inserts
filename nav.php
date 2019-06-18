<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script> 
    $(function(){
        $("#fadingMenu").fadeIn(5000);
    });
</script> 

<style> 
    .navbar {
        overflow: hidden;
    }
    
    .navbar a {
        float: left;
        font-size: 16px;
        color:black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    .dropdown {
        float: left;
        overflow: hidden;
    }
    
    .dropdown .dropbtn {
        font-size: 16px;  
        border: none;
        outline: none;
        color: black;
        font-family: inherit;
        margin: 0;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 225px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    
    .dropdown-content a:hover {
        background-color: #ddd;
    }
    
    .dropdown:hover .dropdown-content {
        display: block;
    }

    #fadingMenu {
        display: none;
        color: black;
    }

    .dropdown-content {
        border-bottom-style: solid;
        border-width: 1px;
        border-color: rgba(170, 170, 170, .75);  
    }

    .dropdown-content a {
        border-top-style:solid;
        border-width: 1px;
        border-color: rgba(170, 170, 170, .5);  

    }

  
</style>

<div class="w3-top" id="#menuBarFull">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card navbar">
        <a href="#home" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
        
        <!-- Float links to the right. Hide them on small screens -->
        <div style="" id="fadingMenu" class="w3-right w3-hide-small myButtons">
            <a href="#projects" class="w3-bar-item w3-button myButtons"><div>Projects</div></a>
            <a href="#about" class="w3-bar-item w3-button myButtons">About</a>
            <a href="#contact" class="w3-bar-item w3-button myButtons">Contact</a>
            <div style="padding: 0px;" class="dropdown w3-bar-item w3-button">
                <button style="font-family: Verdana, sans-serif;letter-spacing: 4px;" class="dropbtn w3-button myButtons">Bonus Content  <i class="fa fa-caret-down"></i>
                <div style="margin-top:8px;margin-left: -16px; " class="dropdown-content">
                    <a href="//google.com" class="w3-button myButtons">Google</a>
                    <a href="//yahoo.com" class="w3-button myButtons">Yahoo</a>
                    <a href="//aquaspaceproductions.com " class="w3-button myButtons">ASP</a>
                </div>
                </button>
            </div>
        </div>

    </div>
</div>

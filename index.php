
<html lang="de">
    
       <head>
        <title>my-own-site</title>
        <meta name="description" content="Eigene Lokale Testwebseite.">
        <meta name="author" content="Darryn Oesch">
        
        <link rel="stylesheet" type="text/css" href="/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="/css/dashboard.css">
        
                  <link rel="stylesheet" href="/css/bootstrap.min.css">
                  <script src="/js/jquery-2.1.4.js"></script>
                  <script src="/js/jquery-2.1.4.min.js"></script>
                  <script src="/js/bootstrap.min.js"></script>
                  <script src="/js/jquery-1.11.3.js"></script>
                  <script src="/js/jquery-1.11.3.min.js"></script>

        </head>
    <body>
        <div id="wrapper">
            <div id="divAnalyticsHeader">
                <div class="titlebar">
                    <div class="title">
                        <img id="titellogo" title="ABB TS Analytics, Verion 1.0" src="/images/analyticslogo.png" height="25px">
                        ABBTS Analytics (Demo-Modus)
                        <img id="helplogo" title="Hilfe" src="/images/help.png" height="25px">
                    </div>
                
                </div>
            </div>
            <div id="divDashboardSetting">
                <div class="divDashboardSettingFrame">
                    <div class="fcol divDashboardSettingFrameCol">
                        <div id="containerDashboardList">
                                <div class="divDashboardRow">
                                    <p>Studenten</p>
                                </div>
                            <a>
                                <div class="divDashboardRow">
                                    <p>Klassenübersicht</p>
                                </div>
                            </a>
                            <a>
                                <div class="divDashboardRow">
                                    <p>Semesterübersicht</p>
                                </div>
                            </a>
                            <a>
                                <div class="divDashboardRow">
                                    <p>Projektarbeiten</p>
                                </div>
                            </a>
                        </div>   
                    </div>  
                    <div class="fcol divDashboardSettingContainer" id="left">
                        <p>blabalbal</p>
                    </div> 
                    <div class="fcol divDashboardSettingContainer" id="right">
                         <p>blabalbal</p>
                    </div> 
                    <div class="fcol divDashboardSettingMenuCol">
                        <div id="containerDashboardList">
                            <a>
                                <div class="divDashboardRow">
                                    <p>Konfiguration</p>
                                </div>
                            </a>
                            <a>
                                <div class="divDashboardRow">
                                    <p>Druckmaske</p>
                                </div>
                            </a>
                            <a>
                                <div class="divDashboardRow">
                                    <p>Anleitung</p>
                                </div>
                            </a>
                            <a>
                                <div class="divDashboardRow">
                                    <p>Info</p>
                                </div>
                            </a>
                        </div>   
                    </div>  
                    
                </div>
            </div>
            
            
            <div id="divBoardArea">
                <div class="titlebar">
                    <div id="dashboardTitleBar">
                        <div class="title">
                            - Statistik - 
                            <img id="dashboardSlider" title="Toggle the Statistik Board" src="/images/sliderup.png">
                        </div>
                    </div>
                </div>
                <div id="layoutContainer">
                    <div class="layoutContainerLeft">
                        <div id="container1">
                            <div id="container1_header">
                                Title
                            </div>
                            <div class="panel panel-default">
  <div class="panel-heading">Panel-Überschrift ohne Titel</div>
  <div class="panel-body">
    Panel-Inhalt
  </div>
</div>
                        </div>
                    </div>
                    <div class="layoutContainerRight">
                    
                    </div>
                </div>
                
            </div>
            
            <div id="divAnalyticsFooter">
                <div class="title" style="font-size: 80%">
                    <p>Copyright &copy; 2015, ABBTS |<?php echo date(" d.m.Y"); ?></p>
                </div>
            </div>
            
            
        </div>

<!-- Start of JQuery Code -->
<script type="text/javascript">
// When the document is ready execute the JQuery
$("document").ready(function() {
        
        $("#dashboardSlider").click(function() {
        if($(this).hasClass("up")) {
            $("#layoutContainer").slideUp(1000);
            $(this).attr({'src' :'/images/sliderdown.png'});
            $(this).removeClass("up");
        }else{
            $("#layoutContainer").slideDown(1000);
            $(this).attr({'src' :'/images/sliderup.png'});
            $(this).addClass("up");
        }
            
        });
        
       
        
        }); // End of JQuery Code 

</script>

    </body>
</html>

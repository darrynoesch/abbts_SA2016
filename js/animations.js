/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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

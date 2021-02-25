/* 
 Created on : 25 feb 2021, 17:45:35
 Author     : Mario Cortés
 Subject    : Experiencia de Usuario en la Web
 */


$(document).ready(function(){
    $("#eq-ingles").click(function(){
        $("#img-toefl").hide();
        $("#img-etapas").hide();
        $("#img-eqingles").show();        
        $("#myModal").fadeIn();        
    });

    $("#exm-toefl").click(function(){
        $("#img-eqingles").hide();
        $("#img-etapas").hide();
        $("#img-toefl").show();
        $("#myModal").fadeIn();        
    });

    $("#etapas-proceso").click(function(){
        $("#img-eqingles").hide();
        $("#img-toefl").hide();
        $("#img-etapas").show();
        $("#myModal").fadeIn();        
    });

    $(".close, #myModal").click(function(){
        $("#myModal").fadeOut();
    });
});
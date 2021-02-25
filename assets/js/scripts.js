/* 
 Created on : 25 feb 2021, 17:45:35
 Author     : Mario Cortés
 Subject    : Experiencia de Usuario en la Web
 */

$(document).ready(function () {
    $.fn.extend({
        disableSelection: function () {
            this.each(function () {
                if (typeof this.onselectstart != 'undefined') {
                    this.onselectstart = function () { return false; };
                } else if (typeof this.style.MozUserSelect != 'undefined') {
                    this.style.MozUserSelect = 'none';
                } else {
                    this.onmousedown = function () { return false; };
                }
            });
        }
    });
    $('*').disableSelection();


    $(document).scroll(function () {
        // aca se pregunta si el scroll se movio de pa bajo.
        if ($(this).scrollTop() > 100) {
            // esta parte cambia el atributo "src" de la etiqueta "img" 
            $(".div-arrow-up").fadeIn();
        }
        if ($(this).scrollTop() < 100) {
            $(".div-arrow-up").fadeOut();
        }
    });

});
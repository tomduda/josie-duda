jQuery(document).ready(function($){
    var sf= $('ul.nav-menu');
    enquire.register("screen and (min-width:600px)", {

        // Triggered when a media query matches.
        match : function() {
            sf.superfish({
            delay: 200,
            speed: 'fast'
        });
    },      
        unmatch : function() {
            sf.superfish('destroy');
        }   
    });        
});
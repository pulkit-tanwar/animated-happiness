$(document).ready(function() {
        

        $('.ratings_stars').hover(

            function() {
                $(this).prevAll().andSelf().addClass('ratings_over');
                $(this).nextAll().removeClass('ratings_vote'); 
            },

            function() {
                $(this).prevAll().andSelf().removeClass('ratings_over');
                // set_votes($(this).parent());
            }
        );
        
        
        
        
        
        
    });
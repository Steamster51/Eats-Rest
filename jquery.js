function togle(){
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('navlinks')[0]
    
    toggleButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('active')
    })
    }
    
    function togleer(){
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navlinks')[0]
        
        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
        }

$(document).ready(function(){
    $("#loginform").hide();

    $("#signupbtn").click(function(){
        $("#loginform").hide();
        $("#signupform").fadeIn(1000);
    });

    $("#loginbtn").click(function(){
        $("#loginform").fadeIn(1000);
        $("#signupform").hide();
    });

    $(window).resize(function(){
        if ($(window).width() <= 600) {  
    
            $(".toggle-button").click(function(){
                $(".navigation").slideDown(600);
            });
    
            $(".navlinks").click(function(){
                $(".navlinks").slideUp(600);
            });
    
        }
    });
})
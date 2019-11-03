$(document).ready(function(){
    $('input[value=""]').addClass('empty');
    $('input[value!=""]').addClass('notempty');
})


$('input').keyup(function() {
    if ($(this).val() != "") {
        $(this).addClass("notempty");
        $(this).removeClass("empty");
    } else {
        $(this).removeClass("notempty");
        $(this).addClass("empty");
    }
});

function phoneNoPreValidation() {
    var e = event || window.event; // get event object
    var key = e.keyCode || e.which; // get key cross-browser
    if (key == 8 || key == 9 || key == 46) //back, delete tab, ctrl, win, alt, f5, paste, copy, cut, home, end
        return true;
    // if(key == 109 && allownegative)
    //     return true;
    // if(key == 190 && allowcomma)
    //     return true;
    if (key >= 37 && key <= 40) //arrows
        return true;
    if (key >= 48 && key <= 57) // top key
        return true;
    if (key >= 96 && key <= 105) //num key
        return true;
    console.log('Not allowed key pressed ' + key);
    if (e.preventDefault) e.preventDefault(); //normal browsers
    e.returnValue = false;
}
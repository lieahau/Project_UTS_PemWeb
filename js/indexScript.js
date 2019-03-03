// handle index/login page
function onFormInput(){
    let input = $(event.target).val();
    if(input != "" && $(event.target).css("background-image") != "none"){
        $(event.target).css("background-image", "none");
    }else if(input == "" && $(event.target).attr("type") == "email"){
        $(event.target).css("background-image", "url('/images/logo_username.png')");
    }else if(input == "" && $(event.target).attr("type") == "password"){
        $(event.target).css("background-image", "url('/images/logo_password.png')");
    }
}
// handle index/login page
function onFormInput(){
    let input = $(event.target).val();
    if(input != "" && $(event.target).css("background-image") != "none"){
        $(event.target).css("background-image", "none");
    }else if(input == "" && $(event.target).attr("id") == "username"){
        $(event.target).css("background-image", "url('/images/assets/logo_username.png')");
    }else if(input == "" && $(event.target).attr("id") == "password"){
        $(event.target).css("background-image", "url('/images/assets/logo_password.png')");
    }
}
$("#freeQuoteForm").on("submit", function (event) {
    alert();
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var website = $("#website").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "../../free-quote-handler.php",
        data: "name=" + name + "&email=" + email + "&mobile=" + mobile + "&website=" + website + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#freeQuoteForm")[0].reset();
    submitMSG(true, "Thank you for your query. We will get back to you soon.").delay(3200).fadeOut(300);
}

function formError(){
    $("#freeQuoteForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}
function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "alert alert-success";
    } else {
        var msgClasses = "alert alert-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}


$(document).ready(function(){
    
    $("form").on("submit", function(event) {
        
        event.preventDefault();

        // NAME
        
        if ($("#name").val() == "") {
            alert("Name must be filled out");
            $("#name").focus();
            return false;
        }

        // IMAGE

        if ($("#photo").val() == ""){
            alert("Enter an Image for your profile");
            return false;
        }
        else {
            re = /(\.png)$/;
            if(!re.test($("#photo").val())) {
                alert("Invalid image file type.");
                return false;  
            }
            else console.log("VALIDATED");
        }

        postdata = new FormData(document.getElementById('testform'))

        $.ajax({
            type      : 'POST',
            url       : 'backend.php',
            data      : postdata,
            dataType  : 'text',
            contentType : false,
            processData : false
          }).done(function(result){
            //   console.log(result);
              alert(result);
            //   location.assign("index.php");
            //   $('html').html(form);
          }).fail(function (result){
            alert("Fail");
            console.log(result);
        });

        return false;

    });
});
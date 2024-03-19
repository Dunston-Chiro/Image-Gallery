function getRecords(path){

    console.log("REFRESHED");
    // rows = [];
    
    $.ajax({
        type      : 'POST',
        url       : path,
        dataType  : 'json',
        contentType : false,
        processData : false
    }).done(function(results){
        if (results == '0')
        {
            $('#testTable').html("<tr><td class='note' id='note' colspan='11'>0 RECORDs TO SHOW</td><tr>");
            // $("#checkall").css("display","none");
        }
        else {
            console.log('SUCCESS');
            showRecords(results);
        }
        // console.log("Hello");
        // $('#delContain').html('<a href="delete.php" class="button" id="delete" style="display:none">DELETE</a>');
    }).fail(function (results){
          alert("Server Fail");
          console.log(results.responseText);
    });
};
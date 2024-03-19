i=0;
function confirmMessage(path) {

    if (confirm("ARE YOU SURE YOU WANT TO DELETE THE RECORD!!!")) {
        alert("Your Record is deleted");
        getRecords(path);
    } 
    else {
        alert("Process Cancelled");
    }
}

$(document).ready( function() {
    
    $("[name=del]").on("click", function(e){

        e.preventDefault();

        var l = $(this).attr('href');

        confirmMessage(l);

        return false;
    });
});
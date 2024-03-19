function showRecords(data)
{
    results = '<tr>';

    for (i=0; i<data.length; i++)
    {
        if (i%4 == 0)
        {
            results += '</tr>';
        }
        results += showData(data[i],i);
    }

    $('#testTable').html(results);
    $('body').append('<script src="confirm.js"></script>');
}

function showData(col, inc)
{
    result =
    '<td>'+
        '<p>'+ col['name'] +'</p>'+
        '<img src="user'+ col['id'] +'/'+ col['image'] +'" alt="Preview" style="width: 60px; height: 60px; object-fit: contain;"/><br>'+
        '<a href="delete.php?id=' + window.btoa(col['id']) +'" style="color: red;" name="del" id="del"'+ inc +'">Delete</a>'
    '</td>';

    return result;
}
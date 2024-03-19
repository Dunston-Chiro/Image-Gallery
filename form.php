<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<h2>TEST FORM</h2>

<table>
    <form action="backend.php" method="post" enctype="multipart/form-data" id="testform">
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name"/></td>
        </tr>
        <tr>
            <td><label for="photo">Name:</label></td>
            <td><input type="file" name="photo" id="photo" accept=".jpg,.png,.bmp,.jpeg"/></td>
        </tr>
        <tr>
            <td colspan='2'><input type="submit" value="Submit"></td>
        </tr>
    </form>
</table>

<script src="validate.js"></script>

</body>
</html>
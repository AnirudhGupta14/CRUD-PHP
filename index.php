<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>Student Details</h1>
                <hr>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form id="addForm">
                    <div>Rollno: <input type="number" id="rollno" required></div>
                    <div>Name : <input type="text" id="name" required></div>
                    <div>Branch: <input type="text" id="branch" required></div>
                    <div>Age: <input type="number" id="age" required></div>
                    <div><input type="submit" id="save-button" value="Save" required></div>
                </form>
                <hr>
            </td>
        </tr>
        <tr>
            <td id="table-data"></td>
        </tr>
    </table>
    <div id="error-message"></div>
    <div id="success-message"></div>
    <div id="modal">
        <div id="modal-form">
            <h2>Edit Form</h2>
            <table cellpadding="10px" width="100%"></table>
            <div id="close-btn">X</div>
        </div>
    </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>

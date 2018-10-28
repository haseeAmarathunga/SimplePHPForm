<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Details</title>

    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #222536;
            color: white;
        }


        * {
            box-sizing: border-box;
        }

        input[type=text],input[type=password],input[type=email], textarea {
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        select{
            width: 28%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            color:#aaa;
            margin-right:10px;
        }

        .btnSuccess{
            background-color: #222536;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btnSuccess:hover{
            background-color: #d8a44d;
        }

        .btnSuccess:active {
            color: #d8a44d;
        }

        .country{
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            color:#aaa;
            margin-right:10px;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            color:#ff0;
            margin-left:10%;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left:70%;
            margin-right:5px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .btnUpdate{
            background-color: #dc8700;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btnUpdate:hover{
            background-color: #d8a44d;
        }

        .btnDelete{
            background-color: #d8544d;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btnDelete:hover{
            background-color: #d8644d;
        }
        input[type=reset] {
            background-color: #d8544d;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=reset]:hover {
            background-color: #d8644d;
        }

        .container {
            border-radius: 5px;
            background-color: #222536;
            padding: 20px;
        }

        .fluid {
            margin-left:20%;
            margin-right:20%;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .agree{
            color:#ff0;
            margin-left:300px;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        .box{
            color : #ff0;
            background-color : #dc8700;
            border-radius: 5px;
            padding: 15px;
            margin-bottom:4px;
            margin-top:4px;
        }
        .alert{
            color:red;
            margin-left:300px;
        }
        
        .radio{
            margin-top:5px;
            margin-right:8px;
            color:#fff;
        }
    </style>
</head>
<body>

<table id="customers">

<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Screen Name</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Country</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Password</th>
    <th>Update</th>
</tr>

<?php 
include("database.php");
$query="SELECT * FROM user";
$result= mysqli_query($db,$query);
while($row=mysqli_fetch_array($result)){

    /*echo "<tr>";*/
    echo "<tr>
            <td>$row[0] </td>
            <td>$row[1] </td>
            <td>$row[2] </td>
            <td>$row[3] </td>
            <td>$row[4] </td>
            <td>$row[5] </td>
            <td>$row[6] </td>
            <td>$row[7] </td>
            <td>$row[8] </td>
            <td><button class='btnUpdate'>Update</button></td>
</tr>";
    
}
echo "</table>";
?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get pdf copy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h3{
            margin-top:30px;
        }
    </style>
</head>
<body onload="print()">
<div class="container">
    <h3>Students List</h3>
    <hr>
    <table id="ready" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>ID</th>
        <th>student Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course</th>
        
    </tr>
</thead>
<tbody>
    <?php
    include "dbcon.php";
    $get_list=mysqli_query($con,"SELECT * FROM students");
    while($row=mysqli_fetch_array($get_list)){
        ?>
        <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
       
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['course']?></td>
    </tr>
        <?php
    }
    ?> 
</tbody>
</table>

</div>
    
</body>
</html>
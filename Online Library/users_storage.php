<?php
 
// Username is root
require_once 'config.php';

 
// SQL query to select data from database
$sql = " SELECT * FROM storage ORDER BY book_id DESC";
$result = $connection->query($sql);
$connection->close();
?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <title>Library Portal: Landing Page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" type="text/css" href="requested.css">
    
</head>
<body>

<div id="nav" >
      
      <ul id="navs">
        <li><a href="home.html">Home</a></li>
        <li class="active"><a href="">Books Available</a></li>
        <li><a href="request.html">Request</a></li>  
        <li><a href="admin_login.html">Admin</a></li>
        <li><a href="logout.php">Logout</a></li>     
        </ul>            
          <img src="img/3.png" id="img">
          <div id="logo"></div>
    </div>

    <section>


        <h2>Requests and Feedbacks</h2>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Book_ID</th>
                <th>Book Title</th>
                <th>Book Author</th>
                <th>Timestamp</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['book_id'];?></td>
                <td><?php echo $rows['title'];?></td>
                <td><?php echo $rows['author'];?></td>
                <td><?php echo $rows['timestamp'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>
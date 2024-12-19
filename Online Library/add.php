<?php
          // Include config file
          require_once 'config.php';
          
            if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
              $title = $_POST['title'];
              $author = $_POST['author'];
            
            if($title !=''||$author !=''){
            //Insert Query of SQL
              $query = mysqli_query($connection, "insert into storage(title, author) values('$title','$author' )");
              echo "<br/><br/><span>Data Inserted successfully...!!</span>";
            }
            else{
              echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
            }
          }
          mysqli_close($connection); // Clos

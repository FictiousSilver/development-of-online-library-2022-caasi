<?php
          // Include config file
          require_once 'config.php';
          
            if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
              $username = $_POST['username'];
              $password = $_POST['password'];
            
            if($username !=''||$password !=''){
            //Insert Query of SQL
              $query = mysqli_query($connection, "insert into admin(username, password) values('$username','$password' )");
              echo "<br/><br/><span>Data Inserted successfully...!!</span>";
            }
            else{
              echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
            }
          }
          mysqli_close($connection); // Clos

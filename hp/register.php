 <?php
          // Include config file
          require_once 'config.php';
          
            if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
              $lastname = $_POST['lastname'];
              $firstname = $_POST['firstname'];
              $middlename = $_POST['middlename'];
              $username = $_POST['username'];
              $password = $_POST['password'];
            
            if($username !=''||$password !=''){
            //Insert Query of SQL
              $query = mysqli_query($connection, "insert into users(lastname, firstname, middlename, username, password) values('$lastname','$firstname','$middlename','$username','$password' )");
              echo "<br/><br/><span>Data Inserted successfully...!!</span>";
            }
            else{
              echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
            }
          }
          mysqli_close($connection); // Clos
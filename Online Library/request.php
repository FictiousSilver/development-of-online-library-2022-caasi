 <?php
          // Include config file
          require_once 'config.php';
          
            if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
              $username = $_POST['username'];
              $title = $_POST['title'];
              $author = $_POST['author'];
              $feedback = $_POST['feedback'];
            
            if($author !=''||$feedback !=''){
            //Insert Query of SQL
              $query = mysqli_query($connection, "insert into books(username, title, author, feedback) values('$username','$title','$author','$feedback' )");
              echo "<br/><br/><span>Data Inserted successfully...!!</span>";
            }
            else{
              echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
            }
          }
          mysqli_close($connection); // Clos
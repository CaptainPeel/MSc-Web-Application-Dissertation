<html>
    <head>
        <title>Read Your Reviews!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    </head>
    <body>
      

    <center>
        <h1>Fetch data based on your username</h1>
        <div class="container">
            <form action="" method="POST">
                <input type='text' name='username' placeholder="Enter your username"/>
                <input type='submit' name='search' placeholder="Search by your username"/>
                <br>
                <br>
                <br>
                 <a href=http://localhost/welcome.php onclick="basicPopup3(this.href);return false">Return back to the welcome page</a>
    <script>
    // JavaScript popup window function
    function basicPopup3(url) {
        popupWindow = window.open(url, 'popUpWindow', 'height=420,width=470,left=50,top=50,resizable=yes,scrollbars=yes,\n\
toolbar=yes,menubar=no,location=no,directories=no, status=yes')
    }

</script>
    
            </form>
            
            <table>
                <tr>
                   
                    <th>Email</th>
                
                    <th>Age</th>
                  
                    <th>Name</th>     
                   
                    <th>Username</th>
                 

                </tr>
                
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'ezwebdevdb');
                
                if(isset($_POST['search']))
                {
                    $username = $_POST['username'];
                    $result=mysqli_query($connection, "SELECT * FROM `useraccinfo`where username='$username'");
                   
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                <tr>
                    <td> <?php echo $row['email']; ?> </td>
                <br>
                    <td> <?php echo $row['age']; ?> </td>
                    
                    <br>
                     <td> <?php echo $row['name']; ?> </td>
                     <br>
                      <td> <?php echo $row['username']; ?> </td>
                      <br>
                </tr>
                        <?php
                    }
                }
               ?>
            </table>
            
            
        </div>
    </center>
    </body>
</html>
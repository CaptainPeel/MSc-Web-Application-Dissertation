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
                    <th>Preferred Programming Language</th>
                    <th>Preferred Programming Tutorial</th>
                    <th>Username</th>

                </tr><br>
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'ezwebdevdb');
                
                if(isset($_POST['search']))
                {
                    $username = $_POST['username'];
                    $result=mysqli_query($connection, "SELECT * FROM `userpref`where username='$username'");
                   
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                <tr>
                    <td> <?php echo $row['prefproglang']; ?> </td>
                <br>
                    <td> <?php echo $row['prefprogtut']; ?> </td>
                    

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
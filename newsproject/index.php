<?php
    //include_once 'includes/connection.php';
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        </head>
    <body>
    <nav class="navbar navbar-dark sm navbar-blue">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">News</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
    <div class="container-fluid">
        
            <div class = "wrapper">
                    
                        <div class="header">
                                <div class="col-md-1 col-lg-2">
                                                <form class ="search">
                                                    
                                                    
                                                </form>
                                            </div>
                                <div class= "inner-header">
                                    <div class="row">
                                            
                                        </div>
                                </div> 
                            </div>   
                     
                </div>
            
    </div>
                    <div class = "clearfix">
                        <div class = "content">

                            <div class = "inner-content"> 
                                <?php
                                    $connect = mysqli_connect("localhost","root","newsproject"," ");
                                    if($connect){
                                        echo "Connection established! <br>";
                                    } else {
                                        die("Connection failed. Reason: ". mysqli_connect_error());
                                    }

                                    $sql="SELECT* FROM article";

                                    $results= mysqli_query($connect, $sql);

                                    if(mysqli_num_rows($results)>0){
                                        while($row=mysqli_fetch_array($results)){
                                            echo $row[2]." ".$row[3]." ".$row[4]." ".$row[7]." ".$row[9]." ".$row[10];
                                            echo "<br>";
                                        }
                                    }
                                    mysqli_close($connect);
                                ?>    
                            </div>

                        </div>
                    </div>
                
                <div>

                </div>
                <div class="footer">
                    <div class="inner-footer">Футер</div>
                </div>
                    

        </div>
        

    </body>

</html>

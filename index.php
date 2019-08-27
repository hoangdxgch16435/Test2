<!DOCTYPE html>
<html>
    <head>
        <title>Hoang Shop</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .container{
                width: 100%;
                margin: 0 auto;
            }
            .container img{
                width: 100%;

            }
            .footer{
                width: 100%;
                height: 100px;
                background-color: black;
            }
            .main{
                width: 100%;
                overflow: hidden;
                background-color: white;
            }

            .image img{
                width: 100%;
            }
            .detail{
                width: 100%;
                float: right;
                text-align: center;
            }
            .title{
                background-color: white;
                font-size: 25px;
                line-height: 30px;
                padding-left: 5px;
                font-weight: bold;
                color: black;
            }
            .detail{
                padding-left: 15px;
                box-sizing: border-box;
            }
            .des{
                color: red;
                font-size: 18px;
                padding-left: 10px;
                padding-top: 10px;
                font-weight: normal;
            }

            .list{
                width: 100%;
                padding-top: 10px;
            }
            .item{
                width: 25%;
                float: left;
                padding: 5px;
                box-sizing: border-box;
            }
            .iimage img{
                width: 100%;
                height : 50%;
            }
           

            .nav{
                width: 100%;
                height: 50px;
                background-color: black;
            }
            .nav ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }
            .nav a{
                color:whitesmoke;
                font-size: 30px;
                text-decoration: none;
                line-height: 50px;
                padding: 0 15px;
                display: block;
            }
            .nav li{
                float: left;
            }
            .nav a:hover{
                color: #792323;
            }
            .nav li:hover{
                background-color:#DCF4F6;
            }
        </style>
    </head>
    <body>
        

        <div class="container">
            <center><img src="LV.jpg"></center>
            <div class="header">
                
                <div class="nav">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./login.php">Admin</a></li>
                        <li><a href="#Lego">Lego</a></li>
                        <li><a href="#Doll">Doll</a></li>
                        <li><a href="#Pants">Pants</a></li>

                    </ul>


                </div>
            </div>
            <div class="main">
                <div class="hot">

                    <div class="detail">
                        <div class="title">
                            <i>Hoang's Toy Store</i>
                        </div>
                        <div class="des">
                            Paradise for children ! 
                        </div>
                    </div>
                </div>
                <div class="seperator">

                </div>
                <div class="list w3-row">
                    <div class="" id="Lego"><h2>Lego</h2>
                      <?php
              include 'ketnoi.php';
                $sql = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage, catalogueId FROM item";
                $result = pg_query($connection,$sql);
                if (pg_num_rows($result) > 0) {
                // output data of each row
                while($row = pg_fetch_assoc($result)) {
                  $iId = $row['iId'];
                    $iPrice = $row['iPrice'];
                    $iImage = $row['iImage'];
                    $iName = $row['iName'];
             
              ?>
                    
     
                </div>

                        
            </div>
            <div class="footer">
            </div>
        </div>
    </body>
</html>


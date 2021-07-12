<!DOCTYPE html>
<html>

<head><title>DashBoard</title></head>
<body>
 <div class="boxone">
   <table  style =" font-size:25pt"  align="center" width="100%" height="100%" >
      <tr>
        <td style="color:#329299"><h1 align="center"><marquee> WELCOME TO RHO E-LIBRARY </marquee></td></h1>
      </tr>
      <tr>
        <td ><mark style="color:white;background-color:black; border-radius:1.2em; position: relative; margin-left:450px;" align= "center"> &nbsp;Welcome 
            
          <!-- Php code that writes "mr" if the gender of the set on the database is male else it says "Ms" and also echos the name of the user it should be like "Welcome Mr Khaleel"  -->


      </tr>
    </table>
  </div>

  <div class="nav">
    <ul>
      <li><a style="background-color: #329299" href="DashBoard.php">HOME</a></li>
      <li><a href="sbooks.php">MY BOOKS INFO</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="index.php">LOGOUT</a></li>
    </ul>
  
<br><br>

</div>

  <div class="boxtwo" style="border-radius: 10px; width:73.5%; height:900px; margin-left:13%;margin-top:10px;background-color:black;">
      
      
      
      
    <div class="box-cnt">
      <h3 class="box-cnt-h">COMPUTER SCIENCE</h3>
         <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>

                <!-- Php code for echo out the table data and also the link to the book  -->


                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">COMPUTER ENGINEERING</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>


           <!-- Php code for echo out the table data and also the link to the book  -->


                </table>


    </div>
      
    
    
      <br/clear="all">

    <div class="box-cnt">
      <h3 class="box-cnt-h">SOFTWARE ENGINEERING</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>

         <!-- Php code for echo out the table data and also the link to the book  -->

                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">CYBER SECURITY</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
                
           <!-- Php code for echo out the table data and also the link to the book  -->

                </table>


    </div>
          </br/clear>


  </div>


     <div align = center ; class="boxthree" style="background-color:black; border:solid 3px grey; border-radius: 6px; width:73.5%; height:40px; margin-left:13%; margin-top:20px" >
      <h4 style="margin-top: 5px ; color : #329299 ; " >Thank You For Using This System.</h4>
     </div>

</body> 
<style>
    
    
    
    body{
  background: url("alfons.jpg");
}
.boxone{

    width:74%;
    margin-left: 13%;

}
.boxtwo{
  background-size: cover;
  opacity: .8 ;

}
ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 248px;
  height: 40px;
  background-color: #329299;
  opacity: .8;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
}
ul li a{
  text-decoration: none;
  color: white;
  display: block;
}
ul li a:hover{
  background-color: black;
}
ul li ul li{
  display: none;
}
ul li:hover ul li{
  display: block;

}
.nav{
  padding-left:16%;

}
.box-cnt{

  box-shadow: 0px 0px 15px  #3d351d;
  background:rgba(0,0,0,0.38);
  float:left;
  border-radius:12px;
  overflow: auto;
  height:400px;
  width:45%;
  margin: 2% 2%;
    float: left;

}
    .box-cnt-h{
        color:white;
        text-align: center;
        padding-top:2px;
        padding-bottom: 2px;
        background:#329299;
        border-radius:12px;
        
    }

    .box-table{
        color: white;
        text-align: center;
        border-collapse: collapse;
        margin:1%;
        box-shadow: 0px 0px 10px white;
        height: auto;
        
    }
    .box-table td,tr{
        border: 1px solid white;
    }
    
    a{
        color: white;
    }
    
    
    </style>
<html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Masyarakat</title>


    

</head>
<style>
  
body{
  margin: 0px;
  padding: 0px;
  background: #14836e;
}

h1{
  color: #fff;
  text-align: center;
  font-family: Arial;
  font-weight: normal;
  margin: 2em auto 0px;
}
.outer-screen{
  background: #13202c;
  width: 900px;
  height: 600px;
  margin: 0px auto;
  border-radius: 20px;
  -moz-border-radius: 20px;
  -webkit-border-radius: 20px;
  position: relative;
  padding-top: 35px;
}

.outer-screen:before{
  content: "";
  background: #3e4a53;
  border-radius: 50px;
  position: absolute;
  bottom: 20px;
  left: 0px;
  right: 0px;
  margin: auto;
  z-index: 9999;
  width: 50px;
  height: 50px;
}
.outer-screen:after{
  content: "";
  background: #ecf0f1;
  width: 900px;
  height: 88px;
  position: absolute;
  bottom: 0px;
  border-radius: 0px 0px 20px 20px;
  -moz-border-radius: 0px 0px 20px 20px;
  -webkit-border-radius: 0px 0px 20px 20px;
}

.stand{
  position: relative;  
}

.stand:before{
  content: "";
  position: absolute;
  bottom: -150px;
  border-bottom: 150px solid #bdc3c7;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  width: 200px;
  left: 0px;
  right: 0px;
  margin: auto;
}

.stand:after{
  content: "";
  position: absolute;
  width: 260px;
  left: 0px;
  right: 0px;
  margin: auto;
  border-bottom: 30px solid #bdc3c7;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  bottom: -180px;
  box-shadow: 0px 4px 0px #7e7e7e
}

.inner-screen{
  width: 800px;
  height: 450px;
  background: #1abc9d;
  margin: 0px auto;
  padding-top: 80px;
}

.form{
  width: 500px;
  height: 300px;
  background: #edeff1;
  margin: 0px auto;
  padding-top: 20px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}

input[type="text"], [type="password"]{
  
  width: 309px;
  height: 35px;
  margin: 10px;
  margin-left: 95px;
  background: #fff;
 
  font-size: 16px;
   
  transition: all 0.3s ease;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}

input[type="text"], [type="password"]:focus{
  border: 1px solid #1abc9d
}

button[type="submit"]{
  display: block;
  background: #13202c;
  width: 314px;
  padding: 12px;
  cursor: pointer;
  color: #fff;
  border: 0px;
  margin: auto;
  margin-top: 10px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  font-size: 17px;
  transition: all 0.3s ease;
}

input[type="submit"]:hover{
  background: #09cca6
}

a{
  text-align: center;
  font-family: Arial;
  color: gray;
  display: block;
  margin: 15px auto;
  text-decoration: none;
  transition: all 0.3s ease;
  font-size: 12px;
}

a:hover{
  color: #1abc9d;
}


::-webkit-input-placeholder {
   color: gray;
}

:-moz-placeholder { /* Firefox 18- */
   color: gray;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: gray;  
}

:-ms-input-placeholder {  
   color: gray;  
}
</style>

<body>
    @extends('layout.app')

    @section('content')
    

    <br>
    <br>
    <br>
    <br>





   

    
       
      
    <h1>Daftar</h1>
      <div class="stand">
        
        <div class="outer-screen">
          
          <div class="inner-screen">

            

            <div class="form">

              <form action="tambah" method="POST">

                @method("POST")
                @csrf
              
                  <label for="nik"></label>
                  <input type="text" class="zocial-dribbble" placeholder="Enter your NIK" name="nik" />

                  <label for="nama"></label>
                  <input type="text" class="zocial-dribbble" placeholder="Enter your Nama"  name="nama"/>

                  <label for="username"></label>
                  <input type="text" class="zocial-dribbble" placeholder="Enter your Username"  name="username"/>

                  <label for="pw"></label>
                  <input type="password" placeholder="password" name="pw"/>
                  
                  <label for="telpon"></label>
                  <input type="text" class="zocial-dribbble" placeholder="Enter your Telpon"  name="telpon"/>

                  

                  <button type="submit"  >Daftar</button>

              </form>
              
            </div> 

          </div> 
        </div> 
      </div>
        
        
   
       
      
       
    
      @endsection
    
</body>
</html>
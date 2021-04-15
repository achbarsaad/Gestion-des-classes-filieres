<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link href="css/css back.css" rel="stylesheet" type="text/css"/>
        
        <link href="css.css" rel="stylesheet" type="text/css"/>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body class="animsition">
        <fieldset>
        <div class="page-wrapper">
            <section class="page-content--bge5">
                <section class="container">
                    <section class="login-wrap">
                        <form action="login.php" method="post" class="login-content">
                            <div class="pwd">
                                <label for="exampleInputEmail1" class="form-label" >Email address</label>
                                <input type="email" class="form-control" name="uname" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="pwd">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="pwd">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" id="btn" class="btn btn-primary btn-block">LOGIN</button>
                        </form>

                    </section>
                </section>

            </section>
        </div>
    </fieldset>
    </body>
</html>
<style >
    fieldset{

  font-size: 15px;
    margin : auto;
    
    height : 650px;
    width : 550px;
    border-radius : 15px;  
    padding : 40px;
    border-style : solid ;
    border-color :rgb(102, 102, 102);
    border : 1 px;
     padding : 40px;
     box-sizing : border-box ;
       font-size: 15px;
        background: url('ensj.jpeg ' );
    background-size : cover;
    background-repeat : no-repeat;
    background-position: center;

}
    
.animsition{
    background: url('123.jpg ' );
    background-size : cover;
    background-repeat : no-repeat;
}
button{
    width :auto;
    border-radius : 10px;
    padding :10px;

    font-size : 15px;
    font-weight : bold;
    cursor : grabbing;
    color: rgb(90, 10, 190);
    background-color:  red;

}

button[type="submit"]:hover{
    border: solid 1px  ff8100;
    text-align: center;
    width: 25%;
    height: 25%;
    background-color: rgb(90, 10, 190);
    color :white;
}
.pwd{

  color:rgb(124, 252, 0);
    font-family: "verdana";
    font-size: 15px;
    font-style: oblique,italic;
    text-shadow: 1px 1px 2px blue ;




}



</style>







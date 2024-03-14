<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
    <link href="css/log.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    body{
    background-size: cover;
      background-image : url('img/app/loginback.jpg');
      background-repeat: no-repeat;
      background-blend-mode:darken ;
      font-family: "Open Sans", sans-serif;
 
    }
    .login-container button{
  padding: 12.5px 30px;
  border: 0;
  width: 220px;
  height: 50px;
  border-radius: 100px;
  background-color: #6f9ab8;
  color: #ffffff;  
  font-weight: Bold; 
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  margin-left: 40px;
    }
    .login-container button:hover {
  background-color: #26648e;
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);
}
.login-container button:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}
.login-container div input{
    margin-right:100px;

}
.login-container{
    margin-top: 30px;
line-height: 10PX;}
</style>
</head>
<body>
<p> <div class="login-container">
  @if($errors->any()) 
  <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error) 
              <li>
                  {{$error}}
              </li>
          @endforeach
      </ul>
  </div>
@endif

@if (session('success'))
          <div class="row" id="proBanner">
            <div class="col-12 ">
              <span class="">
                <p class="alert alert-success"> {{session('success')}}</p>
                <i class="mdi mdi-close" id="bannerClose"></i>
              </span>
            </div>
          </div>

@endif

@if (session('error'))
          <div class="row" id="proBanner">
            <div class="col-12 alert alert-danger">
              <span class="d-flex align-items-center purchase-popup">
                <p class="alert alert-danger">{{session('error')}}</p>
                <i class="mdi mdi-close" id="bannerClose"></i>
              </span>
            </div>
          </div>
@endif

      
          
        <h2>Create an Account</h2>
        <form method="POST" action="{{ route('register') }}">
          @csrf           
           <label for="name">Your Name</label>
            <input type="name" id="name" name="name"placeholder="Your Name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Ex@gmail.com" required>

            
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Your password" name="password" required>
            
            <label for="conf-password"> Confirm Password</label>
            <input type="password" id="password-confirm" placeholder="Repeat Your password" name="password-confirmation" required>

            <div class="form-check">
               <p style="margin-right:250px"> <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required> <p>
               <p style="margin-top: 2px"> <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">  conditions</a></label>
               </p>
            </div>
        
            <button class="butt" type="submit" > Account</button>
            <br>
        </form>
        <br>
        <p>Already have an account? <a href="login">Sign In</a></p>
      
    </div>
    
</body>
</html>
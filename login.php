<?php
include 'function\header.php';
if (isset($_SESSION["uid"]) && !empty($_SESSION["uid"])) {
    echo "<script>window.location.replace('./index.php')</script>";
}
?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <div class="mag-login-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="login-content bg-white p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Great to have you back!</h5>
                        </div>
                        <form action="login.php" method="post" id="register">
                             <div  >
                                <div class="form-row">
                                   <div class="col">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="fname" placeholder="First Name" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="lname" placeholder="Last Name" required>
                                </div> 
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email or User Name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <a href="#" onclick="changeFields(0)">Already have one.</a>
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn mag-btn mt-30" name="register">Register</button> 
                            </div>
                        </form>
                        <form action="login.php" method="post" id="login">
                           
                             <div >
                                 <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email or User Name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <a href="#" onclick="changeFields(1)">Create new Account</a>
                                       
                                    </div>
                                </div>
                                <button type="submit" class="btn mag-btn mt-30" name="login">Login</button>
                                <!--Facebook-->
                            </div>
                            <!--a href="<?php echo $loginUrl ; ?>" class="btn btn-primary">Log In with Facebook</a-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ##### Login Area End ##### -->



    <!-- ##### All Javascript Script ##### -->
    <script type="text/javascript">
        function changeFields(n){
            if (n==0) {
                var d=document.getElementById('login');
                var d2=document.getElementById('register');
                d.style.display="block";
                d2.style.display="none";
            }
            if (n==1) {
                var d=document.getElementById('register');
                  var d2=document.getElementById('login');
                d.style.display="block";
                d2.style.display="none";
            }
        }
    </script>
        <?php include 'function\footer.php'; ?>
   
</body>

</html>
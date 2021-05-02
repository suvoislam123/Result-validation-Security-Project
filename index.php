
    <?php include "header.php" ?>
    <!-- form sign in starts here -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 ml-auto py-4 mt-5">
                <main class="form-signin">
                    <form action="">
                      
                      <h1 class="h3 mb-3 fw-normal text-white">Please sign in</h1>
                  
                      <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="User name or email">
                        <label for="floatingInput" class="text-primary">Email address</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-primary">Password</label>
                      </div>
                  
                      <input type="radio" id="male" name="gender" value="male">
                      <label for="male" class="">Sign in as Teacher</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female" class="">Sign in as Director/Chairman</label><br>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other" class="">Sign in as Exam Controler</label>
                      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                     
                    </form>
                </main>
            </div>
        </div>
    </div>
    <!-- form sign in ends here -->
    
      
</body>

</html>
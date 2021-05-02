<?php include "header.php"; ?>
<div class="container">
            <main>
                <!-- toggleable dynamic tab starts here -->
                <div class="other-section mt-4">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item"><a data-toggle="pill" class="nav-link active" href="#form1"><i class="fas fa-users"></i>Particular Course & multiple Student</a></li>
                        <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#form2"><i class="fas fa-user-alt"></i>Particular Student & multiple course</a></li>
                        
                    </ul>
    
                    <div class="tab-content">
                        <!-- item1 -->
                        <div id="form1" class="tab-pane active">
                            <form >
                        
                                <div class="form-group">
                                  <div class="row">
                                      <div class="col-3">
                                        <label for="l1">Examination :</label>
                                        <select class="form-control" id="sel1">
                                            <option>Term1</option>
                                            <option>Term2</option>
                                        </select>
                                       
                                      </div>
                                      <div class="col-1"></div>
                                      <div class="col-3">
                                        <label for="l2">Year : </label>
                                        <select class="form-control" id="sel1">
                                            <option>2017</option>
                                          <option>2018</option>
                                          <option>2019</option>
                                          <option>2020</option>
                                          <option>2021</option>
                                          <option>2022</option>
                                          <option>2023</option>
                                          </select>
                                      </div>
                                      <div class="col-1"></div>
                                      <div class="col-3">
                                        <label for="l3">Department :</label>
                                        <select class="form-control" id="sel1">
                                          <option>CSTE</option>
                                          <option>ICE</option>
                                          <option>EEE</option>
                                          <option>IIT</option>
                                    
                                        </select>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-3">
                                      <label for="l1">Section :</label>
                                      <select class="form-control" id="sel1">
                                          <option>A</option>
                                          <option>B</option>
                                      </select>
                                     
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                      <label for="l2">Subject : </label>
                                      <select class="form-control" id="sel1">
                                        
                                        <option>Data Structure And Algorithm</option>
                                        <option>Software Security</option>
                                        <option>SQA</option>
                                        </select>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                      <label for="l3">Course Code :</label>
                                      <select class="form-control" id="sel1">
                                        <option>CSE-102</option>
                                        <option>CSE-121</option>
                                        <option>CSE-444</option>
                                        <option>SE-119</option>
                                  
                                      </select>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Add multiple Students result</button>
                                    </div>
                                    <div class="col-1">

                                    </div>
                                    <div class="col-3">
                                      <button type="reset" class="btn btn-success">Reset</button>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-1 mt-4">
                                        
                                    </div>
                                    <div class="col-1 mt-4"></div>
                                    <div class="col-1 mt-4">
                                        
                                    </div>
                                    

                                </div>
                               
                                  
                            </form>
          

                        </div>
                        <!-- item2 -->
                        <div id="form2" class="tab-pane fade">
                            <form >
                        
                                <div class="form-group">
                                  <label for="l1">Examination :</label>
                                  <select class="form-control" id="sel1">
                                      <option>Term1</option>
                                      <option>Term2</option>
                                  </select>
                                 
                                
                                
                                  <label for="l2">Year : </label>
                                  <select class="form-control" id="sel1">
                                      <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    </select>
                                    <label for="l3">Department :</label>
                                  <select class="form-control" id="sel1">
                                    <option>CSTE</option>
                                    <option>ICE</option>
                                    <option>EEE</option>
                                    <option>IIT</option>
                              
                                  </select>
      
                                  <label for="l3">Section :</label>
                                  <select class="form-control" id="sel1">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                              
                              
                                  </select>
                                <label for="l3">Roll :</label>
                                <input type="text" class="form-control">
                                <label for="l3">Name :</label>
                                <input type="text" class="form-control">
                                <div class="row mt-1">
                                    <div class="col-4">
                                        
                                        <label for="l3">Select Number of courses:</label>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success rounded-circle">One</button>
                                        
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success rounded-circle">Two</button>
                                        
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success rounded-circle">Three</button>
                                        
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success rounded-circle">Four</button>
                                    </div>
                                </div>
                                  
                                </div>
                                
                              
                              
                                
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                  
      
                                  
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- toggleable dynamic tab ends here -->
            </main>
        </div>

        <!-- footer starts Here -->  
        <footer class="text-center text-white" style="background-color: #f1f1f1; margin-top: 28vh;">
            <!-- Grid container -->
            <div class="container pt-4">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a
                  class="btn btn-link btn-floating btn-lg text-dark m-1"
                  href="https://www.facebook.com/suvoislam123"
                  role="button"
                  data-mdb-ripple-color="dark"
                  ><i class="fab fa-facebook-f"></i
                ></a>
          
                <!-- Twitter -->
                <a
                  class="btn btn-link btn-floating btn-lg text-dark m-1"
                  href="#!"
                  role="button"
                  data-mdb-ripple-color="dark"
                  ><i class="fab fa-twitter"></i
                ></a>
          
                <!-- Google -->
                <a
                  class="btn btn-link btn-floating btn-lg text-dark m-1"
                  href="#!"
                  role="button"
                  data-mdb-ripple-color="dark"
                  ><i class="fab fa-google"></i
                ></a>
          
                <!-- Instagram -->
                <a
                  class="btn btn-link btn-floating btn-lg text-dark m-1"
                  href="#!"
                  role="button"
                  data-mdb-ripple-color="dark"
                  ><i class="fab fa-instagram"></i
                ></a>
          
                <!-- Linkedin -->
                <a
                  class="btn btn-link btn-floating btn-lg text-dark m-1"
                  href="#!"
                  role="button"
                  data-mdb-ripple-color="dark"
                  ><i class="fab fa-linkedin"></i
                ></a>
                <!-- Github -->
                <a
                  class="btn btn-link btn-floating btn-lg text-dark m-1"
                  href="#!"
                  role="button"
                  data-mdb-ripple-color="dark"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
              <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2020 Copyright:
              <a class="text-dark" href="#">Shuvo Islam</a>
            </div>
            <!-- Copyright -->
          </footer>
        <!--footer ends Here-->

         <!--Modal Statrts here-->
   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Two step validation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
            
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Roll</th>
                  <th scope="col">Name</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Result</th>
                  <th scope="col">Grade point</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Software Engineering</td>
                  <td>85</td>
                  <td>A+</td>
                </tr>
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
         <label>Add Description: </label> 
         <textarea></textarea>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  
        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit All</button>
      </div>
    </div>
  </div>
</div>
<!--Modal Ends Here-->
        
    </body>
</html>
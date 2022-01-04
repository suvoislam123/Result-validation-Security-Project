<?php include "header.php" ?>
<div class="container">
            <main>
                <!-- toggleable dynamic tab starts here -->
                <div class="other-section">
                    <ul class="nav nav-pills justify-content-center mt-5">
                        <li class="nav-item"><a data-toggle="pill" class="nav-link active" href="#form1"><i class="fas fa-user-alt"></i>Individual Result</a></li>
                        <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#form2"><i class="fas fa-users"></i>Group Result</a></li>
                        
                    </ul>
    
                    <div class="tab-content">
                        <!-- item1 -->
                        <div id="form1" class="tab-pane active">
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

                                    <label for="l3">Batch :</label>
                                  <select class="form-control" id="sel1">
                                    <option>First Batch</option>
                                    <option>Second Batch</option>
                                    <option>Third Batch</option>
                                    <option>Fourth Batch</option>
                              
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
                                  <label for="l3">Subject :</label>
                                  <select class="form-control" id="sel1">
                                     <option>All</option> 
                                    <option>Data Structure and Algorithm</option>
                                    <option>Software Security</option>
                                    <option>SQA</option>
                              
                              
                                  </select>
                                </div>
                                <label for="l3">Roll :</label>
                                <input type="text" class="form-control">
                              
                              
                                
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                  
      
                                  
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  
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
                                    <label for="l3">Batch :</label>
                                  <select class="form-control" id="sel1">
                                    <option>First Batch</option>
                                    <option>Second Batch</option>
                                    <option>Third Batch</option>
                                    <option>Fourth Batch</option>
                              
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
                                  <label for="l3">Subject :</label>
                                  <select class="form-control" id="sel1">
                                     <option>All</option> 
                                    <option>Data Structure and Algorithm</option>
                                    <option>Software Security</option>
                                    <option>SQA</option>
                              
                              
                                  </select>
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
    </body>
</html>
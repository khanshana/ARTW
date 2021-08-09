<?php include('header.php');?>

  <div class="heading-row mb-20">
    <div class="row align-item-center">
       <div class="col-lg-6">
          <h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-comment-question-outline"></i></span> Edit Question </h3>
       </div>
        <div class="col-lg-6">
         <div class="text-right">
           <div>
             <a href="faq-list.php" class="btn btn-common bg-gradient-primary">Go Back</a>
           </div>
         </div>
       </div>
  </div>
  </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
           <div class="card-body">
             <div class="row">
               <div class="col-md-12">
                 <div>
                   <div class="profile-form mt-20">
                      <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>FAQ Question</label>
                                    <input type="text" class="form-control" value="test">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Status</label>
                                   <div class="box">
                                     <select class="form-control">
                                      <option>Active</option>
                                      <option>Inactive</option>
                                    </select>
                                   </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                    <label>FAQ Answer</label>
                                    <textarea class="form-control" name="editor1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                                  </div>
                              </div>
                            </div>
                             <div class="popup-btn text-center">
                              <a href="" class="btn btn-common bg-gradient-primary">Update</a>
                              <a href="" class="btn btn-common bg-gradient-primary">Cancel</a>
                            </div>
                              
                        </div>
                       
                      </div>
                    
                      
                     
                     
                  
                     
                      
               

                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
      </div>
    </div>


<?php include('footer.php');?>

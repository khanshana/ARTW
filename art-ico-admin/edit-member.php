<?php include('header.php');?>

  <div class="heading-row mb-20">
    <div class="row align-item-center">
       <div class="col-lg-6">
          <h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-home"></i></span> Edit Member </h3>
       </div>
        <div class="col-lg-6">
         <div class="text-right">
           <div>
             <a href="our-team.php" class="btn btn-common bg-gradient-primary">Go Back</a>
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
                        <div class="col-md-4">
                             <div class="form-group">
                                <label>Service Image(Size in Pixel 370*220)</label>
                                <p class="note"></p>
                                 <div class="border-gray document-upload-box">
                                       <div class="text-left">
                                          <div class="uploader-img">
                                            <img id="user_profile_image_preview" src="assets/images/other/banner-dummy.jpg" class="m-t-5" >
                                          </div>
                                           <div class="input-group mb-3 mb-3 verification">
                                              <input type="text" class="form-control" readonly="" id="text_img_name" data-rule-required="true" data-msg-required="Please select your Id.">
                                              <span class="input-group-btn">
                                                <span class="btn btn-common bg-gradient-primary btn-file1">
                                                Upload <input type="file" id="imgInp6" value="" name="image" accept="image/*" onchange="readURL(this);">
                                                 <input type="hidden" name="old_image" value="">
                                                </span>   
                                              </span>
                                              <button class="btn btn-common bg-gradient-primary ml-15">Remove</button>
                                           </div>
                                       </div>
                                  </div>
                              </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                            
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="HALAM ROSE">
                                  </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" value="Director">
                                  </div>
                              </div>
                            
                              <div class="col-md-4">
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
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Linked In URL</label>
                                    <input type="text" class="form-control" value="https://www.linkedin.com/in/halamrose/">
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Service Content</label>
                                    <textarea class="form-control" name="editor1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                                  </div>
                              </div>
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


<?php include('footer.php');?>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
 <script>
        CKEDITOR.replace( 'editor1' );
</script>


  <script type="text/javascript" > 
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#user_profile_image_preview')
.attr('src', e.target.result)
.width(200)
.height(150);
};

reader.readAsDataURL(input.files[0]);
}
var src = $('#imgInp6').val(); // "static/images/banner/blue.jpg"
var tarr = src.split('/');      // ["static","images","banner","blue.jpg"]
var file = tarr[tarr.length-1]; // "blue.jpg"
var data = file.split('.')[0];  // "blue"

//alert(data);
$('#text_img_name').val(src);
}

</script>

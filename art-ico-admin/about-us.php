<?php include('header.php');?>

  <div class="heading-row mb-20">
    <div class="row align-item-center">
       <div class="col-lg-6">
          <h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-home"></i></span> About Us </h3>
       </div>
        <div class="col-lg-6">
         <div class="text-right">
           <div>
             <a href="dashboard.php" class="btn btn-common bg-gradient-primary">Go Back</a>
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
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Tittle</label>
                                    <input type="text" class="form-control">
                                  </div>
                              </div>
                            </div>
                             <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                  <label>File upload(Image Size : 700*600)</label>
                                  <input type="file" name="img[]" class="file-upload-default">
                                  <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                    <span class="input-group-append">
                                      <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>                           
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" name="editor1"></textarea>
                                  </div>
                              </div>
                            </div>
                            
                              
                        </div>
                        <div class="col-md-4">
                         
                        </div>
                      </div>
                    
                      
                     
                     
                  
                      <div class="popup-btn">
                        <a href="" class="btn btn-common bg-gradient-primary">Save</a>
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

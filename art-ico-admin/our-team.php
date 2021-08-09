<?php include('header.php');?>

  <div class="heading-row mb-20">
    <div class="row align-item-center">
       <div class="col-lg-6">
          <h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-home"></i></span> Our Team </h3>
       </div>
        <div class="col-lg-6">
         <div class="text-right">
           <div>
             <a href="add-new-member.php" class="btn btn-common bg-gradient-primary">Add new Member</a>
           </div>
         </div>
       </div>
    
  </div>
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th width="10%">S. No.</th>
                <th width="10%">Member Image</th>
                <th width="10%">Name</th>
                <th width="10%">Designation</th>
                <th width="30%">Content</th>
                <th width="10%">Linked In URL</th>
                <th width="10%">Status</th>
                <th width="10%">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <div class="normal-img">
                    <img src="assets/images/other/featur-1.jpg">
                  </div>
                </td>
                <td>HALAM ROSE</td>
                <td>Director</td>
                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</td>
                <td>https://www.linkedin.com/in/halamrose/</td>
                <td>Active</td>
                 <td>
                  <div class="edit-icons">
                   
                    <a href="edit-member.php" data-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil"></i></a>
                    <a href="" data-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-close"></i></a>
                  </div>
                </td>
              </tr>

                <tr>
                <td>2</td>
                <td>
                  <div class="normal-img">
                    <img src="assets/images/other/c1.jpg">
                  </div>
                </td>
                 <td>HALAM ROSE</td>
                <td>Director</td>
                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</td>
                <td>https://www.linkedin.com/in/simon-ludlam-ba281229/?originalSubdomain=uk</td>
               
                <td>Active</td>
                 <td>
                  <div class="edit-icons">
                   
                    <a href="edit-member.php" data-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil"></i></a>
                    <a href="" data-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-close"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php');?>

  <script>
$(document).ready( function () {
  $('.table').DataTable();
} );
</script>
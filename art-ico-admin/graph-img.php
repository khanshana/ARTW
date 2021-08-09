<?php include('header.php');?>

  <div class="heading-row mb-20">
    <div class="row align-item-center">
       <div class="col-lg-6">
          <h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-file-image"></i></span> Financials Graph </h3>
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
                <th width="40%">Graph Image</th>
                <th width="40%">Graph Tittle</th>
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
                <td>Test Image</td>
               
                 <td>
                  <div class="edit-icons">
                    
                    <a href="edit-graph.php" data-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil"></i></a>
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
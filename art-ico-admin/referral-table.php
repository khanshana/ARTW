<?php include('header.php');?>



   <div class="heading-row mb-20">
    <div class="row align-item-center">
       <div class="col-lg-6">
          <h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-account"></i></span> Referral <small>(All figures are in ARTW)</small> </h3>
       </div>
       
  </div>
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
                               <div class="card-header">
                               <div class="row">
                                 <div class="col-md-2">
                                      <div class="form-group">
                                       <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">From</span>
                                  </div>
                                  <input type="text" class="form-control" id="datepicker" placeholder="Date">
                                </div>
                            </div>
                      </div>
                      <div class="col-md-2">
                            <div class="form-group">
                             <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">To</span>
                        </div>
                        <input type="text" class="form-control" id="datepicker1" placeholder="Date">
                      </div>
                            </div>
                      </div>
                       <div class="col-md-2">
                            <div class="form-group">
                              <select id="select-new2" class="form-control">
                                  <option>Amount</option>
                                  <option>50,000</option>
                                  <option>1,00,000</option>
                                  <option>10,000</option>
                                </select>
                            </div>
                      </div>
                       <div class="col-md-2">
                            <div class="form-group">
                              <select id="select-new3" class="form-control">
                                  <option>Balance</option>
                                  <option>50,000</option>
                                  <option>50,000</option>
                                  <option>50,000</option>
                                </select>
                            </div>
                      </div>
                      
                   </div>
                   </div>
        <div class="card-body table-responsive">
          <table class="table">
            <thead>
               <tr>
                  <th width="10%" class="border-top-0">S.No</th>
                  <th width="15%" class="border-top-0">Date</th>
                  <th width="15%" class="border-top-0">Reffered By</th>
                  <th width="15%" class="border-top-0">Reffered To</th>
                  <th width="15%" class="border-top-0">Register Date</th>
                  <th width="10%" class="border-top-0"><span class="green-text">Earned</span></th>
                  <th width="10%" class="border-top-0"><span class="orange-text">Spent</span></th>
                  <th width="10%" class="border-top-0">Balance</th>    
                  </tr>
            </thead>
            <tbody>
               <tr>
                                <td width="10%">1</td>
                                <td width="15%">27,Apr 2021, 6:45:54</td>
                                <td width="15%">xyz</td>
                                <td width="15%">ABCd</td>
                                <td width="15%">27,Apr 2021, 6:45:54</td>
                                <td width="10%">1000 ATRW</td>
                                <td width="10%">1000 ATRW</td>
                                <td width="10%">1000 ATRW</td>
                              </tr>

                              <tr>
                                <td width="10%">1</td>
                                <td width="15%">27,Apr 2021, 6:45:54</td>
                                <td width="15%">xyz</td>
                                <td width="15%">ABCd</td>
                                <td width="15%">27,Apr 2021, 6:45:54</td>
                                <td width="10%">1000 ATRW</td>
                                <td width="10%">1000 ATRW</td>
                                <td width="10%">1000 ATRW</td>
                              </tr>


                              <tr>
                                <td width="10%">1</td>
                                <td width="15%">27,Apr 2021, 6:45:54</td>
                                <td width="15%">xyz</td>
                                <td width="15%">ABCd</td>
                                <td width="15%">27,Apr 2021, 6:45:54</td>
                                <td width="10%">1000 ATRW</td>
                                <td width="10%">1000 ATRW</td>
                                <td width="10%">1000 ATRW</td>
                              </tr>


                               <tr>
                                <td width="10%">1</td>
                                <td width="15%">27,Apr 2021, 6:45:54</td>
                                <td width="15%">xyz</td>
                                <td width="15%">ABCd</td>
                                <td width="15%">27,Apr 2021, 6:45:54</td>
                                <td width="10%">1000 ATRW</td>
                                <td width="10%">1000 ATRW</td>
                                <td width="10%">1000 ATRW</td>
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
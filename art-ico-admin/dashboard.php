<?php include('header.php');?>

  <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard </h3>
  </div>
 <div class="row dashboard-row">
              <div class="col-md-2 stretch-card grid-margin">
                 <a href="">
                   <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total ARTW Sold 
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                    <h2 class="mb-5">$ 15,0000</h2>
                  </div>
                </div>
                 </a>
              </div>
              <div class="col-md-2 stretch-card grid-margin">
                 <a href="">
                   <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">ARTW sold this month 
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">

                    <h2 class="mb-5">$ 15,0000</h2>
                  </div>
                </div>
                 </a>
              </div>
              <div class="col-md-2 stretch-card grid-margin">
                <a href="">
                  <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">ARTW Balance with Admin 
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                    <h2 class="mb-5">$ 95,5741</h2>
                  </div>
                </div>
                </a>
              </div>
               <div class="col-md-2 stretch-card grid-margin">
                 <a href="">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                      <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Users Registered
                      </h4>
                      <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                      <h2 class="mb-5">$ 15,0000</h2>
                    </div>
                  </div>
                 </a>
              </div>
              <div class="col-md-2 stretch-card grid-margin">
                <a href="">
                  <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Users registered this month 
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                    <h2 class="mb-5">$ 45,6334</h2>
                  </div>
                </div>
                </a>
              </div>
               <div class="col-md-2 stretch-card grid-margin">
                 <a href="">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                      <div class="card-body">
                        <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total ARTW Rewards Distributed
                        </h4>
                        <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                        <h2 class="mb-5">$ 45,6334</h2>
                      </div>
                    </div>
                 </a>
              </div>
             <!--  <div class="col-md-2 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Total ARTW Rewards Distributed
                    </h4>
                    <img src="assets/images/meta-icon.png" class="img-fluid icon-img" data-toggle="tooltip" data-placement="top" title="Metamask">
                    <img src="assets/images/bnb-icon.png" class="img-fluid icon-img" data-toggle="tooltip" data-placement="top" title="BSC Wallet">

                   
                    <img src="assets/images/trust-icon.png" class="img-fluid icon-img" data-toggle="tooltip" data-placement="top" title="Trust Wallet">
                    
                  </div>
                </div>
              </div>
              -->

            </div>
           <div class="row">
             <div class="col-md-12">
               <div class="card">
                <div class="card-header">
                     <div class="row">
                      <div class="col-md-2">
                            <div class="form-group">
                              <select id="select-new" class="form-control">
                                  <option>Select Month</option>
                                  <option>Jan</option>
                                  <option>Feb</option>
                                  <option>Mar</option>
                                </select>
                            </div>
                      </div> 
                       <div class="col-md-2">
                            <div class="form-group">
                             <input type="text" class="form-control" id="datepicker" placeholder="Date">
                            </div>
                      </div> 
                         
                   </div>
                   </div> 
                 <div class="card-body">
                   <div id="curve_chart" style="width: 100%; height: 300px"></div>
                 </div>
               </div>
             </div>
           </div>
           
           

<?php include('footer.php');?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'ARTW Sold', 'ARTW Left', 'Users Registered' ],
          ['2004',  1000,      400, 300],
          ['2005',  1170,      460, 1400],
          ['2006',  660,       1120, 500],
          ['2007',  1030,      540, 1300],
          ['2008',  1030,      540, 1300],
          ['2009',  130,      1540, 1300],
          ['2010',  530,      540, 600],
          ['2017',  1030,      540, 1300]
        ]);

        var options = {
          title: '',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

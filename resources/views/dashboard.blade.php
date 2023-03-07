@extends('layout.fe')
@section('content')



<div class="page-body">
    <div class="container-fluid">        
      <div class="page-title">
        <div class="row">
          <div class="col-1">
          </div>
        </div>
      </div>
    </div>
<!-- Maps -->
<div class="container-fluid">
    <div class="row second-chart-list third-news-update">
        <div class="col-xl-20">
          <div class="card">
            <div class="card-header" style="margin-top: 0px">
              <font size="6" color="red"><i><h5>Partners Detail On Map</h5></i></font><span>Only pin my location</span>
            </div>
            <div class="card-body">
              <div class="map-js-height" id="map-canvas"></div>
            </div>
          </div>
        </div>   

        <!-- Maps -->

        <!-- -->
        <div class="col-xl-2 xl-25 chart_data_right box-col-10">
          <div class="card">
            <div class="card-body" style="height: 40px">
              <div class="media align-items-center" style="height: 10px">
                <img class="img-fluid for-light" src="../assets/albi/dashboard/Outlet.png" alt="image" height="50" width="50" style="margin-right: 10px">
                <div class="media-body right-chart-content" style="margin-top: 10px">
                  <span>Total Outlet<font color="red"><h5>3</h5></font></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 xl-25 chart_data_right second d-none"> 
          <div class="card">
            <div class="card-body" style="height: 40px">
              <div class="media align-items-center" style="height: 10px">
                <img class="img-fluid for-light" src="../assets/albi/dashboard/File_Check.png" alt="image" height="50" width="50" style="margin-right: 10px">
                <div class="media-body right-chart-content" style="margin-top: 10px"> 
                  <span>Total Transaksi</span><h5>2,233</h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-2 xl-25 chart_data_right box-col-10" >
          <div class="card">
            <div class="card-body" style="height: 40px">
              <div class="media align-items-center" style="height: 10px">
                <img class="img-fluid for-light" src="../assets/albi/dashboard/Shopping_Cart.png" alt="image" height="45" width="45" style="margin-right: 10px">
                <div class="media-body right-chart-content" style="margin-top: 10px">
                  <span>Total Omset</span><h5>Rp2,5M</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 xl-25 chart_data_right second d-none"> 
          <div class="card">
            <div class="card-body" style="height: 40px">
              <div class="media align-items-center" style="height: 10px">
                <img class="img-fluid for-light" src="../assets/albi/dashboard/Chart_Line.png" alt="image" height="45" width="45" style="margin-right: 10px">
                <div class="media-body right-chart-content" style="margin-top: 10px"> 
                  <span>Total Profit</span><h5>Rp502 JT</h5>
                </div>
              </div>
            </div>
          </div>
        </div>   

      <!-- -->

      <!-- Top Product -->

      <div class="col-xl-4 xl-20 appointment-sec box-col-6">
        <div class="row"> 
            <div class="col-xl-15 appointment">
              <div class="card">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <font size="6" color="red"><h3 class="m-0">Top 10 Products</h3></font>
                  </div>
                </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nama Produk</th>
                      <th class="text-end">Penjualan</th>				
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Produk ABC</td>
                        <td class="text-end">2.233.023</td>
                    </tr>
                    <tr>
                        <td>Produk DEF</td>
                        <td class="text-end">1.525.900</td>
                    </tr>
                    <tr>
                        <td>Produk GHI</td>
                        <td class="text-end">1.495.250</td>
                    </tr>
                    <tr>
                        <td>Produk JKLM</td>
                        <td class="text-end">1.205.890</td>
                    </tr>
                    <tr>
                        <td>Produk NOP</td>
                        <td class="text-end">924.412</td>
                    </tr>
                    <tr>
                        <td>Produk ABC</td>
                        <td class="text-end">2.233.023</td>
                    </tr>
                    <tr>
                        <td>Produk DEF</td>
                        <td class="text-end">1.525.900</td>
                    </tr>
                    <tr>
                        <td>Produk GHI</td>
                        <td class="text-end">1.495.250</td>
                    </tr>
                    <tr>
                        <td>Produk JKLM</td>
                        <td class="text-end">1.205.890</td>
                    </tr>
                    <tr>
                        <td>Produk NOP</td>
                        <td class="text-end">924.412</td>
                    </tr>
                  </tbody>
                </table>                      
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 xl-20 appointment-sec box-col-6">
        <div class="row"> 
            <div class="col-xl-15 appointment">
              <div class="card">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <font size="6" color="red"><h3 class="m-0">Top 10 Kategori</h3></font>
                  </div>
                </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nama Produk</th>
                      <th class="text-end">Penjualan</th>				
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Makanan dan Minuman</td>
                        <td class="text-end">2.233.023</td>
                    </tr>
                    <tr>
                        <td>Kategori A</td>
                        <td class="text-end">1.525.900</td>
                    </tr>
                    <tr>
                        <td>Kategori B</td>
                        <td class="text-end">1.495.250</td>
                    </tr>
                    <tr>
                        <td>Kategori C</td>
                        <td class="text-end">1.205.890</td>
                    </tr>
                    <tr>
                        <td>Kategori D</td>
                        <td class="text-end">924.412</td>
                    </tr><tr>
                        <td>Kategori E</td>
                        <td class="text-end">2.233.023</td>
                    </tr>
                    <tr>
                        <td>Kategori F</td>
                        <td class="text-end">1.525.900</td>
                    </tr>
                    <tr>
                        <td>Kategori G</td>
                        <td class="text-end">1.495.250</td>
                    </tr>
                    <tr>
                        <td>Kategori H</td>
                        <td class="text-end">1.205.890</td>
                    </tr>
                    <tr>
                        <td>Kategori I</td>
                        <td class="text-end">924.412</td>
                    </tr>
                  </tbody>
                </table>                      
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 xl-20 appointment-sec box-col-6">
        <div class="row"> 
          <div class="col-xl-15 appointment">
            <div class="card">
              <div class="card-header card-no-border">
                <div class="header-top">
                  <font size="6" color="red"><h3 class="m-0">Top 10 Pelanggan</h3></font>
                </div>
              </div>
            <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nama Produk</th>
                      <th class="text-end">Penjualan</th>				
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td> A</td>
                        <td class="text-end">2.233.023</td>
                    </tr>
                    <tr>
                        <td> B</td>
                        <td class="text-end">1.525.900</td>
                    </tr>
                    <tr>
                        <td> C</td>
                        <td class="text-end">1.495.250</td>
                    </tr>
                    <tr>
                        <td> D</td>
                        <td class="text-end">1.205.890</td>
                    </tr>
                    <tr>
                        <td> E</td>
                        <td class="text-end">924.412</td>
                    </tr><tr>
                        <td> F</td>
                        <td class="text-end">2.233.023</td>
                    </tr>
                    <tr>
                        <td> G</td>
                        <td class="text-end">1.525.900</td>
                    </tr>
                    <tr>
                        <td> H</td>
                        <td class="text-end">1.495.250</td>
                    </tr>
                    <tr>
                        <td> I</td>
                        <td class="text-end">1.205.890</td>
                    </tr>
                    <tr>
                        <td> J</td>
                        <td class="text-end">924.412</td>
                    </tr>
                  </tbody>
                </table>                      
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Top Product -->

      <!-- Daily Sales -->

      <div class="col-xl-8 xl-100 dashboard-sec box-col-10">
        <div class="card earning-card">
          <div class="card-body p-0">
                <div class="card-body">
                  <div class="header-top">
                     <font color="red"><i><h3 class="m-0">Daily Sales</h3></i></font>
                  </div>
                    <div class="table-resposive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr><th></th>
                                    <th>Nama Pelanggan</th>
                                    <th>No. Id Pelanggan</th>
                                    <th>Outlet</th>
                                    <th>Orders</th>
                                    <th>Total</th>
                                    <th>No.Transaksi</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Options</th>				
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <center><td><input type='checkbox' name='' /></td></center>
                                    <td>Produk ABC</td>
                                    <td>No.11320135</td>
                                    <td>Outlet A</td>
                                    <td><i class="icofont icofont-paper"></i></td>
                                    <td>Rp1.205.890</td>
                                    <td>#A251205251</td>
                                    <td>10/07/2021</td>
                                    <td><label class="badge badge-light-success">Done</label></td>
                                    <td><div class="dropdown" >
                                        <button class="btn-air-light txt-dark btn dropdown-toggle" id=""type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                      </div></td>
                                </tr>
                                <tr>
                                    <center><td><input type='checkbox' name='' /></td></center>
                                    <td>Produk DEF</td>
                                    <td>No.11344135</td>
                                    <td>Outlet B</td>
                                    <td><i class="icofont icofont-paper"></i></td>
                                    <td>Rp1.205.890</td>
                                    <td>#A251205251</td>
                                    <td>10/01/2023</td>
                                    <td><label class="badge badge-light-success">Done</label></td>
                                    <td><div class="dropdown">
                                        <button class="btn-air-light txt-dark btn dropdown-toggle" id=""type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                      </div></td>
                                </tr>
                                <tr>
                                    <center><td><input type='checkbox' name='' /></td></center>
                                    <td>Produk GHI</td>
                                    <td>No.11320441</td>
                                    <td>Outlet C</td>
                                    <td><i class="icofont icofont-paper"></i></td>
                                    <td>Rp1.205.890</td>
                                    <td>#A251205251</td>
                                    <td>10/12/2021</td>
                                    <td><label class="badge badge-light-success">Done</label></td>
                                    <td><div class="dropdown">
                                        <button class="btn-air-light txt-dark btn dropdown-toggle" id=""type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                      </div></td>
                                </tr>
                                <tr>
                                    <center><td><input type='checkbox' name='' /></td></center>
                                    <td>Produk JKLM</td>
                                    <td>No.11320514</td>
                                    <td>Outlet D</td>
                                    <td><i class="icofont icofont-paper"></i></td>
                                    <td>Rp1.205.890</td>
                                    <td>#A251205251</td>
                                    <td>01/03/2023</td>
                                    <td><label class="badge badge-light-success">Done</label></td>
                                    <td><div class="dropdown">
                                        <button class=" btn-air-light txt-dark btn dropdown-toggle" id=""type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                      </div></td>
                                </tr>
                                <tr>
                                    <center><td><input type='checkbox' name='' /></td></center>
                                    <td>Produk NOP</td>
                                    <td>No.11326617</td>
                                    <td>Outlet E</td>
                                    <td><i class="icofont icofont-paper"></i></td>
                                    <td>Rp1.205.890</td>
                                    <td>#A251205251</td>
                                    <td>10/02/2023</td>
                                    <td><label class="badge badge-light-success">Done</label></td>
                                    <td><div class="dropdown">
                                        <button class="btn-air-light txt-dark btn dropdown-toggle" id=""type="button" data-bs-toggle="dropdown" aria-expanded="false">Details</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- Daily Sales -->
@endsection
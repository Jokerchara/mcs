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
      <!-- Daily Sales -->

      <div class="col-xl-20 xl-200 dashboard-sec box-col-10">
        <div class="card earning-card">
          <div class="card-body p-0">
                <div class="card-body">
                    <div class="header-top">
                       <font color="grey"><i><h3 class="m-0">Daftar Pelanggan</h3></i></font>
                    </div>
                    <div style="margin: 10px">
                        <button class="btn btn-danger">Filter</button>
                        <button style="margin-left: 10px" class="btn btn-light " disabled="disabled">Reset</button>
                        <button style="margin-left: 10px" class="btn-delete-albi txt-primary btn dropdown-toggle" id=""type="button" data-bs-toggle="dropdown" aria-expanded="false"><b>Semua Outlet</b></button>
                    </div>
                    <div class="table-resposive">
                        <table class="display" id="basic-1">
                            <thead style="background-color: #f12b3f" class="txt-light">
                                <tr><th>No.</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>ID Pelanggan</th>
                                    <th>No. Telepon</th>
                                    <th>Input Dari</th>
                                    <th>Total Belanja</th>
                                    <th>Aksi <td><input type='checkbox' name='' /></th>				
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Albi</td>
                                    <td>Laki - Laki</td>
                                    <td>11326518671</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet A</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                            <a href="">
                                                <span class="dot-edit-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                                </span >
                                            </a>
                                            <a href="">
                                                <span class="dot-dial-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                                </span>
                                            </a>
                                            <a href="">
                                                <span class="dot-delete-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: red" class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                        </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Suci</td>
                                    <td>Perempuan</td>
                                    <td>11847518671</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet A</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                            <a href="">
                                                <span class="dot-edit-albi" style="text-align: center">
                                                    <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                                </span >
                                            </a>
                                            <a href="">
                                                <span class="dot-dial-albi" style="text-align: center">
                                                    <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                                </span>
                                            </a>
                                            <a href="">
                                                <span class="dot-delete-albi" style="text-align: center">
                                                    <i style="color: red" class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                        </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Luthfi</td>
                                    <td>Laki - Laki</td>
                                    <td>11326518671</td>
                                    <td>08518810064</td>
                                    <td><b><font color="red">Outlet B</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                            <a href="">
                                                <span class="dot-edit-albi" style="text-align: center">
                                                    <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                                </span >
                                            </a>
                                            <a href="">
                                                <span class="dot-dial-albi" style="text-align: center">
                                                    <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                                </span>
                                            </a>
                                            <a href="">
                                                <span class="dot-delete-albi" style="text-align: center">
                                                    <i style="color: red" class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                        </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Kazanova</td>
                                    <td>Laki - Laki</td>
                                    <td>11326516712</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet A</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                        <a href="">
                                            <span class="dot-edit-albi" style="text-align: center">
                                                <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                            </span >
                                        </a>
                                        <a href="">
                                            <span class="dot-dial-albi" style="text-align: center">
                                                <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                            </span>
                                        </a>
                                        <a href="">
                                            <span class="dot-delete-albi" style="text-align: center">
                                                <i style="color: red" class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Adrian</td>
                                    <td>Laki - Laki</td>
                                    <td>11326518671</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet B</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                        <a href="">
                                            <span class="dot-edit-albi" style="text-align: center">
                                                <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                            </span >
                                        </a>
                                        <a href="">
                                            <span class="dot-dial-albi" style="text-align: center">
                                                <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                            </span>
                                        </a>
                                        <a href="">
                                            <span class="dot-delete-albi" style="text-align: center">
                                                <i style="color: red" class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Zea</td>
                                    <td>Perempuan</td>
                                    <td>11326518671</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet A</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                        <a href="">
                                            <span class="dot-edit-albi" style="text-align: center">
                                                <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                            </span >
                                        </a>
                                        <a href="">
                                            <span class="dot-dial-albi" style="text-align: center">
                                                <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                            </span>
                                        </a>
                                        <a href="">
                                            <span class="dot-delete-albi" style="text-align: center">
                                                <i style="color: red" class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Delino</td>
                                    <td>Laki - Laki</td>
                                    <td>11326518671</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet B</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                        <a href="">
                                            <span class="dot-edit-albi" style="text-align: center">
                                                <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                            </span >
                                        </a>
                                        <a href="">
                                            <span class="dot-dial-albi" style="text-align: center">
                                                <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                            </span>
                                        </a>
                                        <a href="">
                                            <span class="dot-delete-albi" style="text-align: center">
                                                <i style="color: red" class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Ahlam</td>
                                    <td>Perempuan</td>
                                    <td>11326518671</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet B</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                        <a href="">
                                            <span class="dot-edit-albi" style="text-align: center">
                                                <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                            </span >
                                        </a>
                                        <a href="">
                                            <span class="dot-dial-albi" style="text-align: center">
                                                <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                            </span>
                                        </a>
                                        <a href="">
                                            <span class="dot-delete-albi" style="text-align: center">
                                                <i style="color: red" class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Sanggit</td>
                                    <td>Perempuan</td>
                                    <td>11326518671</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet A</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                        <a href="">
                                            <span class="dot-edit-albi" style="text-align: center">
                                                <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                            </span >
                                        </a>
                                        <a href="">
                                            <span class="dot-dial-albi" style="text-align: center">
                                                <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                            </span>
                                        </a>
                                        <a href="">
                                            <span class="dot-delete-albi" style="text-align: center">
                                                <i style="color: red" class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </form><td><input type='checkbox' name='' /></td></td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Julian</td>
                                    <td>Laki - Laki</td>
                                    <td>11326518671</td>
                                    <td>085158810064</td>
                                    <td><b><font color="red">Outlet B</font></b></td>
                                    <td>Rp25.050.250</td>
                                    <td><form action="" method="">
                                        <a href="">
                                            <span class="dot-edit-albi" style="text-align: center">
                                                <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                            </span >
                                        </a>
                                        <a href="">
                                            <span class="dot-dial-albi" style="text-align: center">
                                                <i style="color: rgb(0, 185, 0)" class="fa fa-phone"></i>
                                            </span>
                                        </a>
                                        <a href="">
                                            <span class="dot-delete-albi" style="text-align: center">
                                                <i style="color: red" class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </form><td><input type='checkbox' name='' /></td></td>
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
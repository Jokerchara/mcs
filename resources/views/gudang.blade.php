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
                    <div class="header-top mb-4">
                       <font color="grey"><i><h3 class="m-0">Daftar Gudang & Outlet</h3></i></font>
                    </div>
                    <div style="margin: 10px">
                        <a class="btn btn-outline-success" href="#"><i style="color: rgb(0, 185, 0)" class="icon-export" id=""> </i>  Import</a>
                        <a style="margin-left: 10px" class="btn btn-outline-success" href="#"><i style="color: rgb(0, 185, 0)" class="icon-import" id=""> </i>  Upload</a>
                        <a style="margin-left: 10px" class="btn-kanan-albi btn btn-danger txt-light" id="" type="a" href="/tambahgudang"><i style="color: white" class="fa fa-plus-square-o" id=""></i> Cabang Baru</a>
                    </div>
                    <div class="table-resposive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr><th>Kode</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Penanggung Jawab</th>
                                    <th>No. Telepon</th>
                                    <th>Status</th>
                                    <th>Aksi</th>				
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>G001</td>
                                    <td>Gudang Hub A</td>
                                    <td>Jl.Gandasar I No.1 RT01 RW01</td>
                                    <td>Rohiman</td>
                                    <td>0813166971313</td>
                                    <td><label class="badge badge-light-success"><b>Aktif</b></label></td>
                                    <td><form action="" method="">
                                            <a href="">
                                                <span class="dot-edit-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                                </span >
                                            </a>
                                            <a href="">
                                                <span class="dot-delete-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: red" class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>T001</td>
                                    <td>Outlet A</td>
                                    <td>Jl.terusan Jakarta No.175A</td>
                                    <td>Suwardi</td>
                                    <td>084649731469</td>
                                    <td><label class="badge badge-light-success"><b>Aktif</b></label></td>
                                    <td><form action="" method="">
                                            <a href="/editgudang">
                                                <span class="dot-edit-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                                </span >
                                            </a>
                                            <a href="">
                                                <span class="dot-delete-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: red" class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>T002</td>
                                    <td>Outlet B</td>
                                    <td>Jl.Dago</td>
                                    <td>Wisnu</td>
                                    <td>082241649763</td>
                                    <td><label class="badge badge-light-success"><b>Aktif</b></label></td>
                                    <td><form action="" method="">
                                            <a href="">
                                                <span class="dot-edit-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                                </span >
                                            </a>
                                            <a href="">
                                                <span class="dot-delete-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: red" class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>T003</td>
                                    <td>Outlet C</td>
                                    <td>Jl.Gandasar I No.1 RT01 RW01</td>
                                    <td>Luthfi</td>
                                    <td>08213461114679</td>
                                    <td><label class="badge badge-light-success"><b>Aktif</b></label></td>
                                    <td><form action="" method="">
                                            <a href="">
                                                <span class="dot-edit-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: rgb(32, 196, 255)" class="fa fa-pencil"></i>
                                                </span >
                                            </a>
                                            <a href="">
                                                <span class="dot-delete-albi" style="text-align: center" style="text-align: center">
                                                    <i style="color: red" class="fa fa-trash"></i>
                                                </span>
                                            </a>
                                        </form>
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
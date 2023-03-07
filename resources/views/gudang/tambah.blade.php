@extends('layout.fe')
@section('content')
<div class="page-body">

    <div class="col-xl-20 xl-200 dashboard-sec box-col-10">
        <div class="card-body p-0">
            <div class="card-body">
                <div style="margin: 10px">
                    <a href="/gudang" style="color: rgb(165, 160, 160)"><i data-feather="chevron-left" id=""></i><font style="font-size: 0.7cm" class="ukuran-albi">Kembali</font></a>
                </div>
                <div class="col-sm-20 col-xl-20">
                    <div class="column">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form theme-form">
                                        <div class="card-body">
                                            <div class="row">

                                                <!-- Kiri -->
                                                <div class="col">
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Kode</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Nama</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" data-bs-original-title="" title="">
                                                            <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Tipe</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select" id="exampleFormControlSelect7">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Berdiri Sejak</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control digits" type="date"  data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Kiri -->

                                                <!-- Kanan -->
                                                <div class="col">
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Penanggung Jawab</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select" id="exampleFormControlSelect7">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Kode Karyawan</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text"  data-bs-original-title="" title="">
                                                            <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Jabatan/Divis</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text" placeholder="Password input" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">No.Handphone</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control digits" type="number" placeholder="Number" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Atas -->

                                        <div>
                                            <label style="color: red">_________________________________________________________________________________________________</label>
                                        </div>

                                        <!-- Bawah -->
                                        <div class="card-body">
                                            <div class="row">

                                                <!-- Kiri -->
                                                <div class="col">
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" data-bs-original-title="" title="">
                                                            <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" rows="6" cols="7"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Kiri -->

                                                <!-- Kanan -->
                                                <div class="col">
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Kelurahan</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Kecamatan</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" placeholder="Type your title in Placeholder" data-bs-original-title="" title="">
                                                            <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Kota</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text" placeholder="Password input" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Provinsi</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control digits" type="text" placeholder="Number" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label">Kode Pos</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control digits" type="text" placeholder="Number" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Bawah -->
                                            
                                            <div class="row">
                                                
                                                <div class="col">
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" rows="8" cols="10"></textarea>
                                                        </div>
                                                    </div>

                                                <div class="col">
                                                    <div class="mb-2">
                                                        <label class="col-sm-2 col-form-label">Galeri/Foto</label>
                                                        <button class="btn btn-outline-ligth-2x txt-dark btn-kanan-albi" style="margin-left: 10px" type="submit" data-bs-original-title="" title="">Hapus Foto</button>
                                                        <button class="btn btn-danger btn-kanan-albi" type="submit" data-bs-original-title="" title=""><i class="fa fa-plus-square-o"></i> Tambah Foto</button>
                                                    </div>
                                                    <div class="row my-gallery gallery" id="aniimated-thumbnials" itemscope="">
                                                        <figure class="col-md-4 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope="">
                                                            <a href="../assets/images/big-lightgallry/08.jpg" itemprop="contentUrl" data-size="1600x950" data-bs-original-title="" title="">
                                                                <div>
                                                                    <img style="width: 8.7cm" src="../assets/images/lightgallry/08.jpg" itemprop="thumbnail" alt="Image description">
                                                                </div>
                                                            </a>
                                                            <figcaption itemprop="caption description">Image caption  1</figcaption>
                                                        </figure>
                                                        <figure class="col-md-4 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope="">
                                                            <a href="../assets/images/big-lightgallry/09.jpg" itemprop="contentUrl" data-size="1600x950" data-bs-original-title="" title="">
                                                                <div>
                                                                    <img style="width: 8.7cm" src="../assets/images/lightgallry/09.jpg" itemprop="thumbnail" alt="Image description">
                                                                </div>
                                                            </a>
                                                            <figcaption itemprop="caption description">Image caption  2</figcaption>
                                                        </figure>
                                                        <figure class="col-md-4 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope="">
                                                            <a href="../assets/images/big-lightgallry/010.jpg" itemprop="contentUrl" data-size="1600x950" data-bs-original-title="" title="">
                                                                <div>
                                                                    <img style="width: 8.7cm" src="../assets/images/lightgallry/010.jpg" itemprop="thumbnail" alt="Image description">
                                                                </div>
                                                            </a>
                                                            <figcaption itemprop="caption description">Image caption  3</figcaption>
                                                        </figure>
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <div class="mb-3 mt-3">
                                                        <button class="cctv-albi btn-lg btn-xs" type="submit" data-bs-original-title="" style="size: 1cm" title=""><img style="width: 30px" src="../assets/albi/cctv.png"> <font color="white">Live CCTV Toko</font></button>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Masukan link CCTV</label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control digits" type="text" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                                  <!-- pswp-->
                                                  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <!-- Background of PhotoSwipe.It's a separate element, as animating opacity is faster than rgba().
                                                    -->
                                                    <div class="pswp__bg"></div>
                                                    <!-- Slides wrapper with overflow:hidden.-->
                                                    <div class="pswp__scroll-wrap">
                                                      <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                                                      <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                                                      <div class="pswp__container">
                                                        <div class="pswp__item"></div>
                                                        <div class="pswp__item"></div>
                                                        <div class="pswp__item"></div>
                                                      </div>
                                                      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                                                      <div class="pswp__ui pswp__ui--hidden">
                                                        <div class="pswp__top-bar">
                                                          <!-- Controls are self-explanatory. Order can be changed.-->
                                                          <div class="pswp__counter"></div>
                                                          <i class="pswp__button pswp__button--close" title="Close (Esc)"></i>
                                                          <button class="pswp__button pswp__button--share" title="Share"></button>
                                                          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                                          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                                          <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                                                          <!-- element will get class pswp__preloader--active when preloader is running-->
                                                          <div class="pswp__preloader">
                                                            <div class="pswp__preloader__icn">
                                                              <div class="pswp__preloader__cut">
                                                                <div class="pswp__preloader__donut"></div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                          <div class="pswp__share-tooltip"></div>
                                                        </div>
                                                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                                                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                                                        <div class="pswp__caption">
                                                          <div class="pswp__caption__center"></div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>  
                                                  <!-- pswp -->

                                            </div>
                                            <!-- bawah -->

                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="card-body p-0">
              <div class="card-body mb-2">
                <div class="mb-2">
                    <label class="col-sm-4 col-form-label"><h3>Daftar Karyawan</h3></label>
                    <button class="btn btn-danger btn-kanan-albi" type="submit" data-bs-original-title="" title=""><i class="fa fa-plus-square-o"></i> Karyawan</button>
                </div>
                  <div class="table-resposive">
                      <table class="display" id="basic-1">
                          <thead>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

@endsection
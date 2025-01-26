
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?php echo $title; ?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url('back/dashboard') ?>">Dashboard</a></li>
                                <li><span><?php echo $title; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                             
                        </div>
                    </div>
                </div>
            </div>
          
             <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                               
                                <div class="data-tables">
                                    <p>
                                       <a href="<?php echo base_url('back/berita/tambah') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Berita</a>
                                    </p>
                                    <br>

                                     <?php  
                                     if($this->session->flashdata('pesan')){
                                      echo '<div class="alert alert-success">';
                                      echo $this->session->flashdata('pesan');
                                      echo '</div>';
                                     }
                                     ?>
                                     <br>

                                    <table id="mytable" class="display nowrap" style="width:100%">
                                        <thead class="bg-light text-capitalize">
                                         <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Pengguna</th>
                                            <th>Hits</th>
                                            <th>Status</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                            <?php $no=1; foreach($berita as $p) { ?>
                                          <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $p->judul ?></td>
                                            <td><?php echo $p->nama_kategori_berita ?></td>
                                            <td><?php echo $p->pengguna ?></td>
                                            <td><?php echo $p->hits ?></td>
                                            <td><?php echo $p->status ?></td>
                                              <td> <a href="<?php echo base_url('upload/berita/'.$p->gambar) ?>" target="_blank" title="Lihat Gambar"><img src="<?php echo base_url('upload/berita/thumbs/'.$p->gambar) ?>" class="img img-thumbnail text-center" width="100"></a></td>
                                              <td>
                                                <a href="<?php echo base_url('back/berita/edit/'.$p->id_berita) ?> " class="btn btn-primary btn-xs" ><i class="fa fa-edit"></i> Edit</a>
                                                <a href="<?php echo base_url('back/berita/delete/'.$p->id_berita) ?> " class="btn btn-danger btn-xs" onclick="return confirm('Yakin data akan dihapus?')"><i class="fa fa-trash"></i> Hapus</a>
                                              </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                   
                </div>
            </div>
        </div>
     
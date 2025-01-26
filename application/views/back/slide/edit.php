<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title"><?php echo $title; ?></h4>
                            <hr>

                     <?php 
                        if(isset($error)){
                          echo '<p class="alert alert-warning">';
                          echo $error;
                          echo '</p>';
                        }

                        echo validation_errors('<div class="alert alert-success">','</div>');
                        echo form_open_multipart(base_url('back/slide/edit/'.$slide->id_slide),' class="form-horizontal"');
                        ?>
                        <form class="form-horizontal">
                            <div class="form-group">
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" minlength="3" placeholder="Masukkan Nama" value="<?php echo $slide->nama ?>" required>
                              </div>
                            </div>
                            
                             <div class="form-group">
                               <div class="col-sm-10">
                                  <textarea name="deskripsi" class="form-control" minlength="4" placeholder="Masukkan Deskripsi" required> <?php echo $slide->deskripsi ?></textarea>
                               </div>
                            </div>

                            <div class="form-group"> 
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="kategori" minlength="4" placeholder="Masukkan Kategori" value="<?php echo $slide->kategori ?>" >
                              </div>
                            </div>

                             <div class="form-group"> 
                              <div class="col-sm-10">
                                <input type="number" class="form-control" name="urutan" minlength="1" placeholder="Masukkan Urutan" value="<?php echo $slide->urutan ?>" required>
                              </div>
                            </div>

                              <div class="form-group"> 
                                <div class="col-sm-10">
                                 <input type="file" name="gambar" class="form-control">
                                </div>
                              </div>
                              <hr>
                             <div class="form-group">
                                <button type="submit" class="btn btn-success btn-md" name="submit"><i class="fa fa-save"></i> Simpan</button>
                                &nbsp; &nbsp;&nbsp;
                                <a href="<?php echo base_url('back/slide') ?>" class="btn btn-danger" name="reset"><i class="fa fa-retweet"></i> Kembali</a>
                             </div>
                              <!-- /.box-footer -->
                        </form>
                        <?php echo form_close(); ?>      
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->


                   
            </div>
        </div>
    </div>
</div>
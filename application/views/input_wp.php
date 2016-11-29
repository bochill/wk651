<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('head/head'); ?>

<body>

<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>Waskon 651
            <p class="lead">asasa</p>
          </h1>
        </div>
        <div class="col-md-5">
            <div class="well well-sm"> 
              <div class="row">
                <div class="col-sm-4">
        	      	<!--<img src="<?php echo base_url('assets/images/logo_menkeu.png');?>" style="height:80px; width:80px" class="img-responsive">-->
                </div>
                <div class="col-sm-8" >
	              	<span style="font-size: 19px; font-weight: bold">KPP MADYA MALANG</span><br>Anda Login sbg, <strong><?php echo ucfirst($this->session->userdata('nama_wk')); ?></strong><br>
                  <p><script>show_hari(); </script></p>
                  <p id="demo"></p>                  
                </div>
              </div>
            </div>
        </div>
      </div><!-- /row --> 
  </div><!--/container-->
</div><!--/masthead-->

<!--main-->
<div class="container">
	<div class="row">
      <!--left-->
      <?php $this->load->view('left_navbar'); ?>
      <!--/left-->
      
      <!--right-->
      <div class="col-md-9">
      <hr>                    
      <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #324e4e; color: #fff">
      <h3 class="panel-title">Rekam Profil : </h3>
      </div>
      <div class="panel-body" style="background-color: #b1cdcd;">

      <div><?php echo $this->session->flashdata('msg_sukses'); ?></div>
      <?php $attribute = array('class'=>'form-horizontal');
      echo form_open('Profil/index', $attribute);?>     
        <div class="form-group">
          <label for="npwp" class="col-sm-2 control-label">NPWP</label>
          <div class="col-sm-3">
            <input type="text" class="kode form-control" id="npwp" name="npwp">
            <span class="text-danger"><?php echo form_error('npwp'); ?></span>
          </div>
        </div>              
        <div class="form-group">
          <label for="nama_wp" class="col-sm-2 control-label">Nama WP</label>
          <div class="col-sm-6">
            <input type="text" class="nama form-control" id="nama_wp" name="nama_wp" readonly>
            <span class="text-danger"><?php echo form_error('nama_wp'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label for="nama_wp" class="col-sm-2 control-label">AR</label>
          <div class="col-sm-6">
            <input type="text" class="ar form-control" id="nama_ar" name="nama_ar" readonly>
            <span class="text-danger"><?php echo form_error('nama_wp'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
          <div class="col-sm-3">
            <textarea id="keterangan" name="keterangan" style="height: 120px; width: 440px"></textarea>
            <span class="text-danger"><?php echo form_error('Home/validasi'); ?></span>
          </div>          
          <input type="hidden" name="seksi" id="seksi" value="<?php echo set_value('seksi');?>">
          <input type="hidden" name="nip_perekam" value="<?php echo $this->session->userdata('username_wk');?>">
          <input type="hidden" name="perekam" value="<?php echo $this->session->userdata('nama_wk');?>">          
        </div>                                
        <div class="form-group">
          <label for="" class="col-sm-2 control-label"></label>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-default">Reset</button>            
          </div>
        </div>
        <?php echo form_close();?>

      </div>
    </div>

    <table id="table" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 12px;">
      <thead>
        <th>NPWP</th>
        <th>Nama</th>
        <th>AR</th>
        <th>Seksi</th>
        <th>Keterangan</th>
        <th>Edit / Delete</th>
      </thead>
      <tbody>
      <?php for($i=0; $i<count($profil); ++$i) {?>
        <tr>
          <td><?php echo $profil[$i]->npwp;?></td>
          <td><?php echo $profil[$i]->nama_wp;?></td>
          <td><?php echo $profil[$i]->nama_ar;?></td>
          <td><?php echo $profil[$i]->seksi;?></td>
          <td><?php echo $profil[$i]->keterangan;?></td>
          <td><a class="btn btn-sm btn-warning" href="#" title="detil"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;&nbsp;
          <a class="btn btn-sm btn-danger" href="<?php echo base_url('Profil/hapus/'.$profil[$i]->id);?>" title="print"><i class="glyphicon glyphicon-remove"></i></a></td>
        </tr>
      <?php }?>
      </tbody>
    </table>                

        </div><!--/right-->
  	</div><!--/row-->
</div><!--/container-->
<div class="clearfix"></div>
<?php $this->load->view('footer'); ?>

</body>
</html>
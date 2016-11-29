<!--left-->
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" data-spy="affix" data-offset-top="205" id="sidebar">
          <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading panel-heading-custom">
        <h4 class="panel-title">
          <a class="akord" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Profil WP</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
          <ul class="nav nav-stacked" id="sidebar">
            <li><a href="#">Rekam / Edit</a></li>
            <li><a href="#">Lihat Tabel</a></li>  
          </ul>
        </div>        
    </div>    
  </div>
    <div class="panel panel-default">
      <div class="panel-heading panel-heading-custom">
        <h4 class="panel-title">
          <a class="akord" data-toggle="collapse" data-parent="#accordion" href="#collapse1">User</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="nav nav-stacked" id="sidebar">
            <li><a href="<?php echo base_url('Home/index'); ?>">Ubah Password</a></li>
            <li><a href="<?php echo base_url('Auth/logout'); ?>">Logout</a></li>  
          </ul>
        </div>
      </div>
    </div>    
        </ul>
      </div><!--/left-->
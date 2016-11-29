<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WASKON 651</title>
            
    <link href="<?php echo base_url('assets/datatables/datatables.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/bootstrap-3.3.6/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/css/plugins/morris.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <!--css datepicker-->
    <link href="<?php echo base_url('assets/bootstrap-datepicker-1.5.1/css/bootstrap-datepicker3.css'); ?>" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.3.js');?>"></script>

    <!--datatables plugin-->
    <script src="<?php echo base_url('assets/datatables/datatables.js');?>"></script>
    <script src="<?php echo base_url('assets/datatables/FixedHeader-3.1.2/js/dataTables.fixedHeader.js');?>"></script>
    <script src="<?php echo base_url('assets/datatables/Buttons-1.2.2/js/dataTables.buttons.js');?>"></script>
    <script src="<?php echo base_url('assets/datatables/JSZip-2.5.0/jszip.js');?>"></script>
    <script src="<?php echo base_url('assets/datatables/Buttons-1.2.2/js/buttons.html5.js');?>"></script>
    <script src="<?php echo base_url('assets/datatables/Buttons-1.2.2/js/buttons.colVis.js');?>"></script>  

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js');?>"></script>

    <!--js datepicker-1.5.1 BS-->
    <script src="<?php echo base_url('assets/bootstrap-datepicker-1.5.1/js/bootstrap-datepicker.js');?>"></script>    

    <!-- number format jquery -->
    <script src="<?php echo base_url('assets/js/jquery.number.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>

    <!-- Morris Charts JavaScript -->
    <!--<script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    function show_hari() 
        {
            //membuat variabel bertipe array untuk nama hari
            var NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat","Sabtu");
            //membuat variabel bertipe array untuk nama bulan
            var NamaBulan = new Array("Januari", "Februari", "Maret", "April", "Mei","Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            var sekarang = new Date();
            var HariIni = NamaHari[sekarang.getDay()];
            var BulanIni = NamaBulan[sekarang.getMonth()];
            var tglSekarang = sekarang.getDate();
            var TahunIni = sekarang.getFullYear();
            document.write(tglSekarang + " " + BulanIni + " " + TahunIni);
        }

    $(document).on("click.autocomplete",function () {
        $('.kode').autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url
            minLength:0,
            delay:0,
            source:'<?php echo base_url('Home/get_wp'); ?>',   //nama source kita ambil             
            select:function(event, ui){
                $('#npwp').val(ui.item.npwp);
                $('#nama_wp').val(ui.item.nama_wp);
                $('#seksi').val(ui.item.seksi);
                $('#nama_ar').val(ui.item.nama_ar);                               
                }
            });
        });

    var table;
    $(document).ready(function() {
        table = $('#table').DataTable({
        "order": [],
        "fixedHeader": true,
        "columnDefs": [
        { 
          "targets": [0] , //last column
          "orderable": false, //set not orderable                    
        }
        ]                
        });
    });
      
    </script>
    <style type="text/css">
        
    </style>
</head>
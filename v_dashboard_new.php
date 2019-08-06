<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../../../../../almazing/application/modules/dashboard/views/assets/img">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>e-Payment System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link href="<?php echo base_url().'css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'css/ionicons.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'css/datatables/dataTables.bootstrap.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'css/daterangepicker/daterangepicker-bs3.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url().'css/load.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'css/AdminLTE.css' ?>" rel="stylesheet" type="text/css">

</head>

<body class="skin-blue">
<div id="loading" style="display:none"></div>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo site_url().'home' ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                JNE e-payment
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                    	<li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" title="Sisa Poin"><?php echo 'BRANCH : '.$this->session->userdata('branch')?></a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $this->session->userdata('user')?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url().'log_out'?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" disabled/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo site_url().'home'?>">
                                <i class="fa fa-money"></i> <span>Payment</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url().'history'?>">
                                <i class="fa fa-calendar"></i> <span>History</span>
                            </a>
                        </li>
                       <li>
                            <a href="<?php echo site_url().'report'?>">
                                <i class="fa fa-list-alt"></i> <span>Report</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        System
                        <small>Control panel</small>
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">
                    <?php echo $this->load->view($main_view)?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div>


      <script>
    	var getDataScan = "<?php echo site_url().'payment/c_payment/cek_data'?>";
		var url_get_count = "<?php echo site_url().'payment/c_payment/count'?>";
		var getDataType = "<?php echo site_url().'payment/c_payment/data_type'?>";
		var url_get_data = "<?php echo site_url().'payment/c_payment/get_data'?>";
		var url_get_amount = "<?php echo site_url().'payment/c_payment/amount'?>";
		var url_get_cnote = "<?php echo site_url().'payment/c_payment/list_cnote'?>";
		var proses = "<?php echo site_url().'payment/c_payment/proses'?>";
		var url_cekCd = "<?php echo site_url().'payment/c_payment/cek_cd'?>";
    </script>
    <script src="<?php echo base_url().'js/jquery.min.js' ?>"></script>

    <script src="<?php echo base_url().'js/bootstrap.min.js' ?>"></script>

	<script src="<?php echo base_url().'js/plugins/datatables/jquery.dataTables.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'js/plugins/datatables/dataTables.bootstrap.js' ?>" type="text/javascript"></script>

    <script src="<?php echo base_url().'js/plugins/input-mask/jquery.inputmask.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'js/plugins/input-mask/jquery.inputmask.date.extensions.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'js/plugins/input-mask/jquery.inputmask.extensions.js' ?>" type="text/javascript"></script>

    <script src="<?php echo base_url().'js/plugins/daterangepicker/daterangepicker.js' ?>"></script>
	<script src="<?php echo base_url().'js/AdminLTE/app.js' ?>"></script>
    <script src="<?php echo base_url().'js/my_script.js' ?>"></script>

    <script>
    // var ppm = setInterval(function(){
    //       $.ajax({
    //               type	: "POST",
    //               url 	: url_get_data,
    //               //data	: '',
    //               success	: function(data){
    //                   $("#cnote").html(data);
    //               }
    //            });
    // },500);
    // var ppm = setInterval(function(){
    //     $.ajax({
    //         type	: "POST",
    //         url 	: url_get_count,
    //         //data	: '',
    //         success	: function(data){
    //           $("#jum").html(data);
    //         }
    //        });
    // },500);

    	// var ppm = setInterval(function(){
    	// 	  $.ajax({
    	// 			  type	: "POST",
    	// 			  url 	: url_get_amount,
    	// 			  //data	: '',
    	// 			  success	: function(data){
    	// 				  $("#vamount").html(data);
    	// 				  $("#amount").html(data);
    	// 			  }
    	// 		   });
    	// },500);
      // var ppm = setInterval(function(){
      //     $.ajax({
      //         type	: "POST",
      //         url 	: url_get_cnote,
      //         //data	: '',
      //         success	: function(data){
      //           $("#dataCnote").html(data);
      //         }
      //        });
      // },500);
      // var ppm = setInterval(function(){
      // var trans_no = $("#trans_no").val();
      // var datastring = "trans_no=" + trans_no;
      //     $.ajax({
      //         type	: "POST",
      //         url 	: url_cekCd,
      //         data	: datastring,
      //         success	: function(data){
      //           if(data != ''){
      //              window.location.assign("https://e-payment.jne.co.id/wait/"+data);
      //           }
      //         }
      //        });
      // },7000);
function get_data() {
  $.ajax({
    type: "POST",
    url: url_get_data,
    success: function(data) {
      $("#cnote").html(data);
    }
  });
}

function get_count() {
  $.ajax({
    type	: "POST",
    url 	: url_get_count,
    //data	: '',
    success	: function(data){
      $("#jum").html(data);
    }
   });
}

function get_amount() {
  $.ajax({
      type	: "POST",
      url 	: url_get_amount,
      //data	: '',
      success	: function(data){
        $("#vamount").html(data);
        $("#amount").html(data);
      }
     });
}
function get_cnote() {
  $.ajax({
      type	: "POST",
      url 	: url_get_cnote,
      //data	: '',
      success	: function(data){
        $("#dataCnote").html(data);
      }
     });
}

function cek_cd(trans_no) {
  var datastring = "trans_no=" + trans_no;
  $.ajax({
      type	: "POST",
      url 	: url_cekCd,
      data	: datastring,
      success	: function(data){
        if(data != ''){
           window.location.assign("https://e-payment.jne.co.id/wait/"+data);
        }
      }
     });
}

function refresh_data() {
  get_data();
  get_count();
  get_amount();
  get_cnote();
}
function scan_new(no_scan){
	var datastring = "no_scan=" + no_scan;
	$.ajax({
			type	:'POST',
			url		: getDataScan,
			data	: datastring,
			dataType:'json',
			success	: function(data){
				if(data == 0){
					$('#myNotif').modal('show');
				}else if(data == 2){
					$('#myNotifEr').modal('show');
				}else if(data == 3){
					$('#myNotifEr2').modal('show');
				}else{
					$("#no_scan").val('');
					$("#payer").val(data.satu);
					$("#phone").val(data.dua);
          refresh_data();
		  }
	  }
});
}
          $(function() {
            $("#example1").dataTable({
      				"aaSorting": [[ 1, "desc" ]],
      			});
            refresh_data();

            $("#no_scan").bind('blur keyup', function(e) {
              if(e.type === 'keyup' && e.keyCode !== 10 && e.keyCode !== 13) return;
              var cnote = $(this).val();
              if (cnote != '') {
                scan_new(cnote);
              }
            });

              //Datemask dd/mm/yyyy
              $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
              //Datemask2 mm/dd/yyyy
              $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
              //Money Euro
              $("[data-mask]").inputmask();

              //Date range picker
              $('#reservation').daterangepicker();
              //Date range picker with time picker
              $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
              //Date range as a button
              $('#daterange-btn').daterangepicker(
                      {
                          ranges: {
                              'Today': [moment(), moment()],
                              'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                              'Last 7 Days': [moment().subtract('days', 6), moment()],
                              'Last 30 Days': [moment().subtract('days', 29), moment()],
                              'This Month': [moment().startOf('month'), moment().endOf('month')],
                              'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                          },
                          startDate: moment().subtract('days', 29),
                          endDate: moment()
                      },
              function(start, end) {
                  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
              }
              );

              //iCheck for checkbox and radio inputs
              $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                  checkboxClass: 'icheckbox_minimal',
                  radioClass: 'iradio_minimal'
              });
              //Red color scheme for iCheck
              $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                  checkboxClass: 'icheckbox_minimal-red',
                  radioClass: 'iradio_minimal-red'
              });
              //Flat red color scheme for iCheck
              $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                  checkboxClass: 'icheckbox_flat-red',
                  radioClass: 'iradio_flat-red'
              });

              //Colorpicker
              //$(".my-colorpicker1").colorpicker();
              //color picker with addon
              //$(".my-colorpicker2").colorpicker();

              //Timepicker
              //$(".timepicker").timepicker({
              //    showInputs: false
              //});
          });
      </script>


</body>
</html>

<div class="col-md-8">
  <div class="box box-primary col-md-6" >
        <div class="box-header" style="cursor: move;">
            <i class="fa fa-money"></i>
            <h3 class="box-title">Payment</h3>
        </div>
        <div class="box-body">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Connote Number..." id="no_scan">
                        <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="table-responsive">
                        <div id="cnote" style="overflow:scroll; overflow:auto; height:430px; border:1px solid; ">

                        </div>
                    </div>
                    <div><div id="jum"></div></div>
                </div>
        </div>
  </div>
</div>

<div class="col-md-4">
  <div class="box box-primary col-md-6">
        <div class="box-header">
            <!--<div class="pull-right box-tools">
                <div class="btn-group">
                    <button class="btn btn-danger" data-toggle="dropdown">PENDING</button>
                </div>
            </div>-->
        </div>
        <div class="box-body">
                <div class="form-group">
                      <div id="dataCnote"></div>
                </div>
                <div class="form-group">
                    <label>Transaction No</label>
                    <input type="text" class="form-control" id="trans_no" name="trans_no" value="<?php echo $no?>" readonly="readonly">
                </div>
                <div class="form-group">
               	  <label>Payer Name</label>
                  <input type="text" class="form-control" name="payername" required="" id="payer" placeholder='filled in payer name'>
              	</div>
              	<div class="form-group">
                  <label>Payer Phone Number</label>
                  <input type="text" class="form-control" name="phonenumber" required="" id="phone" placeholder='filled in payer phone'>
              	</div>
              	<div id="amount"></div>
        </div>
        <div class="box-footer clearfix">
            <button class="pull-right btn btn-success" onclick="sendPay()">Pay <i class="fa fa-arrow-circle-right"></i></button>
        </div>
  </div>
</div>


<div class="modal fade" id="myNotif" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
          Notification
          </h4>
        </div>
        <div class="modal-body">
        	<div class="alert alert-danger alert-dismissable">
                <i class="fa fa-ban"></i>
                <center><b>Connote Number is already exist!!</b></center>
            </div>
       </div>
      </div>
    </div>
</div>

<div class="modal fade" id="myNotifEr" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
          Notification
          </h4>
        </div>
        <div class="modal-body">
       		<div class="alert alert-danger alert-dismissable">
                <i class="fa fa-ban"></i>
                <center><b>Connote Number Not Available!!</b></center>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="myNotifEr2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
          Notification
          </h4>
        </div>
        <div class="modal-body">
       		<div class="alert alert-danger alert-dismissable">
                <i class="fa fa-ban"></i>
                <center><b>Connote Number has been packing list/cash register!!</b></center>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="myNotifEr3" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
          Notification
          </h4>
        </div>
        <div class="modal-body">
       		<div class="alert alert-danger alert-dismissable">
                <i class="fa fa-ban"></i>
                <center><b>Transaction does not exist!!</b></center>
            </div>
        </div>
      </div>
    </div>
</div>

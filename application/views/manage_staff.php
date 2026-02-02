<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Staff (<?php echo sizeof($staff) ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New Staff</a></h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Father's Name</th>
                                                    <th>E-Mail</th>
                                                    <th>Mobile No</th>
                                                    <th>Date of Birth</th>
                                                    <th>Join Date</th>
                                                    <th>Expreince</th>
                                                    <th>Payment</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                             <tbody>
                                            <?php 
                                            $i=1;
                                            foreach($staff as $s1)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $s1['name']; ?></td>
                                                    <td><?php echo $s1['fname']; ?></td>
                                                    <td><?php echo $s1['email']; ?></td>
                                                    <td><?php echo $s1['mobile_no']; ?></td>
                                                    <td><?php echo $s1['dob']; ?></td>
                                                    <td><?php echo $s1['join_date']; ?></td>
                                                    <td><?php echo $s1['exp']; ?></td>
                                                    <td><?php echo $s1['payment']; ?></td>
                                                     <td><input type="checkbox" class="change_status" data-table="staff" value="1" data-id="<?php echo $s1['id']  ?>" <?php if($s1['status']==1) { echo "checked"; } ?>  name="status_<?php echo $s1['id']  ?>" > Active</td>
                                                    <td>Active</td>
                                                    <td>   <a href="<?php echo base_url().'index.php/staff/delete_staff/'.$s1['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        <a href="<?php echo base_url().'index.php/staff/edit_staff/'.$s1['id'] ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                </tr>
                                                <?php
                                                $i++; 
                                            }
                                            ?>       
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
		</div>
		</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Staff</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/staff/manage_staff' ?>" id="add_Staff_form">
        <div class="form-group">
        	<label>Enter Staff Name</label>
        	<input type="text" name="name" required="required" class="form-control" id="name" placeholder="Enter Staff Name">
        </div>
        <div class="form-group">
            <label>Enter Father Name</label>
            <input type="text" name="fname" required="required" class="form-control" id="fname" placeholder="Enter Father Name">
        </div>
        <div class="form-group">
            <label>Enter E-Mail </label>
            <input type="email" name="email" required="required" class="form-control" id="email" placeholder="Enter E-Mail">
        </div>
        <div class="form-group">
            <label>Enter Mobile No </label>
            <input type="text" name="mobile_no" required="required" class="form-control" id="mobile_no" placeholder="Enter E-Mail">
        </div>
        <div class="form-group">
            <label>Enter Staff DOB</label>
            <input type="date" name="dob" required="required" class="form-control" id="dob" placeholder="Enter DOB">
        </div>
        <div class="form-group">
            <label>Enter Join Date</label>
            <input type="date" name="join_date" required="required" class="form-control" id="join_date" placeholder="Enter Staff Name">
        </div>
        <div class="form-group">
            <label>Enter Exprience</label>
            <input type="text" name="exp" required="required" class="form-control" id="exp" placeholder="Enter Staff Exprience">
        </div>
        <div class="form-group">
            <label>Enter Staff Payment</label>
            <input type="text" name="payment" required="required" class="form-control" id="payment" placeholder="Enter Staff PAyment">
        </div>
        <div class="form-group">
            <label>Enter Staff Other Information</label>
            <textarea name="staff_other_information" id="staff_other_information" class="form-control"></textarea>
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit">Add</button>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>
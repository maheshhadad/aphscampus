<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Edit Student</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row" >
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form action="<?php  echo base_url().'index.php/student/edit_student/'.$student_data['id'] ?>" id="edit_student_form">
                        <div class="form-group">
                            <label>Enter Student Name</label>
                            <input type="text" name="name" required="required" value="<?php echo $student_data['name'] ?>" class="form-control" id="sname" placeholder="Enter Student Name">
                        </div>
                        <div class="form-group">
                            <label>Enter Father Name</label>
                            <input type="text" name="fname" required="required" value="<?php echo $student_data['fname'] ?>" class="form-control" id="fname" placeholder="Enter Father Name">
                        </div>
                        <div class="form-group">
                            <label>Enter E-Mail </label>
                            <input type="email" name="email" required="required" value="<?php echo $student_data['email'] ?>" class="form-control" id="email_user" placeholder="Enter E-Mail">
                        </div>
                        <div class="form-group">
                            <label>Enter Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value=""> Select </option>
                                <?php 
                                foreach($all_category as $cat)
                                {
                                    ?>
                                    <option <?php if($student_data['category']==$cat['name']) { echo "selected"; } ?>><?php echo $cat['name']; ?></option>
                                    <?php 
                                }
                                ?>     
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Enter Class</label>
                            <select class="form-control" name="class" id="class">
                                <option value=""> Select </option>
                                <?php 
                                foreach($classes as $class)
                                {
                                    ?>
                                    <option <?php if($student_data['class']==$class['name']) { echo "selected"; } ?>><?php echo $class['name']; ?></option>
                                    <?php 
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Enter Student DOB</label>
                            <input type="date" name="dob" value="<?php echo $student_data['dob'] ?>" required="required" class="form-control" id="dob" placeholder="Enter DOB">
                        </div>
                        <div class="form-group">
                            <label>Enter Join Date</label>
                            <input type="date" name="join_date" value="<?php echo $student_data['join_date'] ?>" required="required" class="form-control" id="join_date" placeholder="Enter Student Name">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                       </form>   
                    </div>
                    <div class="col-sm-2"></div>     
                </div>
            </div>
		</div>
		</div>
</div>

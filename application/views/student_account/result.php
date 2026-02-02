<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Result</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Exam Name</th>
                                                    <th>Result</th>
                                                </tr>
                                            </thead>
                                             <tbody>
                                                <?php 
                                                $i=1;
                                                foreach($results as $result)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $result['exam_name'] ?></td>
                                                        <td><?php echo $result['result'] ?></td>
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

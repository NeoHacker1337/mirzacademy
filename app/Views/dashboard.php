<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>


<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1 text-center">Latest Enquiry</h2>


					<div class="table-responsive bs-example widget-shadow">
						<h4>Enquiry</h4>
						<table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Date & time</th>
                 <th>Enquiry Delete</th>
                </tr>

              </thead>
              <?php
              $sess =session();
              $db = \Config\Database::connect();
              $que=$db->query("select * from `enquiryform` ORDER BY id DESC; ");
              $row = $que->getResultArray();
              ?>
              <tbody><?php
              foreach($row as $data)
              {
                 ?>
                <tr>
                  <th scope="row"><?php echo $data['id'];?></th>
                  <td> <?php echo $data['firstname']; ?>&nbsp;<?php echo $data['lastname'];?> </td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['phone']; ?></td>
                  <td><?php echo $data['subject']; ?></td>
                <td><?php echo $data['message']; ?></td>
                <td><?php echo $data['timestamp']; ?></td>
                  <td><a href="delete_form?id=<?php echo $data['id'];?>">Delete Enquiry</a></td>
                </tr>
            <?php  } ?>
              </tbody>
             </table>
					</div>
				</div>
			</div>
		</div>


<?= $this->endSection() ?>

<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>


<div id="page-wrapper">
     <div class="main-page">
       <div class="tables">
         <h2 class="title1 text-center">Latest Subscriber</h2>


         <div class="table-responsive bs-example widget-shadow">
           <h4>Enquiry</h4>
           <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>Date & Time</th>
                 <th>Enquiry Delete</th>
                </tr>

              </thead>
              <?php
              $sess =session();
              $db = \Config\Database::connect();
              $que=$db->query("select * from `subscribe` ORDER BY id DESC; ");
              $row = $que->getResultArray();

              ?>
              <tbody><?php
              foreach($row as $data)
              {
                 ?>
                <tr>
                  <th scope="row"><?php echo $data['id'];?></th>

                  <td><?php echo $data['email']; ?></td>

                <td><?php echo $data['timestamp']; ?></td>
                  <td><a href="delete_subscriber?id=<?php echo $data['id'];?>">Delete Enquiry</a></td>
                </tr>
            <?php  } ?>
              </tbody>
             </table>
         </div>
       </div>
     </div>
   </div>





  <?= $this->endSection() ?>

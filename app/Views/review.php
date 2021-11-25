<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<br><br><br><br>
<section>
  <div class="container">
<div class="row">
  <div class="container mt-5">
    <div class="d-flex justify-content-center row">
      <?php
      $sess =session();
      $db = \Config\Database::connect();
      $que=$db->query("select * from `addreview` ");
      $row = $que->getResultArray();
      ?>

      <div class="col-8">
        <?php
        foreach($row as $data)

        {
         ?>
          <div class="d-flex flex-column comment-section" id="myGroup">
              <div class="bg-white p-2">
                  <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                      <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?php echo $data['firstname'];?> &nbsp;<?php echo $data['lastname'];?></span><span class="date text-black-50">Shared publicly - <?php echo $data['timestamp'];?></span></div>
                  </div>
                  <div class="mt-2">
                      <p class="comment-text"><?php echo $data['message'];?></p>
                  </div>
              </div>


              <div id="collapse-2" class="bg-light p-2 collapse" data-parent="#myGroup">
                  <div class="d-flex flex-row align-items-start"><i class="fa fa-facebook border p-3 rounded mr-1"></i><i class="fa fa-twitter border p-3 rounded mr-1"></i><i class="fa fa-linkedin border p-3 rounded mr-1"></i><i class="fa fa-instagram border p-3 rounded mr-1"></i><i class="fa fa-dribbble border p-3 rounded mr-1"></i> <i class="fa fa-pinterest-p border p-3 rounded mr-1"></i> </div>
              </div>
          </div><?php } ?>
      </div>

      <div class="col-md-4">
                    <div class="custom-form mt-4">
                      <h2>Add Your Review</h2>
                        <div id="message"></div>
                        <form method="post" action="<?php echo base_url('Home/addreview'); ?>" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">First Name</label>
                                        <input name="firstname" id="firstname" class="form-control" type="text" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Last Name</label>
                                        <input name="lastname" id="lastname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Email Address</label>
                                        <input name="email" id="email" class="form-control" type="text" required>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Your Message</label>
                                        <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-3 text-right">
                                    <input id="submit" name="send" class="submitBnt btn btn-primary btn-round" value="Send Message" type="submit">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>


                </div>
              </div>

    </div>
</div>

</div>
</div>
</section>


<?= $this->endSection() ?>

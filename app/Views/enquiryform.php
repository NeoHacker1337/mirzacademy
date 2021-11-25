<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<br><br><br><br>
<section>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Let's talk about everything!</h3>
                        <p class="text-muted f-17 mt-3"></p>

                        <img src="images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
                <div class="row mt-5 pt-4">
                  <div class="col-lg-6">
                      <div class="mt-4 home-img text-center">
                          <div class="animation-2"></div>
                          <div class="animation-3"></div>
                          <img src="<?php echo base_url('public/images/features/img-3.png');?>" class="img-fluid" alt="">
                      </div>
                  </div>

                  <div class="col-lg-6">
                      <div class="custom-form mt-4">
                          <div id="message"></div>
                          <form method="post" action="<?php echo base_url('Home/submitForm'); ?>" >
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
                                          <label class="contact-lable">Phone Number</label>
                                          <input name="phone" id="phone" class="form-control" type="text" required>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="form-group mt-3">
                                          <label class="contact-lable">Subject</label>
                                          <input name="subject" id="subject" class="form-control" type="text">
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
</section>


<?= $this->endSection() ?>

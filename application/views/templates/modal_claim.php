<div class="modal fade" id="modalClaim" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="modal-title">Solve a simple captcha and claim your reward!</h3></center>
        </div>
        <div class="modal-body">
            <section class="row">
                <center>
                    <div class="col-12"><?= $pub_claim1; ?></div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12">
                        <div id="acwidget"></div>
                    </div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12"><?= $pub_claim2; ?></div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12"><?= $pub_claim3; ?></div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12 centrage">
                        <?= form_open('claimval'); ?>
                        <?= form_submit(array(
                            'id' => 'submitclaim', 
                            'value' => '> > > > > C l a i m  > > > > > ', 
                            'class' => 'btn-claim'
                        ));?>
                        <?= form_close();?>
                    </div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12"><?= $pub_claim4; ?></div>
                </center>
            </section>
        </div>
      </div>  
    </div>
</div>

<div class="modal fade" id="modalClaimRetour" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h2 class="modal-title">Detail of your payment!</h2></center>
        </div>
        <div class="modal-body">
            <section class="row">
                <center>
                    <div id="retourclaim" class="retourclaim"></div>
                </center>
            </section>
        </div>
      </div>  
    </div>
</div>

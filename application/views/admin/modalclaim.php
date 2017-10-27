<?=form_open($param_URL.'/admin/modalclaim');?> 
<style>
div.centrage {
    text-align: center;
}
div span.gauche {
  float: left;
}
div span.droite {
  float: right;
}  
</style>  
<?=$modalRetour?> 
        <h3>
            Claim modal layout edit        <small></small><i class="fa fa-info-circle" style="color: #3C8DBC;" 
            title="Here you can edit you modal claim." data-toggle="tooltip" data-placement="right" aria-hidden="true"></i>
        </h3>  
          
        <div class="container">
            <section class="row">
                <center>
                    <div class="col-12"><?= form_textarea(array('name'=>'pub_claim1', 'class'=>'form-control', 'value'=>$pub_claim1, 'rows' => 4, 'cols' => 40))?></div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12">
                        <div class="centrage"><?=img('solvemedia.jpg', $alt = 'SolveMedia')?></div>
                    </div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12"><?= form_textarea(array('name'=>'pub_claim2', 'class'=>'form-control', 'value'=>$pub_claim2, 'rows' => 4, 'cols' => 40))?></div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12"><?= form_textarea(array('name'=>'pub_claim3', 'class'=>'form-control', 'value'=>$pub_claim3, 'rows' => 4, 'cols' => 40))?></div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12 centrage">
                        <?= form_submit(array(
                            'id' => 'submitclaim', 
                            'value' => '> > > > > C l a i m  > > > > > ', 
                            'class' => 'btn-claim',
                            'disabled' => 'disabled'
                        ));?>
                    </div>
                </center>
            </section>
            <section class="row">
                <center>
                    <div class="col-12"><?= form_textarea(array('name'=>'pub_claim4', 'class'=>'form-control', 'value'=>$pub_claim4, 'rows' => 4, 'cols' => 40))?></div>
                </center>
            </section>
                <?=form_submit(array('name'=>'envoi', 'value'=>'Save','class'=>'btn btn-success btn-lg'));?>
                <?=form_close();?>
</div>


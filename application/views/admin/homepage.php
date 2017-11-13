<?=form_open($param_URL.'/admin/homepage');?> 
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
        Homepage layout edit        <small></small><i class="fa fa-info-circle" style="color: #3C8DBC;" 
    title="Here you can edit you homepage." data-toggle="tooltip" data-placement="right" aria-hidden="true"></i>
</h3>
<div class="container">
      <section class="row">
          <center>
        <div class="col-12"><?= form_textarea(array('name'=>'pub_haut', 'class'=>'form-control', 'value'=>$pub_haut, 'rows' => 4, 'cols' => 40))?></div>
        </center>
      </section>
</div>

<div class="container-fluid">
      <div class="row">       
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    
            <center>
               <div><?= form_textarea(array('name'=>'pub_gauche', 'class'=>'form-control', 'value'=>$pub_gauche, 'rows' => 25, 'cols' => 10))?></div>
               </center> 
        </div>

<div class="col-lg-6">
    
    <div class="container-fluid">
        
        <div class="row">
            <br/>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "><span class="droite"><?php echo img('logo-90X90.png', 'logo') ?></span></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="gauche"><?php echo img('logo-mirroir-90X90.png', 'logo-mirroir'); ?></span></div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage"><?php echo img('bitcoin.png', 'Bitcoin') ?></div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage"><?php echo img('bitcoin.png', 'Bitcoin') ?></div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage textecss">Claim  <?= $param_valeur; ?> 
                <?=$param_monnaie_cent?> every
            <?= $param_temps; ?> minutes</div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage textecss"><?= form_textarea(array('name'=>'texte_centre_sup', 'class'=>'form-control', 
                'value'=>$texte_centre_sup, 'rows' => 2, 'cols' => 40))?> </div>
        </div>
        
        <?= form_open('claim'); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage">
                <?php echo form_input(array('name'=>'inputwallet','value'=>'','class'=>'inputwallet', 'placeholder'=>'', 'readonly'=>'true'))?><br />
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="droite"><?= form_textarea(array('name'=>'pub_centre1', 'class'=>'form-control', 'value'=>$pub_centre1, 'rows' => 4, 'cols' => 40))?></span></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="gauche"><?= form_textarea(array('name'=>'pub_centre2', 'class'=>'form-control', 'value'=>$pub_centre2, 'rows' => 4, 'cols' => 40))?></span></div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage">
                <?= form_submit(array(
                    'name' => 'btnclaim',
                    'id' => 'rien', 
                    'value' => '> > > > > A c c e s  C l a i m  > > > > > ', 
                    'class' => 'btn-claim',
                    'disabled' => 'disabled'
            ));?>
            </div> 
        </div>
      
        <div class="row">  
            <div class="col-lg-6col-md-6 col-sm-6 col-xs-6"><span class="droite"><?= form_textarea(array('name'=>'pub_centre3', 'class'=>'form-control', 'value'=>$pub_centre3, 'rows' => 4, 'cols' => 40))?></span></div>
            <div class="col-lg-6col-md-6 col-sm-6 col-xs-6"><span class="gauche"><?= form_textarea(array('name'=>'pub_centre4', 'class'=>'form-control', 'value'=>$pub_centre4, 'rows' => 4, 'cols' => 40))?></span></div>
        </div>
        <?= form_close();?>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage">
                <?php 
                echo form_label('Earn ' . $param_referal . '% referral commission'); 
                echo '<br/>';
              
                    echo form_input(array('name'=>'referal','value'=>$param_URL . '/Your_Address','class'=>'referal', 'placeholder'=>'', 'readonly'=>'true'));
               
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Display list of payouts</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= form_checkbox(array('class'=>'listpayout', 'name'=>'param_payouts_enable', 'value'=>1, 'checked'=>$param_payouts_enable));?>
                    <div class="form-group">
                        <?=form_label('Number of displayed payment', 'param_payouts_nb');?>
                        <?= form_input(array('type'=>'number', 'name'=>'param_payouts_nb', 'class'=>'form-control', 'value'=>$param_payouts_nb, 
                            'min'=>'1', 'max'=>'10', 'style'=>'width:55px; height:20px; border-radius: 10px;'))?>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Claim number display</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= form_checkbox(array('class'=>'listclaim', 'name'=>'param_list_claim_enable', 'value'=>1, 'checked'=>$param_list_claim_enable));?>         
                </div>
            </div>
        </div>
        
    </div>
</div>
          
          <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    
    
     <center>
        <div><?= form_textarea(array('name'=>'pub_droite', 'class'=>'form-control', 'value'=>$pub_droite, 'rows' => 25, 'cols' => 10))?></div>
        </center>
    
</div>

</div>

    <section class="row">
        <center>
            <div class="col-12"><?= form_textarea(array('name'=>'pub_bas', 'class'=>'form-control', 'value'=>$pub_bas, 'rows' => 4, 'cols' => 40))?></div>
        </center>
    </section>
    
    <?=form_submit(array('name'=>'envoi', 'value'=>'Save','class'=>'btn btn-success btn-lg'));?>
<?=form_close();?>
</div>



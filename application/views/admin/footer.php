<?=form_open($param_URL.'/admin/footer');?> 
<?=$modalRetour?>
<div class="container">
    <div class="row">
        <div class="col-lg-4"><hr style="width:65%; color:firebrick; background-color:firebrick; height:3px;" /> 
        <?= form_textarea(array('name'=>'texte_bas_gauche', 'class'=>'form-control', 'value'=>$texte_bas_gauche, 'rows' => 12, 'cols' => 50))?></div>
        <div class="col-lg-4"><hr style="width:65%; color:firebrick; background-color:firebrick; height:3px;" /> 
        <?= form_textarea(array('name'=>'texte_bas_centre', 'class'=>'form-control', 'value'=>$texte_bas_centre, 'rows' => 12, 'cols' => 50))?></div>
        <div class="col-lg-4"><hr style="width:65%; color:firebrick; background-color:firebrick; height:3px;" /> 
        <?= form_textarea(array('name'=>'texte_bas_droite', 'class'=>'form-control', 'value'=>$texte_bas_droite, 'rows' => 12, 'cols' => 50))?></div>
    </div>
</div>
<?=form_submit(array('name'=>'envoi', 'value'=>'Save','class'=>'btn btn-success btn-lg'));?>
<?=form_close();?>


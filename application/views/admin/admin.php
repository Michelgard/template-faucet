
<?=$modalRetour?>
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Admin Page</h3>
        </div>
        <div class="box-body">
            <?=form_open($param_URL.'/admin/admin');?> 
            <div class="form-group">
                <?=form_label('Admin Username', 'param_valeur');?><br/>
                <?= form_input(array('name'=>'username', 'class'=>'form-control', 'value'=>$username))?>
            </div>
            <div class="form-group">
                    <?=form_label('Admin Email', 'param_temps');?><br/>
                    <?= form_input(array('type'=>'email', 'name'=>'param_email', 'class'=>'form-control', 'value'=>$param_email))?>
                </div>
            <div class="form-group">
                <?=form_label('Admin Password', 'param_referal');?><br/>
                <?= form_input(array('type'=>'password', 'name'=>'password1', 'class'=>'form-control'))?>
            </div>
            <div class="form-group">
                <?=form_label('Admin Password again', 'param_referal');?><br/>
                <?= form_input(array('type'=>'password', 'name'=>'password2', 'class'=>'form-control'))?>
            </div>
        </div>
    </div>
    <?=form_submit(array('name'=>'envoi', 'value'=>'Save','class'=>'btn btn-success'));?>
<?=form_close();?>
</div>

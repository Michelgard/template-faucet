<?=$modalRetour?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-1">
            <?=form_open($param_URL.'/admin/js');?> 
        </div>
        <div class="row">
            <div class="col-md-11">
                <h2>Adding javascript code to the faucet page<small></small>
                    <i class="fa fa-info-circle" style="color: #3C8DBC;" title="Here you can add any JS plugins, ads codes etc. 
                       Be careful to position javascript tags" data-toggle="tooltip" data-placement="right" aria-hidden="true"></i>
                </h2>
                <div></div>
                <div class="form-group">
                    <?=form_label('Scripts BEFORE Closing HEAD tag', 'JS_before_close_head');?><br/>
                    <?= form_textarea(array('name'=>'JS_before_close_head', 'class'=>'form-control', 'value'=>$JS_before_close_head, 'rows' => 4, 'cols' => 40))?>
                </div>
            </div>           
        </div>
        
        <div class="row">
            <div class="col-md-11">
                <div class="form-group">
                    <?=form_label('Scripts BEFORE Opening BODY tag', 'JS_before_open_boby');?><br/>
                    <?= form_textarea(array('name'=>'JS_before_open_boby', 'class'=>'form-control', 'value'=>$JS_before_open_boby, 'rows' => 4, 'cols' => 40))?>
                </div>
            </div>           
        </div>
        
        <div class="row">
            <div class="col-md-11">
                <div class="form-group">
                    <?=form_label('Scripts AFTER Opening BODY tag', 'JS_after_open_body');?><br/>
                    <?= form_textarea(array('name'=>'JS_after_open_body', 'class'=>'form-control', 'value'=>$JS_after_open_body, 'rows' => 4, 'cols' => 40))?>
                </div>
            </div>           
        </div>
        
        <div class="row">
            <div class="col-md-11">
                <div class="form-group">
                    <?=form_label('Scripts BEFORE Closing BODY tag', 'JS_before_close_body');?><br/>
                    <?= form_textarea(array('name'=>'JS_before_close_body', 'class'=>'form-control', 'value'=>$JS_before_close_body, 'rows' => 4, 'cols' => 40))?>
                </div>
                
            </div>           
        </div>
        <?=form_submit(array('name'=>'envoi', 'value'=>'Save','class'=>'btn btn-success'));?>
        <?=form_close();?>
    </div>
</div>
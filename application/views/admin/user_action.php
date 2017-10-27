  <?=form_open($param_URL.'/admin/user_action/'.$IDUser);?> 
<style> form {display: inline;}</style>  
<div class="content">
    <div class="container">
        <div class="row">
            <h3> Change status User : <strong><?=$IDUser?></strong>&nbsp;&nbsp;&nbsp;&nbsp; Current status :  <?=$active?></h3>
            <h4> Wallet User : <strong><?=$walletUser?></strong></h4>
            <h4> IP User     : <strong><?=$IPUser?></strong>
            <?=form_open($param_URL.'/admin/user_action/'.$IDUser);?> 
            <?= form_input(array('type'=>'hidden','name'=>'hidden2', 'class'=>'form-control', 'value'=>$hidden2))?>
            <?=form_button(array('type'=>'submit','name'=>'envoi2', 'content'=>$btnValue2,'class'=>$btnClass2));?>
            <?=form_close();?>
            </h4>
            <h4> Creation date    : <strong><?=$creationDate?></strong></h4>
            <h4> Next Claim     : <strong><?=$nextClaim?></strong></h4>
            <h4> Balance User     : <strong><?=$balanceUser?></strong></h4>
            <br/>
            
             
            <?=form_open($param_URL.'/admin/user_action/'.$IDUser);?> 
            <?=form_input(array('type'=>'hidden','name'=>'hidden', 'class'=>'form-control', 'value'=>$hidden))?>
            <?=form_button(array('type'=>'submit','name'=>'envoi', 'content'=>$btnValue,'class'=>$btnClass, $btnActif));?>
            <?=form_close();?>

            
        

        </div>
    </div>
</div>



<?=form_open($param_URL.'/admin/sittings');?> 
<?=$modalRetour?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sittings General Claim</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('Name of faucet', 'param_nom_site');?><br/>
                                <?= form_input(array('name'=>'param_nom_site', 'class'=>'form-control', 'value'=>$param_nom_site))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Currency of faucet', 'param_monnaie');?><br/>
                                <?= form_input(array('name'=>'param_monnaie', 'class'=>'form-control', 'value'=>$param_monnaie, 'readonly'=>'true'))?>
                                <?=form_label('Choose another currency', 'choose_monnaie');?><br/>
                                <?=form_dropdown('monnaie', $Monnaie, $monnaieFaucet);?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Email of faucet', 'param_email');?><br/>
                                <?= form_input(array('name'=>'param_email', 'class'=>'form-control', 'value'=>$param_email))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('IP of server', 'param_ip_serveur');?><br/>
                                <?= form_input(array('name'=>'param_ip_serveur', 'class'=>'form-control', 'value'=>$param_ip_serveur))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Theme of faucet', 'theme');?><br/>
                                <center>
                                <div class="row">
                                    <div class="col-md-4" style="padding:8px;">  
                                        <?=img('Cyborg.JPG', $alt = 'Cyborg')?>
                                        <?=form_radio($radio1)?>
                                    </div>
                                    <div class="col-md-4" style="padding:8px;">  
                                        <?=img('Darkly.JPG', $alt = 'Darkly')?>
                                        <?=form_radio($radio2)?>
                                    </div>
                                    <div class="col-md-4" style="padding:8px;">  
                                        <?=img('Slate.JPG', $alt = 'Slate')?>
                                        <?=form_radio($radio3)?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6" style="padding:8px;">  
                                        <?=img('Solar.JPG', $alt = 'Solar')?>
                                        <?=form_radio($radio4)?>
                                    </div>
                                    <div class="col-md-6" style="padding:8px;">  
                                        <?=img('Superhero.JPG', $alt = 'Superhero')?>
                                        <?=form_radio($radio5)?>
                                    </div>
                                </div>
                                </center>
                            </div>
                            
                        </div>
                    </div>
                     <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Payment gateways FaucetHub</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('FaucetHUB API key', 'param_API_faucethub');?><br/>
                                <?= form_input(array('name'=>'param_API_faucethub', 'class'=>'form-control', 'value'=>$param_API_faucethub))?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Claim value</h3>
                        </div>
                        <div class="box-body">
                                <div class="form-group">
                                    <?=form_label('Reward in Satoshi', 'param_valeur');?><br/>
                                    <?= form_input(array('type'=>'number', 'name'=>'param_valeur', 'class'=>'form-control', 'value'=>$param_valeur))?>
                                </div>
                            <div class="form-group">
                                    <?=form_label('Claim time', 'param_temps');?><br/>
                                    <?= form_input(array('type'=>'number', 'name'=>'param_temps', 'class'=>'form-control', 'value'=>$param_temps))?>
                                </div>
                            <div class="form-group">
                                <?=form_label('Referral bonus in %', 'param_referal');?><br/>
                                <?= form_input(array('type'=>'number', 'name'=>'param_referal', 'class'=>'form-control', 'value'=>$param_referal))?>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Captcha Solve Media</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= form_checkbox(array('class'=>'solvemedia', 'name'=>'param_solve_media_enable', 'value'=>$param_solve_media_enable, 'checked'=>$param_solve_media_enable));?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('Solve Media Challenge Key (C-key)', 'param_solve_media_Challenge_Key');?><br/>
                                <?= form_input(array('id'=>'param_solve_media_Challenge_Key', 'name'=>'param_solve_media_Challenge_Key', 'class'=>'form-control', 'value'=>$param_solve_media_Challenge_Key))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Solve Media Verification Key (V-key)', 'param_solve_media_Verification_Key');?><br/>
                                <?= form_input(array('id'=>'param_solve_media_Verification_Key', 'name'=>'param_solve_media_Verification_Key', 'class'=>'form-control', 'value'=>$param_solve_media_Verification_Key))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Solve Media Authentication Hash Key (H-key)', 'param_solve_media_Authentication_Hash_Key');?><br/>
                                <?= form_input(array('id'=>'param_solve_media_Authentication_Hash_Key', 'name'=>'param_solve_media_Authentication_Hash_Key', 'class'=>'form-control', 'value'=>$param_solve_media_Authentication_Hash_Key))?>
                            </div>
                        </div>
                    </div>
                     <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Captcha Geetest</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= form_checkbox(array('class'=>'geetest', 'name'=>'param_geetest_enable', 'value'=>$param_geetest_enable, 'checked'=>$param_geetest_enable));?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('Geetest captcha ID', 'param_geetest_captcha_id');?><br/>
                                <?= form_input(array('id'=>'param_geetest_captcha_id', 'name'=>'param_geetest_captcha_id', 'class'=>'form-control', 'value'=>$param_geetest_captcha_id))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Geetest Private Key)', 'param_geetest_private_key');?><br/>
                                <?= form_input(array('id'=>'param_geetest_private_key', 'name'=>'param_geetest_private_key', 'class'=>'form-control', 'value'=>$param_geetest_private_key))?>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Security against VPN / Proxy / TOR IP</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= form_checkbox(array('class'=>'param_IPHub_enable', 'name'=>'param_IPHub_enable', 'value'=>$param_IPHub_enable, 'checked'=>$param_IPHub_enable));?>
                       
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('IPHub.info API key', 'param_IPHub');?><br/>
                                <?= form_input(array('id'=>'param_IPHub', 'name'=>'param_IPHub', 'class'=>'form-control', 'value'=>$param_IPHub))?>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=form_submit(array('name'=>'envoi', 'value'=>'Save','class'=>'btn btn-success'));?>
<?=form_close();?>
    


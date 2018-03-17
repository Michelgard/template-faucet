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
                                <?= form_input(array('name'=>'param_nom_site', 'class'=>'form-control', 'value'=>$param_nom_site, 'style'=>'border-radius: 10px;'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Currency of faucet', 'param_monnaie');?><br/>
                                <?= form_input(array('name'=>'param_monnaie', 'class'=>'form-control', 'value'=>$param_monnaie, 'readonly'=>'true', 'style'=>'border-radius: 10px;'))?>
                                <?=form_label('Choose another currency', 'choose_monnaie');?><br/>
                                <?=form_dropdown('monnaie', $Monnaie, $monnaieFaucet);?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Email of faucet', 'param_email');?><br/>
                                <?= form_input(array('name'=>'param_email', 'class'=>'form-control', 'value'=>$param_email, 'style'=>'border-radius: 10px;'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('IP of server', 'param_ip_serveur');?><br/>
                                <?= form_input(array('name'=>'param_ip_serveur', 'class'=>'form-control', 'value'=>$param_ip_serveur, 'style'=>'border-radius: 10px;'))?>
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
                                <?= form_input(array('name'=>'param_API_faucethub', 'class'=>'form-control', 'value'=>$param_API_faucethub, 'style'=>'border-radius: 10px;'))?>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Security against VPN / Proxy / TOR IP</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= form_checkbox(array('class'=>'param_IPHub_enable', 'name'=>'param_IPHub_enable', 'value'=>1, 'checked'=>$param_IPHub_enable));?>
                       
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('IPHub.info API key', 'param_IPHub');?><br/>
                                <?= form_input(array('id'=>'param_IPHub', 'name'=>'param_IPHub', 'class'=>'form-control', 'value'=>$param_IPHub, 'style'=>'border-radius: 10px;'))?>
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
                                <?= form_input(array('type'=>'number', 'name'=>'param_valeur', 'class'=>'form-control', 'value'=>$param_valeur,
                                    'style'=>'border-radius: 10px;', 'min'=>'1'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Claim time in minute', 'param_temps');?><br/>
                                <?= form_input(array('type'=>'number', 'name'=>'param_temps', 'class'=>'form-control', 'value'=>$param_temps,
                                    'style'=>'border-radius: 10px;', 'min'=>'1'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Referral bonus in % (0 no referal)', 'param_referal');?><br/>
                                <?= form_input(array('type'=>'number', 'name'=>'param_referal', 'class'=>'form-control', 
                                    'value'=>$param_referal, 'style'=>'border-radius: 10px;', 'min'=>'0', 'max'=>'100'))?>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Captcha Solve Media</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= form_checkbox(array('class'=>'solvemedia', 'name'=>'param_solve_media_enable', 'value'=>1, 'checked'=>$param_solve_media_enable));?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('Solve Media Challenge Key (C-key)', 'param_solve_media_Challenge_Key');?><br/>
                                <?= form_input(array('id'=>'param_solve_media_Challenge_Key', 'name'=>'param_solve_media_Challenge_Key', 
                                    'class'=>'form-control', 'value'=>$param_solve_media_Challenge_Key, 'style'=>'border-radius: 10px;'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Solve Media Verification Key (V-key)', 'param_solve_media_Verification_Key');?><br/>
                                <?= form_input(array('id'=>'param_solve_media_Verification_Key', 'name'=>'param_solve_media_Verification_Key',
                                    'class'=>'form-control', 'value'=>$param_solve_media_Verification_Key, 'style'=>'border-radius: 10px;'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Solve Media Authentication Hash Key (H-key)', 'param_solve_media_Authentication_Hash_Key');?><br/>
                                <?= form_input(array('id'=>'param_solve_media_Authentication_Hash_Key', 'name'=>'param_solve_media_Authentication_Hash_Key',
                                    'class'=>'form-control', 'value'=>$param_solve_media_Authentication_Hash_Key, 'style'=>'border-radius: 10px;'))?>
                            </div>
                        </div>
                    </div>
                     <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Short link Shorte.st</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= form_checkbox(array('class'=>'shorte', 'name'=>'param_Shorte_enable', 'value'=>1, 'checked'=>$param_Shorte_enable));?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('Shorte.st  API Key', 'param_Shorte_API');?><br/>
                                <?= form_input(array('id'=>'param_Shorte_API', 'name'=>'param_Shorte_API', 'class'=>'form-control',
                                    'value'=>$param_Shorte_API, 'style'=>'border-radius: 10px;'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Shorte.st Gain value)', 'param_Shorte_Valeur');?><br/>
                                <?= form_input(array('id'=>'param_Shorte_Valeur', 'name'=>'param_Shorte_Valeur', 'class'=>'form-control',
                                    'value'=>$param_Shorte_Valeur, 'style'=>'border-radius: 10px;', 'type'=>'number', 'min'=>'1'))?>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Short link Coin.mg</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= form_checkbox(array('class'=>'coin', 'name'=>'param_Coin_enable', 'value'=>1, 'checked'=>$param_Coin_enable));?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('Coin.mg  API Key', 'param_Coin_API');?><br/>
                                <?= form_input(array('id'=>'param_Coin_API', 'name'=>'param_Coin_API', 'class'=>'form-control',
                                    'value'=>$param_Coin_API, 'style'=>'border-radius: 10px;'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('Coin.mg Gain value)', 'param_Coin_Valeur');?><br/>
                                <?= form_input(array('id'=>'param_Coin_Valeur', 'name'=>'param_Coin_Valeur', 'class'=>'form-control',
                                    'value'=>$param_Coin_Valeur, 'style'=>'border-radius: 10px;', 'type'=>'number', 'min'=>'1'))?>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Short link Btc.ms</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= form_checkbox(array('class'=>'btc', 'name'=>'param_BTC_enable', 'value'=>1, 'checked'=>$param_BTC_enable));?>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <?=form_label('Btc.ms  API Key', 'param_BTC_API');?><br/>
                                <?= form_input(array('id'=>'param_BTC_API', 'name'=>'param_BTC_API', 'class'=>'form-control',
                                    'value'=>$param_BTC_API, 'style'=>'border-radius: 10px;'))?>
                            </div>
                            <div class="form-group">
                                <?=form_label('BTC.ms Gain value)', 'param_BTC_Valeur');?><br/>
                                <?= form_input(array('id'=>'param_BTC_Valeur', 'name'=>'param_BTC_Valeur', 'class'=>'form-control',
                                    'value'=>$param_BTC_Valeur, 'style'=>'border-radius: 10px;', 'type'=>'number', 'min'=>'1'))?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=form_submit(array('name'=>'envoi', 'value'=>'Save','class'=>'btn btn-success'));?>
<?=form_close();?>
    


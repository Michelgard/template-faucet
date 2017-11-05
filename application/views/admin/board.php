<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?=$userActif?></h3>
                        <p>Number of active users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
                 <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?=$userTotal?></h3>
                        <p>Number users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?=$claimTotal?></h3>
                        <p>All Satoshi paid</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-social-bitcoin"></i>
                    </div>
                </div>
                 <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?=$claimTotal24h?></h3>
                        <p>Satoshi paid today (/24h)</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-social-bitcoin"></i>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3><?=$claimNb?></h3>
                        <p>All Claims</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div> 
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3><?=$claimNb24h?></h3>
                        <p>Claims today (/24h)</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3><?=$userNoActif?></h3>
                    <p>User(s) banned</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-close-circled"></i>
                  </div>
                </div>
                  <div class="small-box bg-red">
                  <div class="inner">
                    <h3><?=$ipBan?></h3>
                    <p>Ip banned</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-close-circled"></i>
                  </div>
                </div>
        </div>
        </div>
        
            
        <div class="row">
            <div class="col-md-6">
                <div class="box box-widget">
                    <div class="widget-user-header bg-yellow">
                        <center>
                        <div class="widget-user-image">
                            <img class="img-circle" src="<?=img_url('logo-90X90.png')?>" alt="User Avatar">
                        </div>
                            <h3><?=$param_nom_site?></h3>
                            <h5><?=$param_URL?></h5>
                            <h5><?=$param_email?></h5><br/>
                        </center>
                        
                    </div>
                    
                    <div class="box-footer no-padding" style="font-size:24px;">
                        <ul class="nav nav-stacked">
                            <li><a href="#" > Monney <span class="pull-right badge bg-orange"><?=$param_monnaie?></span></a></li>
                            <li><a href="#"> Balance FaucetHub <span class="pull-right badge bg-orange"><?=$balance?></span></a></li>
                            <li><a href="#"> Claim Time <span class="pull-right badge bg-orange"><?=$param_temps?></span></a></li>
                            <li><a href="#"> Claim Reward in Satoshi<span class="pull-right badge bg-orange"><?=$param_valeur?></span></a></li>
                            <li><a href="#"> Referal <span class="pull-right badge bg-orange"><?=$param_referal?>%</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
            
        </div>
    </div>
</div>





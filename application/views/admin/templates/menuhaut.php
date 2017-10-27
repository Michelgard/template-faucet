<div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?=$titreMenu?></a>
                </div>
                <div class="collapse navbar-collapse<?=$titreMenu?></a>">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?=$iconeMenu?>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                           <a href="<?=$param_URL . '/admin/logout'?>">
                             <i class="fa fa-sign-out" aria-hidden="true"></i>   Log out
                            </a>
                        </li>
                       

                    </ul>
                </div>
            </div>
        </nav>
<div class="sidebar" data-color="purple" data-image="<?=img_url('sidebar-5.jpg')?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?=$param_URL?>" class="simple-text" target="blanck">
                    <?=$param_nom_site?>
                </a>
            </div>

            <ul class="nav">
                <li class="<?=$active1?>">
                    <a href="<?=$param_URL . '/admin'?>">
                         <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="<?=$active7?>">
                    <a href="<?=$param_URL . '/admin/sittings'?>">
                        <i class="fa fa-gears"></i>
                        <p>Sittings</p>
                    </a>
                </li>
                <li class="<?=$active2?>">
                    <a href="<?=$param_URL . '/admin/users'?>">
                        <i class="pe-7s-note2"></i>
                        <p>Users List</p>
                    </a>
                </li>
                <li class="<?=$active3?>">
                    <a href="<?=$param_URL . '/admin/claims'?>">
                        <i class="fa fa-area-chart"></i>
                        <p>Claims List</p>
                    </a>
                </li>
                <li class="<?=$active4?>">
                    <a href="<?=$param_URL . '/admin/js'?>">
                        <i class="fa fa-file-code-o"></i>
                        <p>Add JavaScript</p>
                    </a>
                </li>
                 <li class="<?=$active5?>">
                    <a href="<?=$param_URL . '/admin/homepage'?>">
                        <i class="fa fa-home"></i>
                        <p>Homepage Layout</p>
                    </a>
                </li>
                <li class="<?=$active9?>">
                    <a href="<?=$param_URL . '/admin/modalclaim'?>">
                        <i class="fa fa-btc"></i>
                        <p>Claim Layout</p>
                    </a>
                </li>
                 <li class="<?=$active6?>">
                    <a href="<?=$param_URL . '/admin/footer'?>">
                        <i class="fa fa-hand-o-down"></i>
                        <p>Footer Layout</p>
                    </a>
                </li>
                <li class="<?=$active8?>">
                    <a href="<?=$param_URL . '/admin/admin'?>">
                        <i class="fa fa-wrench"></i>
                        <p>Admin page</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
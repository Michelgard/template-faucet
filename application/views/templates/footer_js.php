<script src="<?= js_url('jquery-3.2.1.min') ?>" type="text/javascript"></script>    
<script src="<?= js_url('bootstrap.min') ?>" type="text/javascript"></script>
<script src="<?= js_url('gt') ?>"></script>


<script type="application/javascript">
    $(document).ready(function() {
        $('#submit').click(function() {
            var form_data = {
                wallet  : $('.inputwallet').val(),
                wallet_referal : '<?= $wallet_referal ?>',
                ajax    : '1'
             };
            $.ajax({
                url: "<?php echo site_url('ajax_check'); ?>",
                type: 'POST',
                async : false,
                data: form_data,
                success: function(msg) {
                    if(msg.charAt(0) != "#"){
                        $(".inputwallet").val(msg);
                        $(".inputwallet").css("background-color", "#FF0000");
                        $(".inputwallet").css("font-size", "20");
                        $(".inputwallet").css("text-align", "center");
                        $(".inputwallet").prop('disabled', true);  
                        $(".btnclaim").prop('disabled', true);
                        setTimeout(function(){ 
                        $(".inputwallet").val('<?= $walletCookie ?>');
                        $(".inputwallet").css("background-color", "#ffffff"); 
                        $(".inputwallet").css("font-size", "16");
                        $(".inputwallet").css("text-align", "left");
                        $(".inputwallet").prop('disabled', false);
                        $(".btnclaim").prop('disabled', false);
                        }, 5000);
                    }else{
                        $('#modalClaim').modal("show");
                        $('#modalClaim').on('shown.bs.modal', function () {
                            ACPuzzle.create('<?=$param_solve_media_Challenge_Key ?>', 'acwidget', { lang: 'en', size: 'standard' }); 
                            
                        });
                        return false;
                    }
                }
            });
            return false;
        });
    });
    $(document).ready(function() {
        $('#submitclaim').click(function() {
            var formData = {
            'privatekey'    : '<?=$param_solve_media_Verification_Key ?>',
            'challenge':    ACPuzzle.get_challenge(),
            'response': ACPuzzle.get_response(),
            'remoteip': "<?=$param_ip_serveur ?>",
            'wallet'  : $('.inputwallet').val(),
            'captcha' : $('.captcha:checked').val(),
            'geetest_challenge' : $('.geetest_challenge').val(),
            'geetest_validate' : $('.geetest_validate').val(),
            'geetest_seccode' : $('.geetest_seccode').val(),
            'ajax'    : '1'
            }; 
            $.ajax({
                type        : 'POST', 
                url         : "<?php echo site_url('ajax_claim'); ?>", 
                data        : formData, 
                dataType    : 'text',
                success: function(resultData) {
                    
                    if(resultData.charAt(0) != "#"){
                        $('#modalClaim').modal("hide");
                        $(".inputwallet").val(resultData);
                        $(".inputwallet").css("background-color", "#FF0000");
                        $(".inputwallet").css("font-size", "20");
                        $(".inputwallet").css("text-align", "center");
                        $(".inputwallet").prop('disabled', true);
                        $(".btnclaim").prop('disabled', true);
                        setTimeout(function(){
                        $(".inputwallet").val('<?= $walletCookie ?>'); 
                        $(".inputwallet").css("background-color", "#ffffff");
                        $(".inputwallet").css("font-size", "16");
                        $(".inputwallet").css("text-align", "left");
                        $(".inputwallet").prop('disabled', false);
                        $(".btnclaim").prop('disabled', false);
                        }, 5000);
                    }else{
                        $('#modalClaim').modal("hide");
                        $('#modalClaimRetour').modal("show");
                        $("#retourclaim").html(resultData.substring(1, resultData.length)); 
                        setTimeout(function(){
                             $('#modalClaimRetour').modal("hide");
                        }, 5000);
                        $('#modalClaimRetour').on('hidden.bs.modal', function () {
                            parent.location.replace('<?=$param_URL ?>'); 
                        });
                    }  
                }
            });
            return false;
        });
    });
    if(<?=$chrono ?>>0){
     chrono(<?=$chrono ?>);
    }
    
    function timingBox( sec, min, hour )
    {
        this.secondes = sec;
        this.minutes = min;
        this.heures = hour;
    }
    
    function chrono(temps)
    {
		var timeBox = new timingBox( 0, 0, 0);
		//Si un temps est passer en parametre (en seconde) on converti pour les minutes et heures
			timeBox.secondes=temps; 
		
			if (timeBox.secondes > 60) 
			{
				timeBox.minutes = Math.floor(timeBox.secondes / 60);
				timeBox.secondes = timeBox.secondes - timeBox.minutes * 60;
			}
			if (timeBox.minutes > 60) 
			{
				timeBox.heures = Math.floor(timeBox.minutes / 60);
				timeBox.minutes = Math.floor(timeBox.minutes - timeBox.heures * 60);
			}
		
		//Reajustage des valaures pour l'affichage
		if (timeBox.heures < 10) rheures = '0'+timeBox.heures; else rheures = timeBox.heures;
		if (timeBox.minutes < 10) rminutes = '0'+timeBox.minutes; else rminutes = timeBox.minutes;
		if (timeBox.secondes < 10) rsecondes = '0'+timeBox.secondes; else rsecondes = timeBox.secondes;

		temps = temps - 1;	 
		//Affichage selon l'id
        if (rheures > 0){
            $('.btn-claim').val( rheures + ":" + rminutes + ":" + rsecondes);
            $('title').first().text(rheures + ":" + rminutes + ":" + rsecondes + "  <?=$param_nom_site ?>");
        }else{
            $('.btn-claim').val( + rminutes + ":" + rsecondes);
            $('title').first().text(rminutes + ":" + rsecondes + "  <?=$param_nom_site ?>");
        }
		
		//Reactualisation du chrono si different de 0.
		if ( temps > 0)
		{
			setTimeout("chrono("+temps+")", 1000);
            $(".btn-claim").prop('disabled', true);
		}
		else
		{			
			parent.location.replace('<?=$param_URL ?>');
		}		
    }
    $(document).ready(function() {
        var handlerEmbed = function (captchaObj) {
            $("#embed-submit").click(function (e) {
                var validate = captchaObj.getValidate();
                if (!validate) {
                    $("#notice")[0].className = "show";
                    setTimeout(function () {
                        $("#notice")[0].className = "hide";
                    }, 2000);
                    e.preventDefault();
                }
            });
            captchaObj.appendTo("#embed-captcha");
            captchaObj.onReady(function () {
                $("#wait")[0].className = "hide";
            });
        };
        $.ajax({
            url: "<?php echo site_url('ajax_geetest');?>?t=" + (new Date()).getTime(), 
            type: "get",
            dataType: "json",
            success: function (data) { 
                initGeetest({
                    gt: data.gt,
                    lang: 'en',
                    challenge: data.challenge,
                    new_captcha: data.new_captcha,
                    product: "embed", 
                    offline: !data.success 
                }, handlerEmbed);
            }
        });
    });
    $(document).ready(function() {
        if (<?=$param_solve_media_enable?> == 0 && <?=$param_geetest_enable?> == 0){
            $('.radiocaptcha').hide();
            $('.geetest').hide();
            $('.solvemedia').hide();
        }else{
            if (<?=$param_solve_media_enable?> == 0 || <?=$param_geetest_enable?> == 0){
                $('.radiocaptcha').hide();
                if(<?=$param_solve_media_enable?> == 1){
                    $('.geetest').hide();
                    $('.solvemedia').show();
                };
                if(<?=$param_geetest_enable?> == 1){
                    $('.geetest').show();
                    $('.solvemedia').hide();
                };
            }else{
                if(<?=$modelCaptcha?>==0 | <?=$modelCaptcha?>==1){
                    $('.geetest').show();
                    $('.solvemedia').hide();
                    $('#captcha1').attr('checked', true);
                }else{
                    $('.geetest').hide();
                    $('.solvemedia').show();
                    $('#captcha2').attr('checked', true);
                };
                $('.captcha').change(function() {      
                    if($('.captcha:checked').val()=='geetest'){
                        $('.geetest').show();
                        $('.solvemedia').hide();
                        
                        var form_data = {
                            wallet  : $('.inputwallet').val(),
                            ajax    : '1'
                         };
                        $.ajax({
                            url: "<?php echo site_url('ajax_captcha'); ?>",
                            type: 'POST',
                            async : false,
                            data: form_data
                        });
                    }else{
                        $('.geetest').hide();
                        $('.solvemedia').show();
                        
                        var form_data = {
                            wallet  : $('.inputwallet').val(),
                            ajax    : '2'
                         };
                        $.ajax({
                            url: "<?php echo site_url('ajax_captcha'); ?>",
                            type: 'POST',
                            async : false,
                            data: form_data
                        });
                    };
                });
            };
        };
    });

</script>

<?=$JS_before_close_body ?>


</body>

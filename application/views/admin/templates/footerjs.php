
    <!--   Core JS Files   -->
    <script src="<?=js_url('jquery-3.2.1.min')?>" type="text/javascript"></script>
	<script src="<?=js_url('bootstrap.min')?>" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?=js_url('bootstrap-checkbox-radio-switch')?>" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?=js_url('chartist.min')?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?=js_url('bootstrap-notify')?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?=js_url('light-bootstrap-dashboard')?>"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! 
	<script src="assets/js/demo.js"></script>-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>  
    <script type="text/javascript" > 
        $(document).ready(function() {
             $('#tableau').DataTable( {
             "pagingType": "full_numbers",
             "order": [[ 0, "desc" ]]
              } );
         } );
         
         
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
        
        $(document).ready(function(){
            $(".btn-dis").click(function(){
                return confirm('Are you sure you want disabled this user?');
                  });
            $(".btn-ban").click(function(){
                return confirm('Are you sure you want ban this user (IP)?');
                  });
            $(".btn-noban").click(function(){
                return confirm('Are you sure you want NO ban this user (IP)?');
                 });
            $(".btn-vis").click(function(){
                return confirm('Are you sure you want active this user?');
                  });
        });
        $(document).ready(function(){
            if($('.solvemedia').is(':checked')){
                $("#param_solve_media_Challenge_Key").prop('disabled', false);
                $("#param_solve_media_Verification_Key").prop('disabled', false);
                $("#param_solve_media_Authentication_Hash_Key").prop('disabled', false);
            }else{
                $("#param_solve_media_Challenge_Key").prop('disabled', true);
                $("#param_solve_media_Verification_Key").prop('disabled', true);
                $("#param_solve_media_Authentication_Hash_Key").prop('disabled', true);
            };
            $('.solvemedia').change(function() {
                if($('.solvemedia').is(':checked')){
                    $('.solvemedia').val('1');
                    $("#param_solve_media_Challenge_Key").prop('disabled', false);
                    $("#param_solve_media_Verification_Key").prop('disabled', false);
                    $("#param_solve_media_Authentication_Hash_Key").prop('disabled', false);
                }else{
                    $('.solvemedia').val('0');
                    $("#param_solve_media_Challenge_Key").prop('disabled', true);
                    $("#param_solve_media_Verification_Key").prop('disabled', true);
                    $("#param_solve_media_Authentication_Hash_Key").prop('disabled', true);
                };
            });
            if($('.geetest').is(':checked')){
                $("#param_geetest_captcha_id").prop('disabled', false);
                $("#param_geetest_private_key").prop('disabled', false);
            }else{
                $("#param_geetest_captcha_id").prop('disabled', true);
                $("#param_geetest_private_key").prop('disabled', true);
            };
            $('.geetest').change(function() {
                if($('.geetest').is(':checked')){
                    $('.geetest').val('1');
                    $("#param_geetest_captcha_id").prop('disabled', false);
                    $("#param_geetest_private_key").prop('disabled', false);
                }else{
                    $('.geetest').val('0');
                    $("#param_geetest_captcha_id").prop('disabled', true);
                    $("#param_geetest_private_key").prop('disabled', true);
                };
            });
            if($('.param_IPHub_enable').is(':checked')){
                $("#param_IPHub").prop('disabled', false);                 
            }else{
                $("#param_IPHub").prop('disabled', true);               
            };
            $('.param_IPHub_enable').change(function() {
                if($('.param_IPHub_enable').is(':checked')){
                    $('.param_IPHub_enable').val('1');
                    $("#param_IPHub").prop('disabled', false);                    
                }else{
                    $('.param_IPHub_enable').val('0');
                    $("#param_IPHub").prop('disabled', true);
                };
            });
        });
        
    </script>

</html>


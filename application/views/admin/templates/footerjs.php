
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
    </script>

</html>


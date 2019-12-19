<!-- Right Panel -->
<?php
/*
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
*/
?>
    <script type='text/javascript' src="<?php echo base_url(); ?>style/js/vendor/jquery-2.1.4.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>style/js/popper.jss"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>style/js/plugins.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>style/js/main.js"></script>


    <script type='text/javascript' src="<?php echo base_url(); ?>/js/lib/chart-js/Chart.bundle.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>/js/dashboard.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>/js/widgets.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>/js/lib/vector-map/jquery.vmap.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>

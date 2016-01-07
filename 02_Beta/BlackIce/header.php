<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
        <link href='http://fonts.googleapis.com/css?family=Mallanna' rel='stylesheet' type='text/css'>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/accordian.js"></script>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width">
        <script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"f9b9ffab-29a6-4d5b-aa41-f735bf7c9d61"});var st_type="wordpress4.2.2";</script>
		<title><?php bloginfo('name'); ?> </title>

        <?php wp_enqueue_script ("jquery"); ?>

        <?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

         <div class="screen">
                <!--Nav Bar-->
                <div class="nav_bar left">

                    <a href="<?php echo home_url(); ?>"><svg class="icon" width="100%" height="100%" viewBox="0 0 187 167" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                        <g transform="matrix(1,0,0,1,-718.496,-81.5048)">
                            <path d="M781,88C776.56,101.46 771.675,108.346 755,129C736.929,151.383 710.282,188.142 734.996,220.829C757.913,251.14 810.487,249.529 827.767,211.113C845.726,171.186 801.21,145.96 796.356,160.403C788.638,183.369 903.152,177.598 898.006,159.41C894.001,145.256 823.952,169.249 827.966,177.692C840.633,204.335 880.882,216.215 883.331,208.358C886.676,197.624 847.814,184.782 828.382,178.361" style="fill:none;stroke-width:7.5px;stroke:white;stroke-opacity:0.896392;"/>
                            <g transform="matrix(1,0,0,1,-6,12.6331)">
                                <text x="836.999px" y="232.887px" style="font-family:Gulim;font-size:24px;fill:white;fill-opacity:0.900604;">BETA</text>
                            </g>
                        </g>
                    </svg>
                    </a>


                        <?php
                            $args = array('theme_location' => 'primary');
                        ?>
                        <?php wp_nav_menu($args); ?>
                </div>  

                 <div class="right">

<html>

<head>

    <title> Yabucoa </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">


</head>

<body onLoad="launch()">

    <form method="POST" name="control_form">


        <div align="center">


            <div align="left">





            </div>

            <div align="center" style="width:823px;">

                <h2>
 <img  src="http://caricoos.org/logo.png" width="120" height="110" border="0">

Yabucoa Port Operational Wave Model 

</h2>

                <p align="justify">The Yabucoa Port Operational Wave Model is a state of the art wave forecast system based on the Simulating Waves Nearshore (SWAN) spectral wave model, and is based on the operational scheme of the CariCOOS Nearshore Wave Model (http://caricoos.org/drupal/swan). Please click on the virtual buoy (yellow dot) of your preference below to access virtual buoy predictions, or visualize the wave height fields below in the product viewer. For technical questions related to the model please contact Dr. Miguel Canals.
                    <br>
                    <br> NOTE: This is a preliminary BETA version of the model. DO NOT USE FOR NAVIGATION PURPOSES. </p>

                <A href="JavaScript: func()" onClick="change_speed(delay_step)">
                    <button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
                        <span class="glyphicon glyphicon-fast-backward" aria-hidden="true">
        </span>
                    </button>
                </a>

                <A href="JavaScript: func()" onClick="decrementImage(--current_image)">
                    <button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
                        <span class="glyphicon glyphicon-step-backward" aria-hidden="true">
        </span>
                    </button>
                </A>

                <A href="JavaScript: func()" onClick="stop()">
                    <button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
                        <span class="glyphicon glyphicon-pause" aria-hidden="true">
        </span>
                    </button>
                </A>

                <A href="JavaScript: func()" onClick="change_mode(1);fwd()">
                    <button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
                        <span class="glyphicon glyphicon-play" aria-hidden="true">
        </span>
                    </button>
                </A>

                <A href="JavaScript: func()" onClick="incrementImage(++current_image)">
                    <button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
                        <span class="glyphicon glyphicon-step-forward" aria-hidden="true">
        </span>
                    </button>
                </A>

                <A href="JavaScript: func()" onClick="change_speed(-delay_step)">
                    <button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
                        <span class="glyphicon glyphicon-fast-forward" aria-hidden="true">
        </span>
                    </button>
                </A>

                &nbsp;&nbsp;

                <INPUT TYPE="text" name="frame_nr" VALUE=9 SIZE="2" onFocus="this.select()" onChange="go2image(this.value)"></INPUT>
            </div>

    </form>

    <br>


    </map>

    <img src=http://www.ostreet.co.uk/content/themes/o%20street/images/project_loader.gif alt="model image" name="animation" width="833" height="547" border="0" align="middle" usemap="#Map">

    <map name="Map" id="Map">
        <area alt="" title="" target="_blank" href="http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/VB1_SWAN_point_forecast.png" shape="rect" coords="423,359,438,374" />
        <area alt="" title="" target="_blank" href="http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/VB2_SWAN_point_forecast.png" shape="rect" coords="385,347,370,333" />
        <area alt="" title="" target="_blank" href="http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/VB3_SWAN_point_forecast.png" shape="rect" coords="333,322,318,307" />
        <area alt="" title="" target="_blank" href="http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/VB4_SWAN_point_forecast.png" shape="rect" coords="282,295,267,281" />
        <area alt="" title="" target="_blank" href="http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/VB5_SWAN_point_forecast.png" shape="rect" coords="230,271,216,256" />
        <area alt="" title="" target="_blank" href="http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/VB6_SWAN_point_forecast.png" shape="rect" coords="179,242,164,228" />

        </div>





        <script src="http://caricoos.org/datepicker/bootstrap/js/bootstrap.min.js">
        </script>


        <script language="JavaScript">
            // <!--

            //============================================================
            //                >> jsImagePlayer 1.0 <<
            //            for Netscape3.0+, September 1996
            //============================================================
            //                  by (c)BASTaRT 1996
            //             Praha, Czech Republic, Europe
            //
            // feel free to copy and use as long as the credits are given
            //          by having this header in the code
            //
            //          contact: xholecko@sgi.felk.cvut.cz
            //          http://sgi.felk.cvut.cz/~xholecko
            //
            //============================================================
            // Thanx to Karel & Martin for beta testing and suggestions!
            //============================================================
            //
            //     modified by D. Watson and A. Earnhart (CIRA/CSU), 7/30/97
            //     and Greg Thompson (NCAR/RAP) May 07, 2000
            //
            //============================================================

            //********* SET UP THESE VARIABLES - MUST BE CORRECT!!!*********************

            modImages = new Array();

            modImages[0] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_4.gif";
            modImages[1] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_5.gif";
            modImages[2] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_6.gif";
            modImages[3] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_7.gif";
            modImages[4] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_8.gif";
            modImages[5] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_9.gif";
            modImages[6] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_10.gif";
            modImages[7] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_11.gif";
            modImages[8] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_12.gif";
            modImages[9] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_13.gif";
            modImages[10] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_14.gif";
            modImages[11] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_15.gif";
            modImages[12] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_16.gif";
            modImages[13] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_17.gif";
            modImages[14] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_18.gif";
            modImages[15] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_19.gif";
            modImages[16] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_20.gif";
            modImages[17] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_21.gif";
            modImages[18] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_22.gif";
            modImages[19] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_23.gif";
            modImages[20] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_24.gif";
            modImages[21] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_25.gif";
            modImages[22] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_26.gif";
            modImages[23] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_27.gif";
            modImages[24] = "http://caricoos.org/YABUCOA_PORT_METOCEAN_SYSTEM/wave/YABUCOA_WAVE_MODEL/latest/YABHR_Hsig_28.gif";


            first_image = 1;
            last_image = 25;

            //**************************************************************************

            //=== THE CODE STARTS HERE - no need to change anything below ===

            //=== global variables ====
            theImages = new Array(); //holds the images
            imageNum = new Array(); //keeps track of which images to omit from loop
            normal_delay = 2000;
            delay = normal_delay; //delay between frames in 1/100 seconds
            delay_step = 50;
            delay_max = 6000;
            delay_min = 50;
            dwell_multipler = 3;
            dwell_step = 1;
            end_dwell_multipler = dwell_multipler;
            start_dwell_multipler = dwell_multipler;
            current_image = first_image; //number of the current image
            timeID = null;
            status = 0; // 0-stopped, 1-playing
            play_mode = 0; // 0-normal, 1-loop, 2-sweep
            size_valid = 0;

            //===> Make sure the first image number is not bigger than the last image number
            if (first_image > last_image) {
                var help = last_image;
                last_image = first_image;
                first_image = help;
            }

            //===> Preload the first image (while page is downloading)
            theImages[0] = new Image();
            theImages[0].src = modImages[0];
            imageNum[0] = true;

            //==============================================================
            //== All previous statements are performed as the page loads. ==
            //== The following functions are also defined at this time.   ==
            //==============================================================

            //===> Stop the animation
            function stop() {
                //== cancel animation (timeID holds the expression which calls the fwd or bkwd function) ==
                if (status == 1)
                    clearTimeout(timeID);
                status = 0;
            }


            //===> Display animation in fwd direction in either loop or sweep mode
            function animate_fwd() {
                current_image++; //increment image number

                //== check if current image has exceeded loop bound ==
                if (current_image > last_image) {
                    if (play_mode == 1) { //fwd loop mode - skip to first image
                        current_image = first_image;
                    }
                    if (play_mode == 2) { //sweep mode - change directions (go bkwd)
                        current_image = last_image;
                        animate_rev();
                        return;
                    }
                }

                //== check to ensure that current image has not been deselected from the loop ==
                //== if it has, then find the next image that hasn't been ==
                while (imageNum[current_image - first_image] == false) {
                    current_image++;
                    if (current_image > last_image) {
                        if (play_mode == 1)
                            current_image = first_image;
                        if (play_mode == 2) {
                            current_image = last_image;
                            animate_rev();
                            return;
                        }
                    }
                }

                document.animation.src = theImages[current_image - first_image].src; //display image onto screen
                document.control_form.frame_nr.value = current_image; //display image number

                delay_time = delay;
                if (current_image == first_image) delay_time = start_dwell_multipler * delay;
                if (current_image == last_image) delay_time = end_dwell_multipler * delay;

                //== call "animate_fwd()" again after a set time (delay_time) has elapsed ==
                timeID = setTimeout("animate_fwd()", delay_time);
            }


            //===> Display animation in reverse direction
            function animate_rev() {
                current_image--; //decrement image number

                //== check if image number is before lower loop bound ==
                if (current_image < first_image) {
                    if (play_mode == 1) { //rev loop mode - skip to last image
                        current_image = last_image;
                    }
                    if (play_mode == 2) {
                        current_image = first_image; //sweep mode - change directions (go fwd)
                        animate_fwd();
                        return;
                    }
                }

                //== check to ensure that current image has not been deselected from the loop ==
                //== if it has, then find the next image that hasn't been ==
                while (imageNum[current_image - first_image] == false) {
                    current_image--;
                    if (current_image < first_image) {
                        if (play_mode == 1)
                            current_image = last_image;
                        if (play_mode == 2) {
                            current_image = first_image;
                            animate_fwd();
                            return;
                        }
                    }
                }

                document.animation.src = theImages[current_image - first_image].src; //display image onto screen
                document.control_form.frame_nr.value = current_image; //display image number

                delay_time = delay;
                if (current_image == first_image) delay_time = start_dwell_multipler * delay;
                if (current_image == last_image) delay_time = end_dwell_multipler * delay;

                //== call "animate_rev()" again after a set amount of time (delay_time) has elapsed ==
                timeID = setTimeout("animate_rev()", delay_time);
            }


            //===> Changes playing speed by adding to or substracting from the delay between frames
            function change_speed(dv) {
                delay += dv;
                //== check to ensure max and min delay constraints have not been crossed ==
                if (delay > delay_max) delay = delay_max;
                if (delay < delay_min) delay = delay_min;
            }

            //===> functions that changed the dwell rates.
            function change_end_dwell(dv) {
                end_dwell_multipler += dv;
                if (end_dwell_multipler < 1) end_dwell_multipler = 0;
            }

            function change_start_dwell(dv) {
                start_dwell_multipler += dv;
                if (start_dwell_multipler < 1) start_dwell_multipler = 0;
            }

            //===> Increment to next image
            function incrementImage(number) {
                stop();

                //== if image is last in loop, increment to first image ==
                if (number > last_image) number = first_image;

                //== check to ensure that image has not been deselected from loop ==
                while (imageNum[number - first_image] == false) {
                    number++;
                    if (number > last_image) number = first_image;
                }

                current_image = number;
                document.animation.src = theImages[current_image - first_image].src; //display image
                document.control_form.frame_nr.value = current_image; //display image number
            }

            //===> Decrement to next image
            function decrementImage(number) {
                stop();

                //== if image is first in loop, decrement to last image ==
                if (number < first_image) number = last_image;

                //== check to ensure that image has not been deselected from loop ==
                while (imageNum[number - first_image] == false) {
                    number--;
                    if (number < first_image) number = last_image;
                }

                current_image = number;
                document.animation.src = theImages[current_image - first_image].src; //display image
                document.control_form.frame_nr.value = current_image; //display image number
            }

            //===> "Play forward"
            function fwd() {
                stop();
                status = 1;
                play_mode = 1;
                animate_fwd();
            }

            //===> "Play reverse"
            function rev() {
                stop();
                status = 1;
                play_mode = 1;
                animate_rev();
            }

            //===> "play sweep"
            function sweep() {
                stop();
                status = 1;
                play_mode = 2;
                animate_fwd();
            }

            //===> Change play mode (normal, loop, swing)
            function change_mode(mode) {
                play_mode = mode;
            }

            //===> Load and initialize everything once page is downloaded (called from 'onLoad' in <body>)
            function launch() {
                for (var i = first_image + 1; i <= last_image; i++) {
                    theImages[i - first_image] = new Image();
                    theImages[i - first_image].src = modImages[i - first_image];
                    imageNum[i - first_image] = true;
                    document.animation.src = theImages[i - first_image].src;
                    document.control_form.frame_nr.value = i;
                }

                // this needs to be done to set the right mode when the page is manually reloaded
                change_mode(1);
                fwd();
            }

            //===> Check selection status of image in animation loop
            function checkImage(status, i) {
                if (status == true)
                    imageNum[i] = false;
                else imageNum[i] = true;
            }

            //==> Empty function - used to deal with image buttons rather than html buttons
            function func() {}

            //===> Sets up interface - this is the one function called from the html body
            function animation() {
                count = first_image;
            }

            // -->
        </script>

</body>

</html>
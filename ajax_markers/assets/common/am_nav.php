<?php /* The navbar for the AJAX markers map page. */ ?>
    <style>

    </style>
    <div class="navbar navbar-custom navbar-fixed-top">

        <div class="navbar-header">

            <a class="navbar-brand" href="#">heatery.io</a>

            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </a>

        </div>
        <!-- @end .navbar-header -->

        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">

                <li class="active"><a href="#">Heatery Map</a></li>

                <li><a href="#"><span class="glyphicon glyphicon-user">
</span>&nbsp;&nbsp;Client Portal</a>
                </li>

                <li><a href="#"><span class="glyphicon glyphicon-log-in">
</span>&nbsp;&nbsp;The Speak Easy&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </li>

                <li>&nbsp;</li>

            </ul>
            <!-- @end .navbar-collapse collapse -->


            <div class="container" style="margin-right:20px;">
                <div class="btn-toolbar">
                    <div class="input-group input-group-md" style="width:250px;">
                        <span class="input-group-btn">
<button id="btn-search" class="btn btn-default btn-md" title="heatery"><span class="glyphicon glyphicon-search" onclick="codeAddress()" data-toggle="tooltip" title="Click for Results"></span>&nbsp;&nbsp;Find</button>
                        </span>
                        <input id="address" class="form-control" placeholder="Your Hot Spot." type="text">
                    </div>
                    <div class="btn-group">


                        <button id="get_heatery" class="btn btn-default btn-md" type="button" onclick="" data-toggle="tooltip" title="Get Heatery Map"><span class="glyphicon glyphicon-fire"></span>
                        </button>


                        <button id="get_markers" class="btn btn-default btn-md" type="button" onclick="" data-toggle="tooltip" title="Show/Hide Markers"><span class="glyphicon glyphicon-map-marker"></span></button>


                        <button id="get_location" class="btn btn-default btn-md" type="button" onclick="getLocation()" data-toggle="tooltip" title="Share Your Current Location"><span class="glyphicon glyphicon-screenshot"></span></button>


                        <button id="btn-on-off" class="btn btn-default btn-md" type="button" onclick="" data-toggle="tooltip" title="Heatmap On/Off"><span class="glyphicon glyphicon-off"></span></button>


                        <button id="btn-radius" class="btn btn-default btn-md" type="button" onclick="" data-toggle="tooltip" title="Change Radius"><span class="glyphicon glyphicon-fullscreen"></span></button>


                        <button id="btn-opacity" class="btn btn-default btn-md" type="button" onclick="" data-toggle="tooltip" title="Change Opacity"><span class="glyphicon glyphicon-adjust"></span>
                        </button>


                    </div>
                </div>
            </div>

        </div>
        <!--@end .navbar-collapse collapse -->
    </div>
    <!--@end .navbar navbar-custom navbar-fixed-top -->
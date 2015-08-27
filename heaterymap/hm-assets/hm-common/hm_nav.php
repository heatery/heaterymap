<div class="navbar navbar-custom navbar-fixed-top">
    <ul class="nav navbar-nav">
        <li> <img style="margin:5px 0px 5px 15px;" width="45" height="45" src="https://www.heatery.io/hm-media/hm-img/hm_logo_csq_lg.jpg" /> </li>
    </ul>
    <div class="navbar-header"> <a class="navbar-brand" href="#">heatery.io</a>
        <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
    </div>
    <!-- @end .navbar-header -->
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Heatery Map</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Client Portal</a> </li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;The Speak Easy&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
            <li>&nbsp;</li>
        </ul>
        <!-- @end .navbar-collapse collapse -->
        <div class="container" style="margin-right:20px;">
            <button id="btn-on-off" class="btn btn-default btn-sm" type="button" onclick="" data-toggle="tooltip" title="Heatmap On/Off"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Heatery On/Off</button>

            <button id="btn-heatery" class="btn btn-default btn-sm" type="button" onclick="" data-toggle="tooltip" title="Get Heatery Map"><span class="glyphicon glyphicon-fire"></span>&nbsp;&nbsp;Get Heatery</button>

            <form id="gc-form" class="form-inline" action="" method="post">
                <div id="gc-input" class="input-group"><span class="input-group-btn"><input id="btn-find"class="btn btn-default btn-md" type="submit" value="Find" style="color:#E1F5C4; background-color:#E33258; border: 1px solid #ccc;"/></span>
                    <input id="gc-search-box" class="form-control" type="text" name="address" placeholder="Your Hot Spot." style="width:250px; background-color:#6C6352; color:#E1F5C4; letter-spacing:1.5px; font-weight:200;" /> </div>
            </form>
        </div>
        <!--@end .navbar-collapse collapse -->
    </div>
    <!--@end .navbar navbar-custom navbar-fixed-top -->
</div>
<?php /*Map goes here.*/?>
    <div id="map-canvas"></div>
    <div class="container" id="main" style="float:left;">
        <div class="row">
            <div class="col-xs-4" id="left">
                <div class="panel panel-default">
                    <div id="info_head" class="panel-heading">
                        <h2><?php echo($city);?> Heatery</h2>
                        <div data-role="fieldcontain">
                            <label for="radiusSlider">Radius</label>
                            <input type="range" class="ui-slider ui-slider-handle" id="radiusSlider" onchange="changeRadius(radiusSlider.value)" min="1" max="150" step="0.5" value="70" />
                            <label for="opacitySlider">Transparency</label>
                            <input type="range" class="ui-slider ui-slider-handle" id="opacitySlider" onchange="changeOpacity(opacitySlider.value)" min="0" max="1" step=".01" value=".35" />
                        </div>
                    </div>
                </div>
                <!--@end .panel-heading-->
                <div id="info_panel" class="panel panel-default" style="margin-bottom:5px;">
                    <div id="info_card" class="panel-heading"></div>
                </div>
                <!--@end .panel-heading-->
            </div>
            <!--@end .col-xs-4-->
            <div class="col-xs-8"></div>
            <!--@end .col-xs-8-->
        </div>
        <!--@end .row-->
    </div>
    <!--@end .container-->
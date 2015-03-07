@extends('layouts.price')

@section('content')
<div class="page-container">
<!-- BEGIN PAGE HEAD -->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Pricing Tables <small>pricing table samples</small></h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar">
            <!-- BEGIN THEME PANEL -->
            <div class="btn-group btn-theme-panel">
                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-settings"></i>
                </a>
                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>THEME COLORS</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul class="theme-colors">
                                        <li class="theme-color theme-color-default" data-theme="default">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Default</span>
                                        </li>
                                        <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Blue Hoki</span>
                                        </li>
                                        <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Blue Steel</span>
                                        </li>
                                        <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Orange</span>
                                        </li>
                                        <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Yellow Crusta</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul class="theme-colors">
                                        <li class="theme-color theme-color-green-haze" data-theme="green-haze">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Green Haze</span>
                                        </li>
                                        <li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Red Sunglo</span>
                                        </li>
                                        <li class="theme-color theme-color-red-intense" data-theme="red-intense">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Red Intense</span>
                                        </li>
                                        <li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Purple Plum</span>
                                        </li>
                                        <li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Purple Studio</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                            <h3>LAYOUT</h3>
                            <ul class="theme-settings">
                                <li>
                                    Theme Style
                                    <select class="theme-setting theme-setting-style form-control input-sm input-small input-inline tooltips" data-original-title="Change theme style" data-container="body" data-placement="left">
                                        <option value="boxed" selected="selected">Square corners</option>
                                        <option value="rounded">Rounded corners</option>
                                    </select>
                                </li>
                                <li>
                                    Layout
                                    <select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
                                        <option value="boxed" selected="selected">Boxed</option>
                                        <option value="fluid">Fluid</option>
                                    </select>
                                </li>
                                <li>
                                    Top Menu Style
                                    <select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body" data-placement="left">
                                        <option value="dark" selected="selected">Dark</option>
                                        <option value="light">Light</option>
                                    </select>
                                </li>
                                <li>
                                    Top Menu Mode
                                    <select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body" data-placement="left">
                                        <option value="fixed">Fixed</option>
                                        <option value="not-fixed" selected="selected">Not Fixed</option>
                                    </select>
                                </li>
                                <li>
                                    Mega Menu Style
                                    <select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body" data-placement="left">
                                        <option value="dark" selected="selected">Dark</option>
                                        <option value="light">Light</option>
                                    </select>
                                </li>
                                <li>
                                    Mega Menu Mode
                                    <select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body" data-placement="left">
                                        <option value="fixed" selected="selected">Fixed</option>
                                        <option value="not-fixed">Not Fixed</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END THEME PANEL -->
        </div>
        <!-- END PAGE TOOLBAR -->
    </div>
</div>
<!-- END PAGE HEAD -->
<!-- BEGIN PAGE CONTENT -->
<div class="page-content">
<div class="container">
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                Widget settings form goes here
            </div>
            <div class="modal-footer">
                <button type="button" class="btn blue">Save changes</button>
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="#">Home</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="extra_pricing_table.html">Pages</a>
        <i class="fa fa-circle"></i>
    </li>
    <li class="active">
        Pricing Tables
    </li>
</ul>
<!-- END PAGE BREADCRUMB -->
<!-- BEGIN PAGE CONTENT INNER -->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN INLINE NOTIFICATIONS PORTLET-->
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Pricing Tables
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row margin-bottom-40">
                    <!-- Pricing -->
                    <div class="col-md-3">
                        <div class="pricing hover-effect">
                            <div class="pricing-head">
                                <h3>Begginer <span>
											Officia deserunt mollitia </span>
                                </h3>
                                <h4><i>$</i>5<i>.49</i>
											<span>
											Per Month </span>
                                </h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li>
                                    <i class="fa fa-tags"></i> At vero eos
                                </li>
                                <li>
                                    <i class="fa fa-asterisk"></i> No Support
                                </li>
                                <li>
                                    <i class="fa fa-heart"></i> Fusce condimentum
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> Ut non libero
                                </li>
                                <li>
                                    <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                                </li>
                            </ul>
                            <div class="pricing-footer">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                </p>
                                <a href="javascript:;" class="btn yellow-crusta">
                                    Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pricing hover-effect">
                            <div class="pricing-head">
                                <h3>Pro <span>
											Officia deserunt mollitia </span>
                                </h3>
                                <h4><i>$</i>8<i>.69</i>
											<span>
											Per Month </span>
                                </h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li>
                                    <i class="fa fa-tags"></i> At vero eos
                                </li>
                                <li>
                                    <i class="fa fa-asterisk"></i> No Support
                                </li>
                                <li>
                                    <i class="fa fa-heart"></i> Fusce condimentum
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> Ut non libero
                                </li>
                                <li>
                                    <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                                </li>
                            </ul>
                            <div class="pricing-footer">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                </p>
                                <a href="javascript:;" class="btn yellow-crusta">
                                    Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pricing pricing-active hover-effect">
                            <div class="pricing-head pricing-head-active">
                                <h3>Expert <span>
											Officia deserunt mollitia </span>
                                </h3>
                                <h4><i>$</i>13<i>.99</i>
											<span>
											Per Month </span>
                                </h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li>
                                    <i class="fa fa-tags"></i> At vero eos
                                </li>
                                <li>
                                    <i class="fa fa-asterisk"></i> No Support
                                </li>
                                <li>
                                    <i class="fa fa-heart"></i> Fusce condimentum
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> Ut non libero
                                </li>
                                <li>
                                    <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                                </li>
                            </ul>
                            <div class="pricing-footer">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                </p>
                                <a href="javascript:;" class="btn yellow-crusta">
                                    Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pricing hover-effect">
                            <div class="pricing-head">
                                <h3>Hi-Tech <span>
											Officia deserunt mollitia </span>
                                </h3>
                                <h4><i>$</i>99<i>.00</i>
											<span>
											Per Month </span>
                                </h4>
                            </div>
                            <ul class="pricing-content list-unstyled">
                                <li>
                                    <i class="fa fa-tags"></i> At vero eos
                                </li>
                                <li>
                                    <i class="fa fa-asterisk"></i> No Support
                                </li>
                                <li>
                                    <i class="fa fa-heart"></i> Fusce condimentum
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> Ut non libero
                                </li>
                                <li>
                                    <i class="fa fa-shopping-cart"></i> Consecte adiping elit
                                </li>
                            </ul>
                            <div class="pricing-footer">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                                </p>
                                <a href="javascript:;" class="btn yellow-crusta">
                                    Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--//End Pricing -->
                </div>
            </div>
        </div>
        <!-- END INLINE NOTIFICATIONS PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT INNER -->
</div>
<!-- BEGIN PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->

<!-- END FOOTER -->
</div>
@endsection
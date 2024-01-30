@extends('admin.index');
@section('articles')
    <div class="main" id="main">
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Đơn hàng <span>| Hôm nay</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>0</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">Tăng</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Thu nhập <span>| Trong tháng</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>0Đ</h6>
                                            <span class="text-success small pt-1 fw-bold">0%</span> <span
                                                class="text-muted small pt-2 ps-1">Tăng</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-4">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Khách hàng <span>| Trong tháng này</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>0</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart" style="min-height: 365px;">
                                        <div id="apexchartsrpg2s8td"
                                            class="apexcharts-canvas apexchartsrpg2s8td apexcharts-theme-light"
                                            style="width: 570px; height: 350px;"><svg id="SvgjsSvg1156" width="570"
                                                height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <foreignObject x="0" y="0" width="570" height="350">
                                                    <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                        <div class="apexcharts-legend-series" rel="1"
                                                            seriesname="Sales" data:collapsed="false"
                                                            style="margin: 2px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="1"
                                                                data:collapsed="false"
                                                                style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="1" i="0"
                                                                data:default-text="Sales" data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="2"
                                                            seriesname="Revenue" data:collapsed="false"
                                                            style="margin: 2px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="2"
                                                                data:collapsed="false"
                                                                style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="2" i="1"
                                                                data:default-text="Revenue" data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="3"
                                                            seriesname="Customers" data:collapsed="false"
                                                            style="margin: 2px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="3"
                                                                data:collapsed="false"
                                                                style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="3" i="2"
                                                                data:default-text="Customers" data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span>
                                                        </div>
                                                    </div>
                                                    <style type="text/css">
                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: inline-block;
                                                            cursor: pointer;
                                                            margin-right: 3px;
                                                            border-style: solid;
                                                        }

                                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                            display: inline-block;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <rect id="SvgjsRect1162" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1281" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(15.359375, 0)">
                                                    <g id="SvgjsG1282" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1284" font-family="Helvetica, Arial, sans-serif"
                                                            x="20" y="31.5" text-anchor="end" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1285">100</tspan>
                                                            <title>100</title>
                                                        </text><text id="SvgjsText1287"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="85.53999999999999" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1288">80</tspan>
                                                            <title>80</title>
                                                        </text><text id="SvgjsText1290"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="139.57999999999998" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1291">60</tspan>
                                                            <title>60</title>
                                                        </text><text id="SvgjsText1293"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="193.61999999999998" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1294">40</tspan>
                                                            <title>40</title>
                                                        </text><text id="SvgjsText1296"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="247.65999999999997" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1297">20</tspan>
                                                            <title>20</title>
                                                        </text><text id="SvgjsText1299"
                                                            font-family="Helvetica, Arial, sans-serif" x="20" y="301.7"
                                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1300">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1158" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(45.359375, 30)">
                                                    <defs id="SvgjsDefs1157">
                                                        <clipPath id="gridRectMaskrpg2s8td">
                                                            <rect id="SvgjsRect1167" width="520.640625" height="282.2"
                                                                x="-4" y="-6" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskrpg2s8td"></clipPath>
                                                        <clipPath id="nonForecastMaskrpg2s8td"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskrpg2s8td">
                                                            <rect id="SvgjsRect1168" width="562.640625" height="318.2"
                                                                x="-24" y="-24" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1186" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1187" stop-opacity="0.3"
                                                                stop-color="rgba(65,84,241,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop1188" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop1189" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1208" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1209" stop-opacity="0.3"
                                                                stop-color="rgba(46,202,106,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop1210" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop1211" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1230" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1231" stop-opacity="0.3"
                                                                stop-color="rgba(255,119,29,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop1232" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop1233" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1163" x1="0" y1="0"
                                                        x2="0" y2="270.2" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="270.2" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <line id="SvgjsLine1240" x1="0" y1="271.2"
                                                        x2="0" y2="277.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1241" x1="79.17548076923077" y1="271.2"
                                                        x2="79.17548076923077" y2="277.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1242" x1="158.35096153846155" y1="271.2"
                                                        x2="158.35096153846155" y2="277.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1243" x1="237.52644230769232" y1="271.2"
                                                        x2="237.52644230769232" y2="277.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1244" x1="316.7019230769231" y1="271.2"
                                                        x2="316.7019230769231" y2="277.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1245" x1="395.87740384615387" y1="271.2"
                                                        x2="395.87740384615387" y2="277.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1246" x1="475.05288461538464" y1="271.2"
                                                        x2="475.05288461538464" y2="277.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <g id="SvgjsG1236" class="apexcharts-grid">
                                                        <g id="SvgjsG1237" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1248" x1="0" y1="54.04"
                                                                x2="514.640625" y2="54.04" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1249" x1="0" y1="108.08"
                                                                x2="514.640625" y2="108.08" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1250" x1="0" y1="162.12"
                                                                x2="514.640625" y2="162.12" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1251" x1="0" y1="216.16"
                                                                x2="514.640625" y2="216.16" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1238" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1254" x1="0" y1="270.2"
                                                            x2="514.640625" y2="270.2" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1253" x1="0" y1="1"
                                                            x2="0" y2="270.2" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1239" class="apexcharts-grid-borders">
                                                        <line id="SvgjsLine1247" x1="0" y1="0"
                                                            x2="514.640625" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1252" x1="0" y1="270.2"
                                                            x2="514.640625" y2="270.2" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1280" x1="0" y1="271.2"
                                                            x2="514.640625" y2="271.2" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1169"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1170" class="apexcharts-series" zIndex="0"
                                                            seriesName="Sales" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1190"
                                                                d="M 0 270.2 L 0 186.438C18.997371112293653, 182.5480914389118, 86.11563969788111, 158.7775347227333, 118.76322115384616, 162.12S172.44502151114676, 199.32908726339085, 197.93870192307693, 194.54399999999998S252.14715041297592, 138.3623016239795, 277.1141826923077, 132.398S335.6678779779267, 167.6241876036398, 356.28966346153845, 156.716S410.49811195143747, 54.600301623979504, 435.4651442307692, 48.635999999999996S507.25743761873827, 112.33693551805278, 514.640625, 118.88799999999998 L 514.640625 270.2 L 0 270.2M 0 186.438z"
                                                                fill="url(#SvgjsLinearGradient1186)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMaskrpg2s8td)"
                                                                pathTo="M 0 270.2 L 0 186.438C18.997371112293653, 182.5480914389118, 86.11563969788111, 158.7775347227333, 118.76322115384616, 162.12S172.44502151114676, 199.32908726339085, 197.93870192307693, 194.54399999999998S252.14715041297592, 138.3623016239795, 277.1141826923077, 132.398S335.6678779779267, 167.6241876036398, 356.28966346153845, 156.716S410.49811195143747, 54.600301623979504, 435.4651442307692, 48.635999999999996S507.25743761873827, 112.33693551805278, 514.640625, 118.88799999999998 L 514.640625 270.2 L 0 270.2M 0 186.438z"
                                                                pathFrom="M -1 270.2 L -1 270.2 L 118.76322115384616 270.2 L 197.93870192307693 270.2 L 277.1141826923077 270.2 L 356.28966346153845 270.2 L 435.4651442307692 270.2 L 514.640625 270.2">
                                                            </path>
                                                            <path id="SvgjsPath1191"
                                                                d="M 0 186.438C18.997371112293653, 182.5480914389118, 86.11563969788111, 158.7775347227333, 118.76322115384616, 162.12S172.44502151114676, 199.32908726339085, 197.93870192307693, 194.54399999999998S252.14715041297592, 138.3623016239795, 277.1141826923077, 132.398S335.6678779779267, 167.6241876036398, 356.28966346153845, 156.716S410.49811195143747, 54.600301623979504, 435.4651442307692, 48.635999999999996S507.25743761873827, 112.33693551805278, 514.640625, 118.88799999999998"
                                                                fill="none" fill-opacity="1" stroke="#4154f1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMaskrpg2s8td)"
                                                                pathTo="M 0 186.438C18.997371112293653, 182.5480914389118, 86.11563969788111, 158.7775347227333, 118.76322115384616, 162.12S172.44502151114676, 199.32908726339085, 197.93870192307693, 194.54399999999998S252.14715041297592, 138.3623016239795, 277.1141826923077, 132.398S335.6678779779267, 167.6241876036398, 356.28966346153845, 156.716S410.49811195143747, 54.600301623979504, 435.4651442307692, 48.635999999999996S507.25743761873827, 112.33693551805278, 514.640625, 118.88799999999998"
                                                                pathFrom="M -1 270.2 L -1 270.2 L 118.76322115384616 270.2 L 197.93870192307693 270.2 L 277.1141826923077 270.2 L 356.28966346153845 270.2 L 435.4651442307692 270.2 L 514.640625 270.2"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1171"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG1173" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1174" r="4" cx="0"
                                                                        cy="186.438"
                                                                        class="apexcharts-marker no-pointer-events w601ram64"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="0" j="0" index="0"
                                                                        default-marker-size="4"></circle>
                                                                    <circle id="SvgjsCircle1175" r="4"
                                                                        cx="118.76322115384616" cy="162.12"
                                                                        class="apexcharts-marker no-pointer-events wmztbg08u"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="1" j="1" index="0"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1176" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1177" r="4"
                                                                        cx="197.93870192307693" cy="194.54399999999998"
                                                                        class="apexcharts-marker no-pointer-events whkh9om1g"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="2" j="2" index="0"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1178" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1179" r="4"
                                                                        cx="277.1141826923077" cy="132.398"
                                                                        class="apexcharts-marker no-pointer-events wca3d4tvhi"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="3" j="3" index="0"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1180" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1181" r="4"
                                                                        cx="356.28966346153845" cy="156.716"
                                                                        class="apexcharts-marker no-pointer-events wl0g5dlyo"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="4" j="4" index="0"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1182" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1183" r="4"
                                                                        cx="435.4651442307692" cy="48.635999999999996"
                                                                        class="apexcharts-marker no-pointer-events wxxg5njsh"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="5" j="5" index="0"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1184" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1185" r="4" cx="514.640625"
                                                                        cy="118.88799999999998"
                                                                        class="apexcharts-marker no-pointer-events wxjajhw2z"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="6" j="6" index="0"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1192" class="apexcharts-series" zIndex="1"
                                                            seriesName="Revenue" data:longestSeries="true" rel="2"
                                                            data:realIndex="1">
                                                            <path id="SvgjsPath1212"
                                                                d="M 0 270.2 L 0 240.47799999999998C16.115267659641532, 232.77854128997689, 91.54964103234013, 196.27359058294152, 118.76322115384616, 183.736S171.546875, 148.60999999999999, 197.93870192307693, 148.60999999999999S250.97686319915272, 181.15682532401314, 277.1141826923077, 183.736S330.7208824527436, 182.91940457584258, 356.28966346153845, 178.332S409.4445469281083, 132.80399235193144, 435.4651442307692, 129.696S503.0746029038031, 155.07618476372602, 514.640625, 159.418 L 514.640625 270.2 L 0 270.2M 0 240.47799999999998z"
                                                                fill="url(#SvgjsLinearGradient1208)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="1" clip-path="url(#gridRectMaskrpg2s8td)"
                                                                pathTo="M 0 270.2 L 0 240.47799999999998C16.115267659641532, 232.77854128997689, 91.54964103234013, 196.27359058294152, 118.76322115384616, 183.736S171.546875, 148.60999999999999, 197.93870192307693, 148.60999999999999S250.97686319915272, 181.15682532401314, 277.1141826923077, 183.736S330.7208824527436, 182.91940457584258, 356.28966346153845, 178.332S409.4445469281083, 132.80399235193144, 435.4651442307692, 129.696S503.0746029038031, 155.07618476372602, 514.640625, 159.418 L 514.640625 270.2 L 0 270.2M 0 240.47799999999998z"
                                                                pathFrom="M -1 270.2 L -1 270.2 L 118.76322115384616 270.2 L 197.93870192307693 270.2 L 277.1141826923077 270.2 L 356.28966346153845 270.2 L 435.4651442307692 270.2 L 514.640625 270.2">
                                                            </path>
                                                            <path id="SvgjsPath1213"
                                                                d="M 0 240.47799999999998C16.115267659641532, 232.77854128997689, 91.54964103234013, 196.27359058294152, 118.76322115384616, 183.736S171.546875, 148.60999999999999, 197.93870192307693, 148.60999999999999S250.97686319915272, 181.15682532401314, 277.1141826923077, 183.736S330.7208824527436, 182.91940457584258, 356.28966346153845, 178.332S409.4445469281083, 132.80399235193144, 435.4651442307692, 129.696S503.0746029038031, 155.07618476372602, 514.640625, 159.418"
                                                                fill="none" fill-opacity="1" stroke="#2eca6a"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="1" clip-path="url(#gridRectMaskrpg2s8td)"
                                                                pathTo="M 0 240.47799999999998C16.115267659641532, 232.77854128997689, 91.54964103234013, 196.27359058294152, 118.76322115384616, 183.736S171.546875, 148.60999999999999, 197.93870192307693, 148.60999999999999S250.97686319915272, 181.15682532401314, 277.1141826923077, 183.736S330.7208824527436, 182.91940457584258, 356.28966346153845, 178.332S409.4445469281083, 132.80399235193144, 435.4651442307692, 129.696S503.0746029038031, 155.07618476372602, 514.640625, 159.418"
                                                                pathFrom="M -1 270.2 L -1 270.2 L 118.76322115384616 270.2 L 197.93870192307693 270.2 L 277.1141826923077 270.2 L 356.28966346153845 270.2 L 435.4651442307692 270.2 L 514.640625 270.2"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1193"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="1">
                                                                <g id="SvgjsG1195" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1196" r="4" cx="0"
                                                                        cy="240.47799999999998"
                                                                        class="apexcharts-marker no-pointer-events wcpnps4mm"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="0" j="0" index="1"
                                                                        default-marker-size="4"></circle>
                                                                    <circle id="SvgjsCircle1197" r="4"
                                                                        cx="118.76322115384616" cy="183.736"
                                                                        class="apexcharts-marker no-pointer-events wkpo68c9d"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="1" j="1" index="1"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1198" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1199" r="4"
                                                                        cx="197.93870192307693" cy="148.60999999999999"
                                                                        class="apexcharts-marker no-pointer-events w23e8lhy2"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="2" j="2" index="1"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1200" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1201" r="4"
                                                                        cx="277.1141826923077" cy="183.736"
                                                                        class="apexcharts-marker no-pointer-events w179uix7c"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="3" j="3" index="1"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1202" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1203" r="4"
                                                                        cx="356.28966346153845" cy="178.332"
                                                                        class="apexcharts-marker no-pointer-events wil8pqcn8"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="4" j="4" index="1"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1204" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1205" r="4"
                                                                        cx="435.4651442307692" cy="129.696"
                                                                        class="apexcharts-marker no-pointer-events w2p0kg28l"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="5" j="5" index="1"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1206" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1207" r="4" cx="514.640625"
                                                                        cy="159.418"
                                                                        class="apexcharts-marker no-pointer-events wxh6rl4lc"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="6" j="6" index="1"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1214" class="apexcharts-series" zIndex="2"
                                                            seriesName="Customers" data:longestSeries="true"
                                                            rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath1234"
                                                                d="M 0 270.2 L 0 229.67C19.67942032809434, 231.17076879776593, 87.89474480301666, 248.5700655160479, 118.76322115384616, 240.47799999999998S171.91810462041602, 186.84399235193143, 197.93870192307693, 183.736S254.2447667415002, 212.5887294372527, 277.1141826923077, 221.564S330.17159829676643, 248.55597222181336, 356.28966346153845, 245.88199999999998S409.1040183574763, 206.25161894032877, 435.4651442307692, 205.35199999999998S503.6148402187899, 235.58643871787012, 514.640625, 240.47799999999998 L 514.640625 270.2 L 0 270.2M 0 229.67z"
                                                                fill="url(#SvgjsLinearGradient1230)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="2" clip-path="url(#gridRectMaskrpg2s8td)"
                                                                pathTo="M 0 270.2 L 0 229.67C19.67942032809434, 231.17076879776593, 87.89474480301666, 248.5700655160479, 118.76322115384616, 240.47799999999998S171.91810462041602, 186.84399235193143, 197.93870192307693, 183.736S254.2447667415002, 212.5887294372527, 277.1141826923077, 221.564S330.17159829676643, 248.55597222181336, 356.28966346153845, 245.88199999999998S409.1040183574763, 206.25161894032877, 435.4651442307692, 205.35199999999998S503.6148402187899, 235.58643871787012, 514.640625, 240.47799999999998 L 514.640625 270.2 L 0 270.2M 0 229.67z"
                                                                pathFrom="M -1 270.2 L -1 270.2 L 118.76322115384616 270.2 L 197.93870192307693 270.2 L 277.1141826923077 270.2 L 356.28966346153845 270.2 L 435.4651442307692 270.2 L 514.640625 270.2">
                                                            </path>
                                                            <path id="SvgjsPath1235"
                                                                d="M 0 229.67C19.67942032809434, 231.17076879776593, 87.89474480301666, 248.5700655160479, 118.76322115384616, 240.47799999999998S171.91810462041602, 186.84399235193143, 197.93870192307693, 183.736S254.2447667415002, 212.5887294372527, 277.1141826923077, 221.564S330.17159829676643, 248.55597222181336, 356.28966346153845, 245.88199999999998S409.1040183574763, 206.25161894032877, 435.4651442307692, 205.35199999999998S503.6148402187899, 235.58643871787012, 514.640625, 240.47799999999998"
                                                                fill="none" fill-opacity="1" stroke="#ff771d"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="2" clip-path="url(#gridRectMaskrpg2s8td)"
                                                                pathTo="M 0 229.67C19.67942032809434, 231.17076879776593, 87.89474480301666, 248.5700655160479, 118.76322115384616, 240.47799999999998S171.91810462041602, 186.84399235193143, 197.93870192307693, 183.736S254.2447667415002, 212.5887294372527, 277.1141826923077, 221.564S330.17159829676643, 248.55597222181336, 356.28966346153845, 245.88199999999998S409.1040183574763, 206.25161894032877, 435.4651442307692, 205.35199999999998S503.6148402187899, 235.58643871787012, 514.640625, 240.47799999999998"
                                                                pathFrom="M -1 270.2 L -1 270.2 L 118.76322115384616 270.2 L 197.93870192307693 270.2 L 277.1141826923077 270.2 L 356.28966346153845 270.2 L 435.4651442307692 270.2 L 514.640625 270.2"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1215"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="2">
                                                                <g id="SvgjsG1217" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1218" r="4" cx="0"
                                                                        cy="229.67"
                                                                        class="apexcharts-marker no-pointer-events wk92tgm6wg"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="0" j="0" index="2"
                                                                        default-marker-size="4"></circle>
                                                                    <circle id="SvgjsCircle1219" r="4"
                                                                        cx="118.76322115384616" cy="240.47799999999998"
                                                                        class="apexcharts-marker no-pointer-events wbo2kcao"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="1" j="1" index="2"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1220" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1221" r="4"
                                                                        cx="197.93870192307693" cy="183.736"
                                                                        class="apexcharts-marker no-pointer-events wd5lk3eft"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="2" j="2" index="2"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1222" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1223" r="4"
                                                                        cx="277.1141826923077" cy="221.564"
                                                                        class="apexcharts-marker no-pointer-events w7th07qxk"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="3" j="3" index="2"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1224" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1225" r="4"
                                                                        cx="356.28966346153845" cy="245.88199999999998"
                                                                        class="apexcharts-marker no-pointer-events w19xlynt"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="4" j="4" index="2"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1226" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1227" r="4"
                                                                        cx="435.4651442307692" cy="205.35199999999998"
                                                                        class="apexcharts-marker no-pointer-events w02jajkfd"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="5" j="5" index="2"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                                <g id="SvgjsG1228" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrpg2s8td)">
                                                                    <circle id="SvgjsCircle1229" r="4" cx="514.640625"
                                                                        cy="240.47799999999998"
                                                                        class="apexcharts-marker no-pointer-events wlq2fhgab"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        rel="6" j="6" index="2"
                                                                        default-marker-size="4"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1172" class="apexcharts-datalabels"
                                                            data:realIndex="0">
                                                        </g>
                                                        <g id="SvgjsG1194" class="apexcharts-datalabels"
                                                            data:realIndex="1">
                                                        </g>
                                                        <g id="SvgjsG1216" class="apexcharts-datalabels"
                                                            data:realIndex="2">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1255" x1="0" y1="0"
                                                        x2="514.640625" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1256" x1="0" y1="0"
                                                        x2="514.640625" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1257" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1258" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1260"
                                                                font-family="Helvetica, Arial, sans-serif" x="0" y="299.2"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1261">00:00</tspan>
                                                                <title>00:00</title>
                                                            </text><text id="SvgjsText1263"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="79.17548076923077" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1264">02:00</tspan>
                                                                <title>02:00</title>
                                                            </text><text id="SvgjsText1266"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="158.35096153846155" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1267">03:00</tspan>
                                                                <title>03:00</title>
                                                            </text><text id="SvgjsText1269"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="237.52644230769232" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1270">04:00</tspan>
                                                                <title>04:00</title>
                                                            </text><text id="SvgjsText1272"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="316.7019230769231" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1273">05:00</tspan>
                                                                <title>05:00</title>
                                                            </text><text id="SvgjsText1275"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="395.87740384615387" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1276">06:00</tspan>
                                                                <title>06:00</title>
                                                            </text><text id="SvgjsText1278"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="475.05288461538464" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1279">07:00</tspan>
                                                                <title>07:00</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1301" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1302" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1303" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1304" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1305" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(65, 84, 241);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(46, 202, 106);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 119, 29);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                        "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                        "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                        "2018-09-19T06:30:00.000Z"
                                                    ]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                    <div
                                        class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                        <div class="datatable-top">
                                            <div class="datatable-dropdown">
                                                <label>
                                                    <select class="datatable-selector">
                                                        <option value="5">5</option>
                                                        <option value="10" selected="">10</option>
                                                        <option value="15">15</option>
                                                        <option value="-1">All</option>
                                                    </select> entries per page
                                                </label>
                                            </div>
                                            <div class="datatable-search">
                                                <input class="datatable-input" placeholder="Search..." type="search"
                                                    title="Search within table">
                                            </div>
                                        </div>
                                        <div class="datatable-container">
                                            <table class="table table-borderless datatable datatable-table">
                                                <thead>
                                                    <tr>
                                                        <th data-sortable="true" style="width: 10.714285714285714%;">
                                                            <button class="datatable-sorter">#</button></th>
                                                        <th data-sortable="true" style="width: 23.46938775510204%;">
                                                            <button class="datatable-sorter">Customer</button></th>
                                                        <th data-sortable="true" style="width: 39.285714285714285%;">
                                                            <button class="datatable-sorter">Product</button></th>
                                                        <th data-sortable="true" style="width: 11.73469387755102%;">
                                                            <button class="datatable-sorter">Price</button></th>
                                                        <th data-sortable="true" class="red"
                                                            style="width: 14.795918367346939%;"><button
                                                                class="datatable-sorter">Status</button></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-index="0">
                                                        <td><a href="#">#2457</a></td>
                                                        <td>Brandon Jacob</td>
                                                        <td><a href="#" class="text-primary">At praesentium
                                                                minu</a>
                                                        </td>
                                                        <td>$64</td>
                                                        <td class="green"><span
                                                                class="badge bg-success">Approved</span>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="1">
                                                        <td><a href="#">#2147</a></td>
                                                        <td>Bridie Kessler</td>
                                                        <td><a href="#" class="text-primary">Blanditiis dolor
                                                                omnis
                                                                similique</a></td>
                                                        <td>$47</td>
                                                        <td class="green"><span class="badge bg-warning">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="2">
                                                        <td><a href="#">#2049</a></td>
                                                        <td>Ashleigh Langosh</td>
                                                        <td><a href="#" class="text-primary">At recusandae
                                                                consectetur</a></td>
                                                        <td>$147</td>
                                                        <td class="green"><span
                                                                class="badge bg-success">Approved</span>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="3">
                                                        <td><a href="#">#2644</a></td>
                                                        <td>Angus Grady</td>
                                                        <td><a href="#" class="text-primar">Ut voluptatem id earum
                                                                et</a></td>
                                                        <td>$67</td>
                                                        <td class="green"><span class="badge bg-danger">Rejected</span>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="4">
                                                        <td><a href="#">#2644</a></td>
                                                        <td>Raheem Lehner</td>
                                                        <td><a href="#" class="text-primary">Sunt similique
                                                                distinctio</a></td>
                                                        <td>$165</td>
                                                        <td class="green"><span
                                                                class="badge bg-success">Approved</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datatable-bottom">
                                            <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                                            <nav class="datatable-pagination">
                                                <ul class="datatable-pagination-list"></ul>
                                            </nav>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sold</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#"><img
                                                            src="assets/img/product-1.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa
                                                        voluptas nulla</a></td>
                                                <td>$64</td>
                                                <td class="fw-bold">124</td>
                                                <td>$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img
                                                            src="assets/img/product-2.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Exercitationem
                                                        similique
                                                        doloremque</a></td>
                                                <td>$46</td>
                                                <td class="fw-bold">98</td>
                                                <td>$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img
                                                            src="assets/img/product-3.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                        exercitationem</a></td>
                                                <td>$59</td>
                                                <td class="fw-bold">74</td>
                                                <td>$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img
                                                            src="assets/img/product-4.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint
                                                        rerum error</a></td>
                                                <td>$32</td>
                                                <td class="fw-bold">63</td>
                                                <td>$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img
                                                            src="assets/img/product-5.jpg" alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Sit unde debitis
                                                        delectus
                                                        repellendus</a></td>
                                                <td>$79</td>
                                                <td class="fw-bold">41</td>
                                                <td>$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

         

            </div>
        </section>
    </div>
@endsection

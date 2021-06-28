<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h5><span class="f-w-700">{{ str_replace('_', ' ', Request::segment(1)) }}</span> - {{ str_replace('_', ' ', Request::segment(2)) }}</h5>

            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="javascript:void(0)">{{ str_replace('_', ' ', Request::segment(1)) }}</a></li>
                <li class="active">{{ str_replace('_', ' ', Request::segment(2)) }}</li>
            </ul>
        </div>

        <div>
            <ul id="breadcrumb-right" class="hidden-xs">
                <li class="breadcrumb-right-info">
                    <h5>
                        BANDWIDTH <span class="text-success">3,23,357</span>
                    </h5>
                    <div class="sparkline hidden-xs hidden-md hidden-sm" id="sparkline1">
                        1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                    </div>
                </li>
                <li class="breadcrumb-right-info">
                    <h5>
                        TRAFFIC <span class="text-success">4,78,494</span>
                    </h5>
                    <div class="sparkline hidden-xs hidden-md hidden-sm" id="sparkline2">
                        110,150,300,130,400,240,220,310,220,300, 270, 210
                    </div>
                </li>
                <li class="breadcrumb-right-info">
                    <h5>
                        TRANSFER <span class="text-danger">2,81,281</span>
                    </h5>
                    <div class="sparkline hidden-xs hidden-md hidden-sm" id="sparkline3">
                        110,150,300,130,400,240,220,310,220,300, 270, 210
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
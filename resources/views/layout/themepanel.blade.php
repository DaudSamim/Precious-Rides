<!--BEGIN THEME PANEL-->
<div class="template-options-wrapper" id="theme_panel">
    <a href="javascript:void(0)" class="template-options-btn">
        <i class="ion-ios-settings" id="theme_panel_icon"></i>
    </a>
    <h1 class="template-option-logo">ALAR TAXI</h1>

    <h6 class="template-options-title">Template Settings</h6>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper">
        <label class="slim-options-label">Fixed Topbar</label>
        <div>
            <label class="toggle-switch m-b-0">
                <input type="checkbox" id="fixed_topbar" checked>
                <span class="toggle-switch-slider round"></span>
            </label>
        </div>
    </div>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper">
        <label class="slim-options-label">Minified Sidebar</label>
        <div>
            <label class="toggle-switch m-b-0">
                <input type="checkbox" id="minified_sidebar">
                <span class="toggle-switch-slider round"></span>
            </label>
        </div>
    </div>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper">
        <label class="slim-options-label">Sidebar Background Image</label>
        <div>
            <label class="toggle-switch m-b-0">
                <input type="checkbox" id="background_image_sidebar">
                <span class="toggle-switch-slider round"></span>
            </label>
        </div>
    </div>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper">
        <label class="slim-options-label">Sidebar Color</label>
        <div>
            <div class="toggle-switch m-b-0">
                <div class="fcp-colors m-l-75" id="sidebar_color">
                    <div class="color-selector top-bar-color-selector color-blue" data-color="blue"></div>
                    <div class="color-selector top-bar-color-selector color-purple" data-color="purple"></div>
                    <div class="color-selector top-bar-color-selector color-orange" data-color="orange"></div>
                    <div class="color-selector top-bar-color-selector color-green" data-color="green"></div>
                    <div class="color-selector top-bar-color-selector color-red" data-color="red"></div>
                    <div class="color-selector top-bar-color-selector color-azure" data-color="azure"></div>
                    <div class="color-selector top-bar-color-selector color-black selected" data-color="black"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper" id="sticky_nav_div">
        <ul class="bg_imgs p-l-0">
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-1.jpg') }}" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-3.jpg') }}" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-4.jpg') }}" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-5.jpg') }}" alt="">
                </a>
            </li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-bg.jpg') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>
<!--END THEME PANEL-->
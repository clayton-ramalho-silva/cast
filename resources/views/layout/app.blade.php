<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Cast - CRM </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    @include('layout.styles.styles')
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.html"><img alt="logo" src="assets/img/90x90.jpg"> <span class="navbar-brand-name">CORK</span></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/flag-ca.svg" class="flag-width" alt="flag"><span>English</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-img-value="flag-de" data-value="German" href="javascript:void(0);"><img src="assets/img/flag-de.svg" class="flag-width" alt="flag"> German</a>
                            <a class="dropdown-item" data-img-value="flag-sp" data-value="Spanish" href="javascript:void(0);"><img src="assets/img/flag-sp.svg" class="flag-width" alt="flag"> Spanish</a>
                            <a class="dropdown-item" data-img-value="flag-fr" data-value="French" href="javascript:void(0);"><img src="assets/img/flag-fr.svg" class="flag-width" alt="flag"> French</a>
                            <a class="dropdown-item" data-img-value="flag-ca" data-value="English" href="javascript:void(0);"><img src="assets/img/flag-ca.svg" class="flag-width" alt="flag"> English</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                        <div class="">
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">KY</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Kara Young</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">DA</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Daisy Anderson</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">OG</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Oscar Garner</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6>Andy King</h6>
                                <p>Manager</p>
                            </div>
                            <img src="assets/img/90x90.jpg" class="img-fluid" alt="admin-profile">
                            <span class="badge badge-success"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto slack">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slack"><path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"></path><path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path><path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z"></path><path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path><path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z"></path><path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path><path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z"></path><path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path></svg>
                                <div class="media-body">
                                    <h5>Slack</h5>
                                    <p>5</p>
                                </div>
                            </div>
                            <div class="media mx-auto trello">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect></svg>
                                <div class="media-body">
                                    <h5>Trello</h5>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user_profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span> Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span> Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> CORK </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <li class="active">
                                <a href="index.html"> Analytics </a>
                            </li>
                            <li>
                                <a href="index2.html"> Sales </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Apps</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                            <li>
                                <a href="apps_chat.html"> Chat </a>
                            </li>
                            <li>
                                <a href="apps_mailbox.html"> Mailbox </a>
                            </li>
                            <li>
                                <a href="apps_todoList.html"> Todo List </a>
                            </li>
                            <li>
                                <a href="apps_notes.html">Notes</a>
                            </li>
                            <li>
                                <a href="apps_scrumboard.html">Task Board</a>
                            </li>
                            <li>
                                <a href="apps_contacts.html">Contacts</a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#appInvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Invoice <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="appInvoice" data-parent="#app">
                                    <li>
                                        <a href="apps_invoice-list.html"> List </a>
                                    </li>
                                    <li>
                                        <a href="apps_invoice-preview.html"> Preview </a>
                                    </li>
                                    <li>
                                        <a href="apps_invoice-add.html"> Add </a>
                                    </li>
                                    <li>
                                        <a href="apps_invoice-edit.html"> Edit </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="apps_calendar.html"> Calendar</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Components</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                            <li>
                                <a href="component_tabs.html"> Tabs </a>
                            </li>
                            <li>
                                <a href="component_accordion.html"> Accordions  </a>
                            </li>
                            <li>
                                <a href="component_modal.html"> Modals </a>
                            </li>
                            <li>
                                <a href="component_cards.html"> Cards </a>
                            </li>
                            <li>
                                <a href="component_bootstrap_carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="component_blockui.html"> Block UI </a>
                            </li>
                            <li>
                                <a href="component_countdown.html"> Countdown </a>
                            </li>
                            <li>
                                <a href="component_counter.html"> Counter </a>
                            </li>
                            <li>
                                <a href="component_sweetalert.html"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="component_timeline.html"> Timeline </a>
                            </li>
                            <li>
                                <a href="component_snackbar.html"> Notifications </a>
                            </li>
                            <li>
                                <a href="component_session_timeout.html"> Session Timeout </a>
                            </li>
                            <li>
                                <a href="component_media_object.html"> Media Object </a>
                            </li>
                            <li>
                                <a href="component_list_group.html"> List Group </a>
                            </li>
                            <li>
                                <a href="component_pricing_table.html"> Pricing Tables </a>
                            </li>
                            <li>
                                <a href="component_lightbox.html"> Lightbox </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu single-menu">
                        <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>UI Kit</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                            <li>
                                <a href="ui_alerts.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="ui_avatar.html"> Avatar </a>
                            </li>
                            <li>
                                <a href="ui_badges.html"> Badges </a>
                            </li>
                            <li>
                                <a href="ui_breadcrumbs.html"> Breadcrumbs </a>
                            </li>
                            <li>
                                <a href="ui_buttons.html"> Buttons </a>
                            </li>
                            <li>
                                <a href="ui_buttons_group.html"> Button Groups </a>
                            </li>
                            <li>
                                <a href="ui_color_library.html"> Color Library </a>
                            </li>
                            <li>
                                <a href="ui_dropdown.html"> Dropdown </a>
                            </li>
                            <li>
                                <a href="ui_infobox.html"> Infobox </a>
                            </li>
                            <li>
                                <a href="ui_jumbotron.html"> Jumbotron </a>
                            </li>
                            <li>
                                <a href="ui_loader.html"> Loader </a>
                            </li>
                            <li>
                                <a href="ui_pagination.html"> Pagination </a>
                            </li>
                            <li>
                                <a href="ui_popovers.html"> Popovers </a>
                            </li>
                            <li>
                                <a href="ui_progress_bar.html"> Progress Bar </a>
                            </li>
                            <li>
                                <a href="ui_search.html"> Search </a>
                            </li>
                            <li>
                                <a href="ui_tooltips.html"> Tooltips </a>
                            </li>
                            <li>
                                <a href="ui_treeview.html"> Treeview </a>
                            </li>
                            <li>
                                <a href="ui_typography.html"> Typography </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                <span>Tables</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                            <li>
                                <a href="table_basic.html"> Basic </a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                                    <li>
                                        <a href="table_dt_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_striped_table.html"> Striped Table </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_custom.html"> Custom </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_range_search.html"> Range Search </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_html5.html"> HTML5 Export </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Forms</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms"  data-parent="#topAccordion">
                            <li>
                                <a href="form_bootstrap_basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="form_input_group_basic.html"> Input Group </a>
                            </li>
                            <li>
                                <a href="form_layouts.html"> Layouts </a>
                            </li>
                            <li>
                                <a href="form_validation.html"> Validation </a>
                            </li>
                            <li>
                                <a href="form_input_mask.html"> Input Mask </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                            </li>
                            <li>
                                <a href="form_select2.html"> Select2 </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                            </li>
                            <li>
                                <a href="form_maxlength.html"> Maxlength </a>
                            </li>
                            <li>
                                <a href="form_checkbox_radio.html"> Checkbox &amp; Radio </a>
                            </li>
                            <li>
                                <a href="form_switches.html"> Switches </a>
                            </li>
                            <li>
                                <a href="form_wizard.html"> Wizards </a>
                            </li>
                            <li>
                                <a href="form_fileupload.html"> File Upload </a>
                            </li>
                            <li>
                                <a href="form_quill.html"> Quill Editor </a>
                            </li>
                            <li>
                                <a href="form_markdown.html"> Markdown Editor </a>
                            </li>
                            <li>
                                <a href="form_date_range_picker.html"> Date &amp; Range Picker </a>
                            </li>
                            <li>
                                <a href="form_clipboard.html"> Clipboard </a>
                            </li>
                            <li>
                                <a href="form_typeahead.html"> Typeahead </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Pages</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                            <li>
                                <a href="pages_helpdesk.html"> Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="pages_faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="pages_faq2.html"> FAQ 2 </a>
                            </li>
                            <li>
                                <a href="pages_privacy.html"> Privacy Policy </a>
                            </li>
                            <li>
                                <a href="pages_coming_soon.html" target="_blank"> Coming Soon </a>
                            </li>
                            <li>
                                <a href="user_profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="user_account_setting.html"> Account Settings </a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more">
                                    <li>
                                        <a href="pages_error404.html" target="_blank"> 404 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500.html" target="_blank"> 500 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503.html" target="_blank"> 503 </a>
                                    </li>
                                    <li>
                                        <a href="pages_maintenence.html" target="_blank"> Maintanence </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#page">
                                    <li>
                                        <a target="_blank" href="auth_login.html"> Login </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="auth_login_boxed.html"> Login Boxed </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#page">
                                    <li>
                                        <a target="_blank" href="auth_register.html"> Register </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="auth_register_boxed.html"> Register Boxed </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#page">
                                    <li>
                                        <a target="_blank" href="auth_pass_recovery.html"> Recover ID </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#page">
                                    <li>
                                        <a target="_blank" href="auth_lockscreen.html"> Unlock </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="auth_lockscreen_boxed.html"> Unlock Boxed </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                <span>More</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                            <li>
                                <a href="dragndrop_dragula.html"> Drag and Drop</a>
                            </li>
                            <li>
                                <a href="widgets.html"> Widgets </a>
                            </li>
                            <li>
                                <a href="map_jvector.html"> Vector Maps</a>
                            </li>
                            <li>
                                <a href="charts_apex.html"> Charts </a>
                            </li>
                            <li>
                                <a href="fonticons.html"> Font Icons </a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Starter Kit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu eq-animated eq-fadeInUp" id="starter-kit" data-parent="#more">
                                    <li>
                                        <a href="starter_kit_blank_page.html"> Blank Page </a>
                                    </li>
                                    <li>
                                        <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                                    </li>
                                    <li>
                                        <a href="starter_kit_alt_menu.html"> Alternate Menu </a>
                                    </li>
                                    <li>
                                        <a href="starter_kit_click_menu.html"> Click Menu </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a target="_blank" href="../../documentation/index.html"> Documentation </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboad</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Analytics</a></li>
                        </ol>
                    </nav>
                    <div class="dropdown filter custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Analytics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                            <a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics" href="javascript:void(0);">Daily Analytics</a>
                            <a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics" href="javascript:void(0);">Weekly Analytics</a>
                            <a class="dropdown-item" data-value="<span>Show</span> : Monthly Analytics" href="javascript:void(0);">Monthly Analytics</a>
                            <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download All</a>
                            <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share Statistics</a>
                        </div>
                    </div>
                </div>

                <div class="row layout-top-spacing">

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="">Statistics</h6>

                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="w-chart">

                                <div class="w-chart-section total-visits-content">
                                    <div class="w-detail">
                                        <p class="w-title">Total Visits</p>
                                        <p class="w-stats">423,964</p>
                                    </div>
                                    <div class="w-chart-render-one">
                                        <div id="total-users"></div>
                                    </div>
                                </div>


                                <div class="w-chart-section paid-visits-content">
                                    <div class="w-detail">
                                        <p class="w-title">Paid Visits</p>
                                        <p class="w-stats">7,929</p>
                                    </div>
                                    <div class="w-chart-render-one">
                                        <div id="paid-visits"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-account-invoice-two">
                            <div class="widget-content">
                                <div class="account-box">
                                    <div class="info">
                                        <div class="inv-title">
                                            <h5 class="">Total Balance</h5>
                                        </div>
                                        <div class="inv-balance-info">

                                            <p class="inv-balance">$ 41,741.42</p>

                                            <span class="inv-stats balance-credited">+ 2453</span>

                                        </div>
                                    </div>
                                    <div class="acc-action">
                                        <div class="">
                                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                                        </div>
                                        <a href="javascript:void(0);">Upgrade</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-header">
                                    <div class="w-info">
                                        <h6 class="value">Expenses</h6>
                                    </div>
                                    <div class="task-action">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-content">

                                    <div class="w-info">
                                        <p class="value">$ 45,141 <span>this week</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></p>
                                    </div>

                                </div>

                                <div class="w-progress-stats">
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="">
                                        <div class="w-icon">
                                            <p>57%</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <div class="">
                                    <h5 class="">Unique Visitors</h5>
                                </div>

                                <div class="dropdown ">
                                    <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <div id="uniqueVisits"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-five">

                            <div class="widget-heading">
                                <h5 class="">Activity Log</h5>

                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">

                                <div class="w-shadow-top"></div>

                                <div class="mt-container mx-auto">
                                    <div class="timeline-line">

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>New project created : <a href="javscript:void(0);"><span>[Cork Admin Template]</span></a></h5>
                                                </div>
                                                <p>27 Feb, 2020</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Mail sent to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></h5>
                                                </div>
                                                <p>28 Feb, 2020</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Server Logs Updated</h5>
                                                </div>
                                                <p>27 Feb, 2020</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Task Completed : <a href="javscript:void(0);"><span>[Backup Files EOD]</span></a></h5>
                                                </div>
                                                <p>01 Mar, 2020</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Documents Submitted from <a href="javascript:void(0);">Sara</a></h5>
                                                    <span class=""></span>
                                                </div>
                                                <p>10 Mar, 2020</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Server rebooted successfully</h5>
                                                    <span class=""></span>
                                                </div>
                                                <p>06 Apr, 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-shadow-bottom"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-four">
                            <div class="widget-heading">
                                <h5 class="">Visitors by Browser</h5>
                            </div>
                            <div class="widget-content">
                                <div class="vistorsBrowser">
                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            <div class="w-browser-info">
                                                <h6>Chrome</h6>
                                                <p class="browser-count">65%</p>
                                            </div>
                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                        </div>
                                        <div class="w-browser-details">

                                            <div class="w-browser-info">
                                                <h6>Safari</h6>
                                                <p class="browser-count">25%</p>
                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        </div>
                                        <div class="w-browser-details">

                                            <div class="w-browser-info">
                                                <h6>Others</h6>
                                                <p class="browser-count">15%</p>
                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row widget-statistic">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-followers">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            </div>
                                            <div class="">
                                                <p class="w-value">31.6K</p>
                                                <h5 class="">Followers</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content">
                                        <div class="w-chart">
                                            <div id="hybrid_followers"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-referral">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                            </div>
                                            <div class="">
                                                <p class="w-value">1,900</p>
                                                <h5 class="">Referral</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content">
                                        <div class="w-chart">
                                            <div id="hybrid_followers1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-engagement">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            </div>
                                            <div class="">
                                                <p class="w-value">18.2%</p>
                                                <h5 class="">Engagement</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content">
                                        <div class="w-chart">
                                            <div id="hybrid_followers3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-card-one">
                            <div class="widget-content">

                                <div class="media">
                                    <div class="w-img">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                    </div>
                                    <div class="media-body">
                                        <h6>Jimmy Turner</h6>
                                        <p class="meta-date-time">Monday, Nov 18</p>
                                    </div>
                                </div>

                                <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat" nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                                <div class="w-action">
                                    <div class="card-like">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                        <span>551 Likes</span>
                                    </div>

                                    <div class="read-more">
                                        <a href="javascript:void(0);">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-card-two">
                            <div class="widget-content">

                                <div class="media">
                                    <div class="w-img">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                    </div>
                                    <div class="media-body">
                                        <h6>Dev Summit - New York</h6>
                                        <p class="meta-date-time">Bronx, NY</p>
                                    </div>
                                </div>

                                <div class="card-bottom-section">
                                    <h5>4 Members Going</h5>
                                    <div class="img-group">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                    </div>
                                    <a href="javascript:void(0);" class="btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-five">

                            <div class="widget-heading">

                                <a href="javascript:void(0)" class="task-info">

                                    <div class="usr-avatar">
                                        <span>FD</span>
                                    </div>

                                    <div class="w-title">

                                        <h5>Figma Design</h5>
                                        <span>Design Reset</span>

                                    </div>

                                </a>

                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View Project</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit Project</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="widget-content">

                                <p>Doloribus nisi vel suscipit modi, optio ex repudiandae voluptatibus officiis commodi. Nesciunt quas aut neque incidunt!</p>

                                <div class="progress-data">

                                    <div class="progress-info">
                                        <div class="task-count"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg><p>5 Tasks</p></div>
                                        <div class="progress-stats"><p>86.2%</p></div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>

                                <div class="meta-info">

                                    <div class="due-time">
                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 3 Days Left</p>
                                    </div>


                                    <div class="avatar--group">

                                        <div class="avatar translateY-axis more-group">
                                            <span class="avatar-title">+6</span>
                                        </div>
                                        <div class="avatar translateY-axis">
                                            <img alt="avatar" src="assets/img/90x90.jpg"/>
                                        </div>
                                        <div class="avatar translateY-axis">
                                            <img alt="avatar" src="assets/img/90x90.jpg"/>
                                        </div>
                                        <div class="avatar translateY-axis">
                                            <img alt="avatar" src="assets/img/90x90.jpg"/>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('layout.scripts.scripts')
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="assets/js/dashboard/dash_2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>

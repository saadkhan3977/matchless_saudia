<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <?php
    $webstyle = new App\Models\GeneralSettingWebStyle;
    $generalsetting = $webstyle::first();
  ?>
  <title>{{($generalsetting) ? $generalsetting->title : null}} - @yield('page-title')</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="_token" content="{{ csrf_token() }}">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  {{-- <link rel="apple-touch-icon" href="/admin/assets/images/logo.png"> --}}
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  {{-- <link rel="shortcut icon" sizes="196x196" href="/admin/assets/images/logo.png"> --}}
  
  <!-- style -->
  <link rel="stylesheet" href="/admin/assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="/admin/assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="/admin/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/admin/assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="/admin/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="/admin/assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="/admin/assets/styles/font.css" type="text/css" />

  {{-- Editor --}}
  <!-- include libraries(jQuery, bootstrap) -->

{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/admin/editor/summernote.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="/admin/tags/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.css" rel="stylesheet" type="text/css">



<!-- include summernote css/js -->
    
</head>
  
<style type="text/css">
    .generalsetting_admin{
        color: {{($generalsetting) ? $generalsetting->admin_text_color : null}};
        background-color: {{($generalsetting) ? $generalsetting->admin_background : null}};
    }
    .generalsetting_admin_checkbox{
        /*color: {{($generalsetting) ? $generalsetting->admin_text_color : null}};*/
        background-color: {{($generalsetting) ? $generalsetting->admin_text_color : null}};
    }
</style>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk generalsetting_admin" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
            <div ui-include="'/admin/assets/images/logo.png'"></div>
            <img src="/admin/assets/images/logo.png" alt="." class="hide">
            <span class="hidden-folded inline">{{($generalsetting) ? $generalsetting->title : null}}</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">
            
              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Main</small>
                </li>
                <li>
                  <a href="/admin/dashboard" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'/admin/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="/admin/header-menu" >
                    <span class="nav-icon">
                      <i class="material-icons">menu 
                        <span ui-include="'/admin/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Menu</span>
                  </a>
                </li>
                {{-- <li>
                  <a href="/admin/manage-staff" >
                    <span class="nav-icon">
                      <i class="material-icons">perm_identity 
                        <span ui-include="'/admin/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Manage Staff</span>
                  </a>
                </li> --}}
                {{-- <li>
                  <a href="/admin/services" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'/admin/assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Manage Services</span>
                  </a>
                </li> --}}
                {{-- <li>
                  <a href="/admin/gallery" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'/admin/assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Manage Gallery</span>
                  </a>
                </li> --}}
                <li>
                  <a href="/admin/emails" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Manage Emails</span>
                  </a>
                </li>
                <li>
                  <a href="/admin/testimonial" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Manage Testimonial</span>
                  </a>
                </li>
                <li>
                  <a href="/admin/jobs" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Manage Jobs</span>
                  </a>
                </li>
                {{-- <li>
                  <a href="/admin/schedule" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Schedule</span>
                  </a>
                </li> --}}
                <li>
                  <a href="/admin/team" >
                    <span class="nav-icon">
                      <i class="fa fa-users">
                      </i>
                    </span>
                    <span class="nav-text">Manage Team</span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    
                    <span class="nav-icon">
                      <i class="material-icons">pages 
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Pages</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                        <a>
                          <span class="nav-caret">
                            <i class="fa fa-caret-down"></i>
                          </span>
                          <span class="nav-text">Home</span>
                        </a>
                        <ul class="nav-sub">
                          <li>
                            <a href="/admin/home/video">
                              <span class="nav-text">Section 1</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/home/hospitality_consultancy">
                              <span class="nav-text">Section 2</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/home/projects">
                              <span class="nav-text">Section 3</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/home/missions">
                              <span class="nav-text">Section 4</span>
                            </a>
                          </li>
                          {{-- <li>
                            <a href="/admin/home/missions_features">
                              <span class="nav-text">Section 5</span>
                            </a>
                          </li> --}}
                          <li>
                            <a href="/admin/home/contact">
                              <span class="nav-text">Section 5</span>
                            </a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                          <span class="nav-caret">
                            <i class="fa fa-caret-down"></i>
                          </span>
                          <span class="nav-text">About Us</span>
                        </a>
                        <ul class="nav-sub">
                          <li>
                            <a href="/admin/about/about_sec_one">
                              <span class="nav-text">Section 1</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/about/about_sec_two">
                              <span class="nav-text">Section 2</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/about/about_sec_three">
                              <span class="nav-text">Section 3</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/about/about_sec_four">
                              <span class="nav-text">Section 4</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/about/about_sec_five">
                              <span class="nav-text">Section 5</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/about/about_sec_six">
                              <span class="nav-text">Section 6</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/about/about_sec_seven">
                              <span class="nav-text">Gallery Section</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/about/about_blog">
                              <span class="nav-text">Blog Section</span>
                            </a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                          <span class="nav-caret">
                            <i class="fa fa-caret-down"></i>
                          </span>
                          <span class="nav-text">Career</span>
                        </a>
                        <ul class="nav-sub">
                          <li>
                            <a href="/admin/career/sec_one">
                              <span class="nav-text">Section 1</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/career/sec_two">
                              <span class="nav-text">Section 2</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/career/sec_three">
                              <span class="nav-text">Section 3</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/career/sec_four">
                              <span class="nav-text">Section 4</span>
                            </a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                          <span class="nav-caret">
                            <i class="fa fa-caret-down"></i>
                          </span>
                          <span class="nav-text">Projects</span>
                        </a>
                        <ul class="nav-sub">
                          <li>
                            <a href="/admin/projects/text">
                              <span class="nav-text">Page Description</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/projects">
                              <span class="nav-text">Projects</span>
                            </a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                          <span class="nav-caret">
                            <i class="fa fa-caret-down"></i>
                          </span>
                          <span class="nav-text">Services</span>
                        </a>
                        <ul class="nav-sub">
                          <li>
                            <a>
                              <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                              </span>
                              <span class="nav-text">Consultacny</span>
                            </a>
                            <ul class="nav-sub">
                              <li>
                                <a href="/admin/consultancy/sec_one">
                                  <span class="nav-text">Section 1</span>
                                </a>
                              </li>
                              <li>
                                <a href="/admin/consultancy/sec_two">
                                  <span class="nav-text">Section 2</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a>
                              <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                              </span>
                              <span class="nav-text">Interior</span>
                            </a>
                            <ul class="nav-sub">
                              <li>
                                <a href="/admin/interior/sec_one">
                                  <span class="nav-text">Section 1</span>
                                </a>
                              </li>
                              <li>
                                <a href="/admin/interior/sec_two">
                                  <span class="nav-text">Section 2</span>
                                </a>
                              </li>
                              <li>
                                <a href="/admin/interior/sec_three">
                                  <span class="nav-text">Section 3</span>
                                </a>
                              </li>
                              <li>
                                <a href="/admin/interior/sec_four">
                                  <span class="nav-text">Section 4</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                          <span class="nav-caret">
                            <i class="fa fa-caret-down"></i>
                          </span>
                          <span class="nav-text">Contact</span>
                        </a>
                        <ul class="nav-sub">
                          <li>
                            <a href="/admin/contact/question">
                              <span class="nav-text">Send Your Question</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/contact/form">
                              <span class="nav-text">Form Labels</span>
                            </a>
                          </li>
                          <li>
                            <a href="/admin/contact/visit">
                              <span class="nav-text">Visit Us</span>
                            </a>
                          </li>

                          <li>
                            <a href="/admin/user_contact/">
                              <span class="nav-text">User Contact</span>
                            </a>
                          </li>
                        </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    
                    <span class="nav-icon">
                      <i class="material-icons">settings 
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">General Settings</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="/admin/general-setting/logo">
                        <span class="nav-text">Logo</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/general-setting/favicon">
                        <span class="nav-text">Favicon</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/general-setting/preloader">
                        <span class="nav-text">Preloader</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/general-setting/webstyle" >
                        <span class="nav-text">Website Style</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/general-setting/header">
                        <span class="nav-text">Footer</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Blog</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="/admin/blog_category" >
                        <span class="nav-text">Categories</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/blog_tags" >
                        <span class="nav-text">Tags</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/blog_page" >
                        <span class="nav-text">Page Detail</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/blog">
                        <span class="nav-text">Blogs</span>
                      </a>
                    </li>
                  </ul>
                </li>
                {{-- <li>
                  <a href="dashboard.html" >
                    <span class="nav-icon">
                      <i class="material-icons">language 
                        <span ui-include="'/admin/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Language Settings</span>
                  </a>
                </li> --}}
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    
                    <span class="nav-icon">
                      <i class="material-icons">settings_input_antenna 
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Social Settings</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="/admin/social-setting/links">
                        <span class="nav-text">Social Links</span>
                      </a>
                    </li>
                    {{-- <li>
                      <a href="/admin/social-setting/facebook" >
                        <span class="nav-text">Facebook Login</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/social-setting/google" >
                        <span class="nav-text">Google Login</span>
                      </a>
                    </li> --}}
                  </ul>
                </li>

                {{-- <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">build
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Seo Tools</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="#" >
                        <span class="nav-text">Popular Posts</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" >
                        <span class="nav-text">Google Analytics</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/seotools/keywords">
                        <span class="nav-text">Website Meta Keywords</span>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                {{-- <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <b class="label rounded label-sm primary">5</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/admin/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Apps</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="inbox.html" >
                        <span class="nav-text">Inbox</span>
                      </a>
                    </li>
                    <li>
                      <a href="contact.html" >
                        <span class="nav-text">Contacts</span>
                      </a>
                    </li>
                    <li>
                      <a href="calendar.html" >
                        <span class="nav-text">Calendar</span>
                      </a>
                    </li>
                  </ul>
                </li> --}}
            
                {{-- <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'/admin/assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Layouts</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="headers.html" >
                        <span class="nav-text">Header</span>
                      </a>
                    </li>
                    <li>
                      <a href="asides.html" >
                        <span class="nav-text">Aside</span>
                      </a>
                    </li>
                    <li>
                      <a href="footers.html" >
                        <span class="nav-text">Footer</span>
                      </a>
                    </li>
                  </ul>
                </li> --}}
            
                {{-- <li>
                  <a href="widget.html" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'/admin/assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Widgets</span>
                  </a>
                </li> --}}
            
                {{-- <li class="nav-header hidden-folded">
                  <small class="text-muted">Components</small>
                </li> --}}
            
                {{-- <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <b class="label label-sm accent">8</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe429;
                        <span ui-include="'/admin/assets/images/i_4.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">UI kit</span>
                  </a>
                  <ul class="nav-sub nav-mega nav-mega-3">
                    <li>
                      <a href="arrow.html" >
                        <span class="nav-text">Arrow</span>
                      </a>
                    </li>
                    <li>
                      <a href="box.html" >
                        <span class="nav-text">Box</span>
                      </a>
                    </li>
                    <li>
                      <a href="button.html" >
                        <span class="nav-text">Button</span>
                      </a>
                    </li>
                    <li>
                      <a href="color.html" >
                        <span class="nav-text">Color</span>
                      </a>
                    </li>
                    <li>
                      <a href="dropdown.html" >
                        <span class="nav-text">Dropdown</span>
                      </a>
                    </li>
                    <li>
                      <a href="grid.html" >
                        <span class="nav-text">Grid</span>
                      </a>
                    </li>
                    <li>
                      <a href="icon.html" >
                        <span class="nav-text">Icon</span>
                      </a>
                    </li>
                    <li>
                      <a href="label.html" >
                        <span class="nav-text">Label</span>
                      </a>
                    </li>
                    <li>
                      <a href="list.html" >
                        <span class="nav-text">List Group</span>
                      </a>
                    </li>
                    <li>
                      <a href="modal.html" >
                        <span class="nav-text">Modal</span>
                      </a>
                    </li>
                    <li>
                      <a href="nav.html" >
                        <span class="nav-text">Nav</span>
                      </a>
                    </li>
                    <li>
                      <a href="progress.html" >
                        <span class="nav-text">Progress</span>
                      </a>
                    </li>
                    <li>
                      <a href="social.html" >
                        <span class="nav-text">Social</span>
                      </a>
                    </li>
                    <li>
                      <a href="sortable.html" >
                        <span class="nav-text">Sortable</span>
                      </a>
                    </li>
                    <li>
                      <a href="streamline.html" >
                        <span class="nav-text">Streamline</span>
                      </a>
                    </li>
                    <li>
                      <a href="timeline.html" >
                        <span class="nav-text">Timeline</span>
                      </a>
                    </li>
                    <li>
                      <a href="map.vector.html" >
                        <span class="nav-text">Vector Map</span>
                      </a>
                    </li>
                  </ul>
                </li> --}}
            
                {{-- <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label"><b class="label no-bg">9</b></span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3e8;
                        <span ui-include="'/admin/assets/images/i_5.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Pages</span>
                  </a>
                  <ul class="nav-sub nav-mega">
                    <li>
                      <a href="profile.html" >
                        <span class="nav-text">Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="setting.html" >
                        <span class="nav-text">Setting</span>
                      </a>
                    </li>
                    <li>
                      <a href="search.html" >
                        <span class="nav-text">Search</span>
                      </a>
                    </li>
                    <li>
                      <a href="faq.html" >
                        <span class="nav-text">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <a href="gallery.html" >
                        <span class="nav-text">Gallery</span>
                      </a>
                    </li>
                    <li>
                      <a href="invoice.html" >
                        <span class="nav-text">Invoice</span>
                      </a>
                    </li>
                    <li>
                      <a href="price.html" >
                        <span class="nav-text">Price</span>
                      </a>
                    </li>
                    <li>
                      <a href="blank.html" >
                        <span class="nav-text">Blank</span>
                      </a>
                    </li>
                    <li>
                      <a href="signin.html" >
                        <span class="nav-text">Sign In</span>
                      </a>
                    </li>
                    <li>
                      <a href="signup.html" >
                        <span class="nav-text">Sign Up</span>
                      </a>
                    </li>
                    <li>
                      <a href="forgot-password.html" >
                        <span class="nav-text">Forgot Password</span>
                      </a>
                    </li>
                    <li>
                      <a href="lockme.html" >
                        <span class="nav-text">Lockme Screen</span>
                      </a>
                    </li>
                    <li>
                      <a href="404.html" >
                        <span class="nav-text">Error 404</span>
                      </a>
                    </li>
                    <li>
                      <a href="505.html" >
                        <span class="nav-text">Error 505</span>
                      </a>
                    </li>
                  </ul>
                </li> --}}
            
                {{-- <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe39e;
                        <span ui-include="'/admin/assets/images/i_6.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Form</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="form.layout.html" >
                        <span class="nav-text">Form Layout</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.element.html" >
                        <span class="nav-text">Form Element</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.validation.html" >
                        <span class="nav-text">Form Validation</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.select.html" >
                        <span class="nav-text">Select</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.editor.html" >
                        <span class="nav-text">Editor</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.picker.html">
                        <span class="nav-text">Picker</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.wizard.html">
                        <span class="nav-text">Wizard</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.dropzone.html" class="no-ajax" >
                        <span class="nav-text">File Upload</span>
                      </a>
                    </li>
                  </ul>
                </li> --}}
            
                {{-- <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe896;
                        <span ui-include="'/admin/assets/images/i_7.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Tables</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="static.html" >
                        <span class="nav-text">Static table</span>
                      </a>
                    </li>
                    <li>
                      <a href="datatable.html" >
                        <span class="nav-text">Datatable</span>
                      </a>
                    </li>
                    <li>
                      <a href="footable.html" >
                        <span class="nav-text">Footable</span>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                {{-- <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label hidden-folded">
                      <b class="label label-sm info">N</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe1b8;
                        <span ui-include="'/admin/assets/images/i_8.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Charts</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="chart.html" >
                        <span class="nav-text">Chart</span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <span class="nav-text">Echarts</span>
                      </a>
                      <ul class="nav-sub">
                        <li>
                          <a href="echarts-line.html" >
                            <span class="nav-text">line</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-bar.html" >
                            <span class="nav-text">Bar</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-pie.html" >
                            <span class="nav-text">Pie</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-scatter.html" >
                            <span class="nav-text">Scatter</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-radar-chord.html" >
                            <span class="nav-text">Radar &amp; Chord</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-gauge-funnel.html" >
                            <span class="nav-text">Gauges &amp; Funnel</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-map.html" >
                            <span class="nav-text">Map</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li> --}}
            
                {{-- <li class="nav-header hidden-folded">
                  <small class="text-muted">Help</small>
                </li> --}}
                
                {{-- <li class="hidden-folded" >
                  <a href="docs.html" >
                    <span class="nav-text">Documents</span>
                  </a>
                </li> --}}
            
              </ul>
          </nav>
      </div>
      {{-- <div class="b-t">
        <div class="nav-fold">
            <a href="profile.html">
                <span class="pull-left">
                  <img src="/admin/assets/images/a0.jpg" alt="..." class="w-40 img-circle">
                </span>
                <span class="clear hidden-folded p-x">
                  <span class="block _500">Jean Reyes</span>
                  <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
                </span>
            </a>
        </div>
      </div> --}}
    </div>
  </div>


                    @yield('mainContent')
                </div>
<!-- jQuery -->
  <script src="/admin/assets/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="/admin/assets/libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="/admin/assets/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="/admin/assets/libs/jquery/underscore/underscore-min.js"></script>
  <script src="/admin/assets/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="/admin/assets/libs/jquery/PACE/pace.min.js"></script>

  <script src="/admin/assets/scripts/config.lazyload.js"></script>

  <script src="/admin/assets/scripts/palette.js"></script>
  <script src="/admin/assets/scripts/ui-load.js"></script>
  <script src="/admin/assets/scripts/ui-jp.js"></script>
  <script src="/admin/assets/scripts/ui-include.js"></script>
  <script src="/admin/assets/scripts/ui-device.js"></script>
  <script src="/admin/assets/scripts/ui-form.js"></script>
  <script src="/admin/assets/scripts/ui-nav.js"></script>
  <script src="/admin/assets/scripts/ui-screenfull.js"></script>
  <script src="/admin/assets/scripts/ui-scroll-to.js"></script>
  <script src="/admin/assets/scripts/ui-toggle-class.js"></script>

  <script src="/admin/assets/scripts/app.js"></script>

  <!-- ajax -->
  <script src="/admin/assets/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="/admin/assets/scripts/ajax.js"></script>
<!-- endbuild -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>

<script type="text/javascript">
      $(document).ready(function() {
  {{-- Blog Editor --}}
        $('.summernote').summernote();
      });
    </script>
    {{-- Keywords --}}
    <script src="/admin/tags/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
$('#search').on('keyup',function(){
  alert('asd');
  $(this).attr(data-role="tagsinput")
// $value=$(this).val();
// $.ajax({
// type : 'get',
// url : '{{URL::to('search')}}',
// data:{'search':$value},
// success:function(data){
// $('tbody').html(data);
// }
// });
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
</body>
</html>

{!! Menu::scripts() !!}

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no" />
      <meta name="description" content="html template">
      <meta name="author" content="uxdt">
      <link rel="apple-touch-icon" href="<?php echo base_url('assets/website/assets/images/favicon/apple-touch-icon.png');?>">
      <link rel="icon" href="<?php echo base_url('assets/website/assets/images/favicon/favicon_new.png');?>">
      <title>IOCL | GSPL </title>
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url('assets/website/assets/css/base.css');?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('assets/website/assets/css/base-responsive.css');?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('assets/website/assets/css/grid.css');?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('assets/website/assets/css/font.css');?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('assets/website/assets/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('assets/website/assets/css/flexslider.css');?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('assets/website/assets/css/megamenu.css');?>" rel="stylesheet" media="all" />
      <link href="<?php echo base_url('assets/website/assets/css/print.css');?>" rel="stylesheet" media="print" />
      <!-- Theme styles for this template -->
      <link href="<?php echo base_url('assets/website/assets/css/megamenu.css');?>" rel="stylesheet" media="all" />
      <link href="<?php echo base_url('assets/website/theme/css/site.css');?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('assets/website/theme/css/site-responsive.css');?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('assets/website/theme/css/ma5gallery.css');?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('assets/website/theme/css/print.css');?>" rel="stylesheet" type="text/css" media="print">
      <link href="<?php echo base_url('assets/website/theme/css/demo.css');?>" rel="stylesheet" type="text/css" media="print">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <noscript>
         <link href="<?php echo base_url('assets/website/theme/css/no-js.css');?>" type="text/css" rel="stylesheet">
      </noscript>
   </head>
   <style type="text/css">
      .container {
  padding: 2rem 0rem;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 400px;
  }
  .modal-dialog .modal-content {
    padding: 1rem;
  }
}
.modal-header .close {
  margin-top: -1.5rem;
}

/*.form-title {
  margin: -2rem 0rem 2rem;
}*/

.btn-round {
  border-radius: 3rem;
    width: 326px;
}
.btn-info {
    color: #fff !important;
    background-color: #e67b2e !important;
    border-color: #ffffff !important;
    }

.delimiter {
  padding: 1rem;
}

.social-buttons .btn {
  margin: 0 0.5rem 1rem;
}

.signup-section {
  padding: 0.3rem 0rem;
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #0b1324 !important;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}
   </style>
   <script type="text/javascript">
      $(document).ready(function() {             
$('#loginModal').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
   </script>
   <body>
      <div id="fb-root"></div>
      <header>
         <div class="region region-header-top">
            <div id="block-cmf-content-header-region-block" class="block block-cmf-content first last odd">
               <noscript class="no_scr">
               </noscript>
               <div class="wrapper common-wrapper">
                  <div class="container common-container four_content top-header">
                     <div class="common-left clearfix">
                        <ul>
                           <li class="gov-india"><span class="responsive_go_hindi" lang="hi"><a target="_blank" href="#" title="">IOCL</a></span>                           </li>
                           <li class="ministry"><span class="li_eng responsive_go_eng"><a target="_blank" href="#" title="" > Ministry of Petroleum and Natural Gas</a></span></li>
                        </ul>
                     </div>
                     <div class="common-right clearfix">
                        <ul id="header-nav">
                           <li class="ico-skip cf"><a href="#skipCont" title="" style="color:red;font-weight:bold;text-decoration:none">
Toll Free No. 18003453759 (Please Contact if Case of Emargency,Pipeline Leakage,Burst,Pilferage & Fire etc)</a>
                           </li>
                           <!-- <li class="ico-site-search cf">
                              <a href="javascript:void(0);" id="toggleSearch" title="Site Search">
                              <img class="top" src="<?php echo base_url('assets/website/assets/images/ico-site-search.png');?>" alt="Site Search" /></a>
                              <div class="search-drop both-search">
                                 <div class="google-find">
                                    <form method="get" action="http://www.google.com/search" target="_blank">
                                       <label for="search_key_g" class="notdisplay">Search</label>
                                       <input type="text" name="q" value="" id="search_key_g"/> 
                                       <input type="submit" value="Search" class="submit" /> 
                                       <div class="">
                                          <input type="radio" name="sitesearch" value="" id="the_web"/> 
                                          <label for="the_web">The Web</label> 
                                          <input type="radio" name="sitesearch" value="india.gov.in" checked id="the_domain"/> <label for="the_domain"> INDIA.GOV.IN</label>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="find">
                                    <form name="searchForm">
                                       <label for="search_key" class="notdisplay">Search</label>
                                       <input type="text" name="search_key" id="search_key" onKeyUp="autoComplete()" autocomplete="off" required />
                                       <input type="submit" value="Search" class="bttn-search"/>
                                    </form>
                                    <div id="auto_suggesion"></div>
                                 </div>
                              </div>
                           </li>
                           <li class="ico-accessibility cf">
                              <a href="javascript:void(0);" id="toggleAccessibility" title="Accessibility Dropdown">
                              <img class="top" src="<?php echo base_url('assets/website/assets/images/ico-accessibility.png');?>" alt="Accessibility Dropdown" />
                              </a>
                              <ul style="visibility: hidden;">
                                 <li> <a onClick="set_font_size(&#39;increase&#39;)" title="Increase font size" href="javascript:void(0);">A<sup>+</sup>
                                    </a> 
                                 </li>
                                 <li> <a onClick="set_font_size()" title="Reset font size" href="javascript:void(0);">A<sup>&nbsp;</sup></a> </li>
                                 <li> <a onClick="set_font_size(&#39;decrease&#39;)" title="Decrease font size" href="javascript:void(0);">A<sup>-</sup></a> </li>
                                 <li> <a href="javascript:void(0);" class="high-contrast dark" title="High Contrast">A</a> </li>
                                 <li> <a href="javascript:void(0);" class="high-contrast light" title="Normal Contrast" style="display: none;">A</a> </li>
                              </ul>
                           </li>
                           <li class="ico-social cf">
                              <a href="javascript:void(0);" id="toggleSocial" title="Social Medias">
                              <img class="top" src="<?php echo base_url('assets/website/assets/images/ico-social.png');?>" alt="Social Medias" /></a>
                              <ul>
                                 <li><a target="_blank" title="External Link that opens in a new window" href="http://www.facebook.com/"><img alt="Facebook Page" src="assets/images/ico-facebook.png"></a></li>
                                 <li><a target="_blank" title="External Link that opens in a new window" href="http://www.twitter.com/"><img alt="Twitter Page" src="assets/images/ico-twitter.png"></a></li>
                                 <li><a target="_blank" title="External Link that opens in a new window" href="http://www.youtube.com/"><img alt="youtube Page" src="assets/images/ico-youtube.png"></a></li>
                              </ul>
                           </li>
                           <li class="ico-sitemap cf"><a href="" title="Sitemap">
                              <img class="top" src="<?php echo base_url('assets/website/assets/images/ico-sitemap.png');?>" alt="Sitemap" /></a>
                           </li>
                           <li class="hindi cmf_lan d-hide">
                              <label class="de-lag"><span style="display: none;">Language</span>
                                 <select title="Select Language">
                                    <option>English</option>
                                    <option>हिन्दी</option>
                                 </select>
                              </label>
                           </li> -->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>                     
            <p id="scroll" style="display: none;"><span></span></p>
         </div>
         <!--Top-Header Section end-->
         <section class="wrapper header-wrapper">
            <h1 style="display:none;">header</h1>
            <div class="container common-container four_content  header-container">
               <h2 class="logo">
                  <a href="home.html" title="Home" rel="home" class="header__logo" id="logo">
                     <img class="national_emblem" src="<?php echo base_url('assets/website/assets/images/emblem-dark.png');?>" alt="national emblem" style="width: 146px;">
                     <em><span style="font-weight: lighter !important;">Indian Oil Corporation Limited</span>                       
                        <span style="font-weight: 700 !important;">Guwahati Siliguri Pipeline</span>
                     </em>
                  </a>
               </h2>
               <div class="header-right clearfix">
                  <div class="right-content clearfix">
                     <div class="float-element">
                        <a class="sw-logo" target="_blank" href="#" title="Swachh Bharat, External link that open in a new windows"><img src="<?php echo base_url('assets/website/assets/images/assam-rhino-black.jpg');?>" alt="Assam Rhino" style="width: 175px;"></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--/.header-wrapper-->
         <section class="wrapper megamenu-wraper">
            <h3 style="display: none;">megamenu</h3>
            <div class="container common-container four_content">
               <p class="showhide"><em></em><em></em><em></em></p>
               <nav class="main-menu clearfix" id="main_menu">
                  <ul class="nav-menu">
                    <li class="nav-item"> <a href="<?php echo site_url('/');?>" class="home"><i class="fa fa-home"></i></a> </li>            
                    <li class="nav-item"> <a href="#">e-Docs</a></li>
            
                    <li class="nav-item"> <a href="#">e-Solutions</a>
                      <!-- <div class="sub-nav">
                        <ul class="sub-nav-group">
                          <li><a href="inner.html">Announcements</a></li>
                          <li><a href="inner.html">Recruitments</a></li>
                          <li><a href="inner.html">Circulars</a></li>
                          <li><a href="inner.html">Events</a></li>
                        </ul>
                      </div> -->
                    </li>
            
                    <li class="nav-item"><a href="#">ESS</a>
                      
                    </li>
                    
                    <li class="nav-item"><a href="#">FTS</a>
                      
                    </li>
                    
                    <li class="nav-item"><a href="#">PLHO</a>
                      
                    </li>
            
                    <li class="nav-item"><a href="<?php echo site_url('gallery');?>">Gallery</a></li>
            
                    <li class="nav-item"><a href="#">About Us</a></li>
            
                    <li class="nav-item"><a href="#">Contact Us</a>
                     
                    </li>
                    
            
                    <li class="nav-item"><a href="#">TPM</a></li>
                  </ul>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" style="float: right;
                  margin: 4px;
                  padding: 5px 12px;
                  color: white;
                  background-color: #e5670b;
                  border: 3px solid #e5670b;
                  border-radius: 5px;">SCADA Login</button>
               </nav>
               <nav class="main-menu clearfix" id="overflow_menu">
                  <ul class="nav-menu clearfix">
                  </ul>
               </nav>
            </div>
         </section>
      </header>
      

      <!-- Modal -->
     <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
          <!--   <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div> -->
            <div class="modal-body">
              <div class="form-title text-center">
                <h4 style="color:#e77c2f">Scada Admin Login</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group" style="margin-bottom: 23px;">
                    <input type="email" class="form-control" id="email1"placeholder="Your email address...">
                  </div>
                  <div class="form-group" style="margin-bottom: 23px;">
                    <input type="password" class="form-control" id="password1" placeholder="Your password...">
                  </div>
                  <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                </form>
                
                <div class="text-center text-muted delimiter">or use a social network</div>
                <div class="d-flex justify-content-center social-buttons">
                  <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                    <i class="fab fa-linkedin"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
           
        </div>
      </div>
       <?php                    
            if(isset($_view) && $_view)
            $this->load->view($_view);
        ?>


      <footer class="wrapper footer-wrapper">
         <div class="footer-top-wrapper">
            <div class="container common-container four_content footer-top-container">
               <ul>
                  <li><a href="#">Feedback</a></li>
                  <li><a href="#">Terms and Conditions </a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Help</a></li>

               </ul>
            </div>
         </div>
         <div class="footer-bottom-wrapper">
            <div class="container common-container four_content footer-bottom-container">
               <div class="footer-content clearfix">
                  <div class="copyright-content"> Website Content Managed by 
                     <strong>IOCL-Guwahati Siliguri Pipeline</strong><span>Designed, Developed and Hosted by 
                     <a target="_blank" title="" href="#">
                     <strong>NICONTECH IT SOLUTIONS LLP</strong></a><strong> ( NIS )</strong></span> 
                  </div>
                  <div class="last-updated">
                     <strong>Last Updated: DD-MM-YYYY</strong>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--/.footer-wrapper-->
      <script src="<?php echo base_url('assets/website/assets/js/jquery-2.1.1.min.js');?>"></script>
      <script src="<?php echo base_url('assets/website/assets/js/jquery-accessibleMegaMenu.js');?>"></script>
      <script src="<?php echo base_url('assets/website/assets/js/framework.js');?>"></script>
      <script src="<?php echo base_url('assets/website/assets/js/jquery.flexslider.js');?>"></script>
      <script src="<?php echo base_url('assets/website/assets/js/font-size.js');?>"></script>
      <script src="<?php echo base_url('assets/website/assets/js/swithcer.js');?>"></script>
      <script src="<?php echo base_url('assets/website/theme/js/ma5gallery.js');?>"></script>
      <script src="<?php echo base_url('assets/website/assets/js/megamenu.js');?>"></script>
      <script src="<?php echo base_url('assets/website/theme/js/easyResponsiveTabs.js');?>"></script>
      <script src="<?php echo base_url('assets/website/theme/js/custom.js');?>"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
      <?php                    
            if(isset($_script) && $_script)
            $this->load->view($_script);
       ?>

       <script>
           let hr = document.getElementById('hr');
           let bgDiv = document.getElementById('background-id');
           hr.addEventListener('mouseover', () => {
                bgDiv.style.backgroundImage = `url('<?php echo base_url('assets/website/assets/images/hr.jpg');?>')`;
           });

           let finance=document.getElementById('finance');

           finance.addEventListener('mouseover', () => {
                bgDiv.style.backgroundImage = `url('<?php echo base_url('assets/website/assets/images/finance.jpg');?>')`;
           });

           let operation=document.getElementById('operation');

           operation.addEventListener('mouseover', () => {
                bgDiv.style.backgroundImage = `url('<?php echo base_url('assets/website/assets/images/material.jpg');?>')`;
           });

           let material=document.getElementById('material');

           material.addEventListener('mouseover', () => {
                bgDiv.style.backgroundImage = `url('<?php echo base_url('assets/website/assets/images/material.jpg');?>')`;
           });
       </script>
   </body>


</html>


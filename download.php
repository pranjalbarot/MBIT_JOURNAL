<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap cdn -->
     <link rel="stylesheet" href="style/bootstrap.css" />
    <!-- Linking to Css -->
    <link rel="stylesheet" href="style/download_page.css">
    <link rel="stylesheet" href="style/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap"
      rel="stylesheet"
    />


    <!-- fontawesome icons -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Download page</title>
</head>
<body>

<?php
if (isset($_GET['file'])) {
$file = $_GET['file'];
if (file_exists($file) && is_readable($file) && preg_match('/\.pdf$/',$file)) {
 header('Content-Type: application/pdf');
 header("Content-Disposition: attachment; filename=\"$file\"");
 readfile($file);
 }
}
?>

    <!-- navigation -->
    <div class="row sticky" id="navvbar">
        <nav class="navbar navbar-expand-lg navbar-dark sticky" id="navbarb">
          
               <a class="offset-xxl-2 col-xxl-1 offset-xl-2 col-xl-1 offset-lg-1 col-lg-1 navbar-brand" href="#">
                 <img src="images/logo.png" alt="" width="150" />
               </a>
             <button id="navtogglebutton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
           <div class="col-xxl-6 offset-xxl-3 offset-xl-2 col-xl-7 offset-lg-2 col-lg-7 collapse navbar-collapse " id="navbarTogglerDemo01">
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              
                 <!-- home -->
                   <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="#"
                     ><i class="fa fa-home" aria-hidden="true"></i>Home</a
                   >
                 </li>
 
                 <!-- about us -->
                 <li class="nav-item dropdown">
                   <a
                     class="nav-link dropdown-toggle"
                     href="#"
                     aria-haspopup="true"
                     id="navbarDropdownMenuLink"
                     role="button"
                     data-toggle="dropdown"
                     aria-expanded="false"
                   >
                     About Us
                   </a>
                   <ul
                     class="dropdown-menu dropdownbg"
                     
                     aria-labelledby="navbarDropdownMenuLink"
                   >
                     <li><a class="dropdown-item  dropdowntextbg" href="#">Aim & Scope</a></li>
                     <li><a class="dropdown-item  dropdowntextbg" href="#">Editorial Board</a></li>
                     <li><a class="dropdown-item  dropdowntextbg" href="#">Institute</a></li>
                   </ul>
                 </li>
 
                 <!-- paper submission -->
                 <li class="nav-item dropdown">
                   <a
                     class="nav-link dropdown-toggle"
                     href="#"
                     aria-haspopup="true"
                     id="navbarDropdownMenuLink"
                     role="button"
                     data-toggle="dropdown"
                     aria-expanded="false"
                   >
                     Paper Submission
                   </a>
                   <ul
                     class="dropdown-menu dropdownbg"
                     
                     aria-labelledby="navbarDropdownMenuLink"
                   >
                     <li><a class="dropdown-item  dropdowntextbg" href="#">Guidelines to Author</a></li>
                     <li><a class="dropdown-item  dropdowntextbg" href="#downloads">Downloads</a></li>
                     <li><a class="dropdown-item  dropdowntextbg" href="#">Online Submission</a></li>
                   </ul>
                 </li>
 
                 <!-- Archive -->
                 <li class="nav-item dropdown">
                   <a
                     class="nav-link dropdown-toggle"
                     href="#"
                     aria-haspopup="true"
                     id="navbarDropdownMenuLink"
                     role="button"
                     data-toggle="dropdown"
                     aria-expanded="false"
                   >
                     Archive
                   </a>
                   <ul
                     class="dropdown-menu dropdownbg"
                     
                     aria-labelledby="navbarDropdownMenuLink"
                   >
                     <li><a class="dropdown-item  dropdowntextbg" href="#">Past Issues</a></li>
                     <li><a class="dropdown-item  dropdowntextbg" href="#">Conference Proceedings</a></li>
                     <li><a class="dropdown-item  dropdowntextbg" href="#">Search papers</a></li>
                   </ul>
                 </li>
 
                 <!-- Impact Factor -->
                <li class="nav-item">
                 <a class="nav-link" href="#">Impact Factor</a>
               </li>
               
             </ul>
             
           </div>
         </nav>
       </div>
      

    <!-- this is downloads -->
    <div class="download_container" id="downloads1">
        <div class="download_items">
                <img src="images/brochure.jpg">
                <div class="dwnld_content">
                    <p>Brochure template</p>
                    <a href="download.php?file=brochure.pdf" target="_new">
                            <i class="bi bi-download"></i> Download
                    </a>
                </div>
        </div>
        <div class="download_items">
            <img src="images/paper.png">
            <div class="dwnld_content">
                <p>paper download</p>
                <a href="download.php?file=paperformat.pdf" target="_new">
                            <i class="bi bi-download"></i> Download
                </a>
            </div>
        </div>
        <div class="download_items">
            <img src="images/copyrightred.png">
            <div class="dwnld_content">
                <p> copyright form</p>
                <a href="download.php?file=copyrightform.pdf" target="_new">
                            <i class="bi bi-download"></i> Download
                </a>
            </div>
        </div>
        <div class="download_items">
            <img src="images/subscription1.jpg">
            <div class="dwnld_content">
                <p>subscription form</p>
                <a href="download.php?file=subscriptionform.pdf" target="_new">
                            <i class="bi bi-download"></i> Download
                 </a>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="row bgfooter mt-5">
        <div class="container w-75">
                <div class="row">
                    <div class="col-lg-5 col-md-6 mt-5">
                        <h4 class="whitetxt">About Us</h4>
                        <div class="mt-4">
                            <p class="text-justify colorf">
                                Madhuben and Bhanubhai Patel Institute of Technology (MBIT-JOURNAL) is open access international journal publishing articles related all domains of engineering.
                            </p>
                          </div>
                    </div>
                    <div class="col-lg-5 col-md-6 mt-5">
                        <h4 class="whitetxt">Contact Us</h4>
                        <div class="mt-4">
                        </div>
                        <div>
                            <p class="colorf">
                                <i class="fa fa-map-marker"></i>&nbsp;<b>Address</b> :  At New Vidhyanagar , Near ADIT, Anand- 363650, Gujarat<br>
                                 <!--<b>Editor-in-Chief</b> : Princy Anghan<br> -->
                            
                                <!-- <a href="mailto:190633107012@mbict.ac.in"><i class="fa fa-envelope"></i>&nbsp;190633107012@mbict.ac.in</a> (For General queries or Suggestions)<br> -->
                                <a href="mailto:190633107012@mbict.ac.in"><i class="fa fa-envelope"></i>&nbsp;190633107012@mbict.ac.in</a> (For Paper Submission)<br>
                                <b>Phone</b> : +91-9737279951 +91-9737279951
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-5">
                        <h4 class="whitetxt">Quick links</h4>
                        <ul class="listnone mt-4">
                            <li class="quicklinkmargin">
                                <a href="#"><i class="cblack fa fa-ellipsis-h"></i>&nbsp;Editorial Board</a>
                            </li>
                            <li class="quicklinkmargin">
                                <a href="#"><i class="cblack fa fa-ellipsis-h"></i>&nbsp;Author Guidelines</a>
                            </li>
                            <li class="quicklinkmargin">
                                <a href="#"><i class="cblack fa fa-ellipsis-h"></i>&nbsp;Search Papers</a></li>
                            <li class="quicklinkmargin">
                                <a href="#"><i class="cblack fa fa-ellipsis-h"></i>&nbsp;Past Issues</a></li>
                            <li class="quicklinkmargin">
                                <a href="#"><i class="cblack fa fa-ellipsis-h"></i>&nbsp;Submit Paper</a>
                            </li>
                            <li class="quicklinkmargin">
                                <a href="#"><i class=" cblack fa fa-ellipsis-h"></i>&nbsp;Impact Factor</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bgcolorcontainer">
        <div class="footertext">
            <div class="container">
                <p>2021 <a href="#">MBIT</a>
            </div>
        </div>
      </div>

</body>
</html>
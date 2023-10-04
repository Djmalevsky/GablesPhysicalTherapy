<header id="header" data-fullwidth="true" class="dark">
    <style>@media (min-width: 960px) {.hidden-mobile {display: none;}}</style>
    <style>@media (max-width: 960px) {.hidden-desktop {display: none;}}</style>
<style>



@media (max-width: 960px) {
.header-inner2 {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center; /* Add this to center items vertically */
  padding: 0 20px; 
}
#mobile-call, #mainMenu-trigger {
  align-self: center; /* Align vertically centered */
}


  #mobile-call {
    grid-column: 3;
    justify-self: end; /* Align to the left */
  }

  #logo {
    grid-column: 2;
    justify-self: center; /* Align to the center */
        float: none; /* Remove the float property */

  }
  #logo img {
    display: block; /* Make the logo image a block-level element */
    margin: auto; /* Center the logo vertically and horizontally */
  }
  #mainMenu-trigger {
    grid-column: 1;
    justify-self: start; /* Align to the right */
  }


  .dropdown {
    position: relative; /* Set the parent to have a relative position */
  }

  .dropdown-menu {
    position: absolute; /* Set the dropdown menu to have an absolute position */
    top: calc(100% + 10px); /* Position it below the dropdown button with a 10px gap */
    left: 0; /* Align it to the left of the dropdown button */
    z-index: 1; /* Make sure it appears on top of other elements */

  }
}
  #logo img {
    display: block; /* Make the logo image a block-level element */
    margin: auto; /* Center the logo vertically and horizontally */
  }
#mobile-call {
  display: none; /* Hide by default */
}

#mobile-call a {
  color: green; /* Change the color of the call icon to gold */
  font-size: 30px; /* Adjust the size of the call icon */
}

@media (max-width: 960px) {
  #mobile-call {
    display: block; /* Show on small screens */
  }
  @media (max-width: 991.98px) {
  .mainMenu-open #header #mainMenu {
    width: 100%;  /* Adjusted */
    display: block;
    opacity: 1;
  }
}

}
.btn-orange {
    background: linear-gradient(to right, #7ABC47,#8AF03A ,#50B123) !important; 
    border: 2px solid gold !important; /* Blue border */
    color: #000; /* Change text color if needed */
    transition: background 0.3s ease-in-out, border-color 0.3s ease-in-out; /* Smooth transition */
}

.btn-orange:hover {
    background: linear-gradient(to right, #6AA740, #79EF36, #489F20) !important;
    border-color: darkgoldenrod !important;
}
#topbar.topbar-fullwidth > .container {
    max-width: 100%;
    padding: 0 0px !important;
}
#topbar {
    text-align: center !important;
    justify-content: center !important;
}
.row {
    margin-right: 0 !important;
    margin-left: 0 !important;
}
.top-menu {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center; /* New line */
}

.menu-item {
    margin: 0 15px;
}

.menu-item.bordered {
    border-left: 1px solid #fff; 
    padding-left: 15px;
    margin: 0 15px;
}
.container{
    margin-right: center !important;
    margin-left: center !important;
}
#topbar .top-menu {
    list-style: outside none none;
    margin: 0;
    padding: 0;
    float: center !important;
}
.menu-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
    padding-top: 30px;

}


#mainMenu-trigger {
  z-index: 1000; /* Or any high value */
}

</style>
<div class="header-inner">
<div class="header-inner2">

<div id="mainMenu-trigger">
    <a class="lines-button x" href="#" onclick="return false;">
        <div class="menu-container"> <!-- New container div -->
            <span class="lines"></span>
            <p style="color:white">Menu</p>
        </div>
    </a>
</div>
    <div id="logo" class="hidden-mobile logo">
        <a href="/Services/">
            <span class="logo">
                <img src="/images/GablesPhotos/LOGO_Gables.webp" alt="Logo" style="float:left; width:200px; height: 58.95px;margin-top:15px">
            </span>
        </a>
    </div>
    <div id="mobile-call" class="hidden-desktop" style="position: relative; z-index: 9999;">
        <a href="tel:7863098877"><i class="fas fa-phone-alt"></i></a>
    </div>


    </div>
            <div id="mainMenu" class="menu-center">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="#">What We Treat</a></li>
                            <li class="dropdown">
                                <a href="#">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Main Services</a></li>
                                    <li><a href="#">Cash-Based Physical Therapy</a></li>
                                </ul>
                            </li>
                            <li><a href="/MeetTheDoctor">Meet The Doctor</a></li>
                            <a href="/" class="hidden-desktop">
                                <img src="/images/GablesPhotos/LOGO_Gables.webp" alt="Logo" style="float:left; width:250px; height: 73.68px; margin-top:5px">
                            </a>
                            <li class="dropdown">
                                <a href="#">Contact</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Book Call</a></li>
                                </ul>
                            </li>
                            <li><a href="/faq">FAQ</a></li>
                            <li><a href="/Blog/">Blog</a></li>
                            <li><a href="tel:7863098877" class="btn btn-orange"><i class="fas fa-phone-alt"></i>(786) 309-8877</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

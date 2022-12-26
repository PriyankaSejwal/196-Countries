<?php 
$rootDir = dirname(dirname(__FILE__));
include_once($rootDir.'/ionetwork/io-panel/include/config.php');
include_once($rootDir.'/io-panel/include/config.php');
if(isset($_POST['email'])){

//let's start the session
session_start();

//finally, let's store our posted values in the session variables
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['mobile'] = $_POST['mobile'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['purpose'] = $_POST['purpose'];
//$_SESSION['country'] = $_POST['country'];



}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Link Planning Tool</title>
    <!-- Image of the logo of IO HFCL -->
    <!-- <link rel="icon" href="<?php echo BASE_URL; ?>/css/reportspage/images/io_logo.svg" type="image/x-icon" /> -->
    <link rel="icon" href="https://io.hfcl.com/css/reportspage/images/io_logo.svg" type="image/x-icon" />
    <!-- Bootstrap links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Google Charts -->
    <script
      type="text/javascript"
      src="https://www.gstatic.com/charts/loader.js"
    ></script>
    <!-- Icons Link -->
    <script
      src="https://kit.fontawesome.com/cc800be774.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Internal CSS -->
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/reportspage/navbar.css" /> -->
    <link rel="stylesheet" href="https://io.hfcl.com/css/reportspage/navbar.css" />

    <link rel="stylesheet" href="https://io.hfcl.com/css/reportspage/responsive.css" />
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/reportspage/responsive.css" /> -->

    <link rel="stylesheet" href="https://io.hfcl.com/css/reportspage/mainpage.css" />
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/reportspage/mainpage.css" /> -->

    <link rel="stylesheet" href="https://io.hfcl.com/css/reportspage/style.css" />
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/reportspage/style.css" /> -->

  </head>
  <body>
    <!-- NavBar Begins -->
    <div class="wrapper">
      <div class="header">
        <!-- Top Header for Search Result -->
        <div class="top-head">
          <div class="container">
            <div class="topheadflex">
              <a href="https://io.hfcl.com/contact-us" class="active"
                >Contact Us</a
              >
              <a href="#" class="searchLink" id="search-Click">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="search-bar" id="search">
            <form
              action="https://io.hfcl.com/search"
              method="get"
              class="search"
            >
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <div class="close-search" id="closeSearch">
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </form>
          </div>
        </div>
        <!-- Bottom Header -->
        <div class="bottom-head">
          <div class="container">
            <div class="bottomheadflex">
              <!-- HFCL LOGO -->
              <div class="logo">
                <a href="">
                  <img src="https://io.hfcl.com/css/reportspage/images/io_logo.svg" alt="io-logo" width="50px" />
                </a>
              </div>
              <!-- Main Menu contains hamburger menu and demo btn-->
              <div class="mainmenu">
                <!-- contains hamburger menu -->
                <div class="menuoutbox">
                  <div class="moblogobox">
                    <a href="https://io.hfcl.com">
                      <img src="https://io.hfcl.com/css/reportspage/images/io_logo.svg" alt="io-logo" />
                    </a>
                  </div>
                  <ul class="mobileulfix">
                    <li class="menuhover">
                      <a href="#">Link Planning Tool</a>
                    </li>
                  </ul>
                </div>
                <!-- Demo Button -->
                <a href="https://io.hfcl.com/contact-us" class="getdemobtn"
                  >Get a Demo</a
                >
                <!-- Toggle Menu Hamburger Sign -->
                <div class="togglemenus">
                  <span></span><span></span><span></span>
                </div>
              </div>
              <!-- MainMenu Ends -->
            </div>
            <!-- Bottom head flex ends -->
          </div>
          <!-- container ends -->
        </div>
        <!-- bottomhead ends -->
        <div class="mobile-patch"></div>
      </div>
      <!-- Header ends -->
    </div>
    <!-- Nav Bar Ends -->

    <!-- Main Body Starts -->
    <!-- Container which contains sidebar section and map -->
    <!-- Page to select ptp/ ptmp -->
    <div class="container-fluid print-hide">
      <div class="row">
        <div class="col-lg-4" id="selectionPage">
          <div class="sidebar-body">
            <form action="">
              <!-- First Section -->
              <!-- Section contains the options for PTP and P2MP -->
              <div class="sidebar-section">
                <div class="sidebar-section-body">
                  <div class="row btnleft">
                    <div class="col-2 text-right pull-right">
                      <button type="button" class="linkbtn" id="p2pp2mp">
                        <span
                          class="glyphicon glyphicon-plus"
                          aria-hidden="true"
                        ></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#" class="ptp">Add a new PTP</a></li>
                        <li><a href="#" class="ptmp" style="color: #c7c7c7;">Add a new P2MP</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Sidebar container for PTP -->
        <div class="col-lg-4 overlay-section" id="ptpPage">
          <!-- Close Button to go back to choice of ptp ptmp -->
            <div class="sidebar-section">
              <div class="sidebar-section-body">
                <div class="d-flex justify-content-between">
                  <div class="col-3" >
                    <button type="button" class="linkbtn btn" id="cancelp2p">Cancel</button>
                    </button>
                  </div>
                  <!-- Choose the country -->
                  
                  <div class="col-3 text-right">
                    <select name="" id="ctryCode" onchange="ctryChange()">
                      <option value="" selected disabled>Country</option>
                      <option value="as">American Samoa</option>
                      <option value="aw">Aruba</option>
                      <option value="at">Austria</option>
                      <option value="au">Australia</option>
                      <option value="az">Azerbaijan</option>
                      <option value="bh">Bahrain</option>
                      <option value="bs">Bahamas</option>
                      <option value="bd">Bangladesh</option>
                      <option value="bb">Barbados</option>
                      <option value="by">Belarus</option>
                      <option value="be">Belgium</option>
                      <option value="bm">Bermuda</option>
                      <option value="ba">Bosnia</option>
                      <option value="br">Brazil</option>
                      <option value="bg">Bulgaria</option>
                      <option value="ca">Canada</option>
                      <option value="cl">Chile</option>
                      <option value="cn">China</option>
                      <option value="co">Colombia</option>
                      <option value="cr">Costa Rica</option>
                      <option value="hr">Croatia</option>
                      <option value="cu">Cuba</option>
                      <option value="cy">Cyprus</option>
                      <option value="cz">Czec Republic</option>
                      <option value="dk">Denmark</option>
                      <option value="dm">Dominica</option>
                      <option value="do">Dominican Republic</option>
                      <option value="ec">Ecuador</option>
                      <option value="eg">Egypt</option>
                      <option value="ee">Estonia</option>
                      <option value="fi">Finland</option>
                      <option value="fr">France</option>
                      <option value="gf">French Guiana</option>
                      <option value="de">Germany</option>
                      <option value="gr">Greece</option>
                      <option value="ht">Haiti</option>
                      <option value="hn">Honduras</option>
                      <option value="hk">Honkong</option>
                      <option value="hu">Hungary</option>
                      <option value="is">Iceland</option>
                      <option value="in">India</option>
                      <option value="ir">Iran</option>
                      <option value="ie">Ireland</option>
                      <option value="il">Israel</option>
                      <option value="it">Italy</option>
                      <option value="jm">Jamaica</option>
                      <option value="jp">Japan</option>
                      <option value="jo">Jordan</option>
                      <option value="ke">Kenya</option>
                      <option value="lv">Latvia</option>
                      <option value="lb">Lebanon</option>
                      <option value="ls">Lesotho</option>
                      <option value="lt">Lithuania</option>
                      <option value="li">Liechtenstein</option>
                      <option value="lu">Luxembourg</option>
                      <option value="mo">Macao</option>
                      <option value="mk">Macedonia</option>
                      <option value="mw">Malawi</option>
                      <option value="my">Malaysia</option>
                      <option value="mv">Maldives</option>
                      <option value="mt">Malta</option>
                      <option value="mr">Mauritania</option>
                      <option value="mu">Mauritius</option>
                      <option value="mq">Martinique</option>
                      <option value="mx">Mexico</option>
                      <option value="mc">Monaco</option>
                      <option value="ma">Morocco</option>
                      <option value="nl">Netherlands</option>
                      <option value="nz">New Zealand</option>
                      <option value="ni">Nicaragua</option>
                      <option value="ng">Nigeria</option>
                      <option value="no">Norway</option>
                      <option value="om">Oman</option>
                      <option value="pa">Panama</option>
                      <option value="pk">Pakistan</option>
                      <option value="pe">Peru</option>
                      <option value="ph">Philippines</option>
                      <option value="pl">Poland</option>
                      <option value="pt">Portugal</option>
                      <option value="pr">Puerto Rico</option>
                      <option value="ro">Romania</option>
                      <option value="kr">South Korea</option>
                      <option value="sg">Singapore</option>
                      <option value="si">Slovenia</option>
                      <option value="sk">Slovak Republic</option>
                      <option value="za">South Africa</option>
                      <option value="es">Spain</option>
                      <option value="lk">Sri Lanka</option>
                      <option value="se">Sweden</option>
                      <option value="ch">Switzerland</option>
                      <option value="sy">Syria</option>
                      <option value="tw">Taiwan</option>
                      <option value="tz">Tanzania</option>
                      <option value="tr">Turkey</option>
                      <option value="gb">UK</option>
                      <option value="uy">Uruguay</option>
                      <option value="us">US</option>
                      <option value="ve">Venezuela</option>
                      <option value="vn">Vietnam</option>
                      <option value="zm">Zambia</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

          <!-- Sidebar body of ptp starts -->
          <div class="sidebar-body sidebarBody2 bg-color">
            <form action="" id="resetForm" class="sidebar-form">
              <!-- Sidebar Section 0 for Name of the link-->
              <div class="sidebar-section">
                <div class="sidebar-section-body">
                  <!-- Name to be given to the link  -->
                  <div class="row">
                    <div class="col-12 sidebar-padding">
                      <label for="" class="label">Link Name</label>
                      <input
                        type="text"
                        class="input"
                        id="linkName"
                        name="linkname"
                        placeholder="Name of the Link"
                        required
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Sidebar Section 1 -->
              <!--Start of Sidebar section 1 contains address and tower and height inputs -->
              <div class="sidebar-section">
                <div class="sidebar-section-body">
                  <!-- Inputs for the addresses  -->
                  <!-- <div class="input-grid"> -->
                  <!-- For address division -->
                  <div class="row">
                    <!-- First input for address 1 -->
                    <div class="col-6 sidebar-padding">
                      <label for="channelBandwidth" class="label">Site A</label>
                      <!-- <div class="input-grid-col-5"> -->
                      <input
                        type="text"
                        class="input"
                        id="add0"
                        placeholder="address for A"
                        required
                      />
                      <!-- </div> -->
                      <input
                        type="hidden"
                        id="semail"
                        name="semail"
                        value="<?php echo $_SESSION['email']; ?>"
                      />
                      <input
                        type="hidden"
                        id="fname"
                        name="fname"
                        value="<?php echo $_SESSION['fname']; ?>"
                      />
                      <input
                        type="hidden"
                        id="lname"
                        name="lname"
                        value="<?php echo $_SESSION['lname']; ?>"
                      />
                      <input
                        type="hidden"
                        id="smobile"
                        name="smobile"
                        value="<?php echo $_SESSION['mobile']; ?>"
                      />
                      <input
                        type="hidden"
                        id="spurpose"
                        name="spurpose"
                        value="<?php echo $_SESSION['purpose']; ?>"
                      />

                    </div>
                    <!-- Second input for address 2 -->
                    <div class="col-6 sidebar-padding">
                      <label for="channelBandwidth" class="label">Site B</label>
                      <!-- <div class="input-grid-col-5"> -->
                      <input
                        type="text"
                        class="input"
                        id="add1"
                        placeholder="address for B"
                        required
                      />
                      <!-- </div> -->
                    </div>
                  </div>
                  <!-- </div> -->

                  <!-- End for the input of adrresses -->

                  <!-- Inputs for the tower locations and the heights -->
                  <!-- <div class="input-grid"> -->
                  <!-- For towers col 1 -->
                  <div class="row">
                    <!-- LAtlong of Site A -->
                    <div class="col-6 sidebar-padding">
                      <!-- <label for="channelBandwidth" class="label">Tower</label> -->
                      <!-- <div class="input-grid-col-5"> -->
                      <input
                        type="text"
                        class="input towerinput"
                        id="searchtowerA"
                        placeholder="lat,long"
                        required
                      />
                      <!-- </div> -->
                    </div>
                    <!-- Latlong of Site B -->
                    <div class="col-6 sidebar-padding">
                      <!-- <label for="channelBandwidth" class="label">Tower</label> -->
                      <!-- <div class="input-grid-col-5"> -->
                      <input
                        type="text"
                        class="input towerinput"
                        id="searchtowerB"
                        placeholder="lat,long"
                        required
                      />
                      <!-- </div> -->
                    </div>
                  </div>
                  <!-- </div> -->
                  <!-- End of the inputs for the tower location and the heights -->
                </div>
              </div>
              <!-- End of sidebar section 1 containing address tower and height inputs -->

              <!-- Start of Sidebar Section 2 -->
              <!-- Contains all the options to choose from say - bandwidth, frequency, radio, cable loss, transmit power-->
              <div class="sidebar-section">
                <div class="sidebar-section-body">
                  <!-- <div class="input-grid"> -->
                    <!-- Row for bandwidth and frequency -->
                  <div class="row">
                    <div class="col-6 sidebar-padding">
                      <label for="">Channel Bandwidth</label>
                      <!-- <div> -->
                      <select
                        name=""
                        id="channelBandwidth"
                        class="select"
                        onchange="populatefreq()"
                      >
                        <option value="" hidden>Bandwidth</option>
                        <option value="10" id="10mhz">10 MHz</option>
                        <option value="20" selected>20 MHz</option>
                        <option value="40">40 MHz</option>
                        <option value="80">80 MHz</option>
                        <option value="160" disabled>160 MHz</option>
                      </select>
                      <!-- </div> -->
                    </div>
                    <div class="col-6 sidebar-padding">
                      <label for="">Channel Frequency</label>
                      <!-- <div> -->
                      <select
                        id="channelFrequency"
                        class="select"
                        onchange="calcFresnel(); calceirp()"
                      ></select>
                      <!-- </div> -->
                    </div>
                  </div>
                    <!-- Row for Max EIRP -->
                    <div class="row">
                      <!-- Max EIRP  -->
                      <div class="col-12 sidebar-padding">
                        <label for="" class="label">Max EIRP</label>
                        <input
                          type="text"
                          name=""
                          id="maxEIRP"
                          value=""
                          class="input"
                          required
                        />
                      </div>
                    </div>
                  <!-- row for Radio selection -->
                  <div class="row">
                    <!-- Radio A -->
                    <div class="col-6 sidebar-padding">
                      <label for="" class="label">Radio</label>
                      <!-- <div> -->
                      <select
                        name=""
                        id="radio1"
                        class="select"
                        onchange="selectedRadioA();"
                      >
                        <optgroup label="Integrated Sector Antenna" class="optGroup">
                          <option value="17">ion4l1_BTS</option>
                          <option value="17">ion4xl1_BTS</option>
                          <option value="19">ion4l2_BTS</option>
                          <option value="19">ion4xl2_BTS</option>
                        </optgroup>
                        <optgroup label="Integrated Dish Antenna"class="optGroup">
                          <option value="23">ion4l2</option>
                          <option value="23">ion4xl2</option>
                          <option value="25" id="defaultRadioA" selected>ion4l3</option>
                          <option value="25">ion4xl3</option>
                          <option value="25">ion4l3_CPE</option>
                          <option value="27">ion4l4</option>
                          <option value="27">ion4xl4</option>
                        </optgroup>
                        <optgroup label="Integrated Flat Panel Antenna" class="optGroup">
                          <option value="23">ion4l2_CPE</option>
                        </optgroup>
                        <optgroup label="External Antenna">
                          <option value="0" id="extA">ion4le</option>
                          <option value="0" >ion4xle</option>
                          <option value="0" >ion4le_CPE</option>
                        </optgroup>
                      </select>
                      <!-- </div> -->
                    </div>
                    <!-- Radio B -->
                    <div class="col-6 sidebar-padding top-margin">
                      <label for="" class="label"></label>
                      <!-- <div> -->
                      <select
                        name=""
                        id="radio2"
                        class="select"
                        onchange="selectedRadioB();"
                      >
                      <optgroup label="Integrated Sector Antenna" class="optGroup">
                        <option value="17">ion4l1_BTS</option>
                        <option value="17">ion4xl1_BTS</option>
                        <option value="19">ion4l2_BTS</option>
                        <option value="19">ion4xl2_BTS</option>
                      </optgroup>
                      <optgroup label="Integrated Dish Antenna"class="optGroup">
                        <option value="23">ion4l2</option>
                        <option value="23">ion4xl2</option>
                        <option value="25" id="defaultRadioB" selected>ion4l3</option>
                        <option value="25">ion4xl3</option>
                        <option value="25">ion4l3_CPE</option>
                        <option value="27">ion4l4</option>
                        <option value="27">ion4xl4</option>
                      </optgroup>
                      <optgroup label="Integrated Flat Panel Antenna" class="optGroup">
                        <option value="23">ion4l2_CPE</option>
                      </optgroup>
                      <optgroup label="External Antenna">
                        <option value="0" id="extB">ion4le</option>
                        <option value="0" >ion4xle</option>
                        <option value="0" >ion4le_CPE</option>
                      </optgroup>
                      </select>
                      <!-- </div> -->
                    </div>
                  </div>
                  <!-- Row for antenna gain -->
                  <!-- event listeners added in query select js -->
                  <div class="row" id="hiddenGain">
                    <!-- Antenna gain A -->
                    <div class="col-6 sidebar-padding">
                      <label for="" class="label">Antenna Gain</label>
                      <input
                        type="number"
                        name=""
                        id="antgain1"
                        class="input disable"
                        disabled
                        value="25"
                        max="35"
                        required
                      />
                      <strong class="gain1Alert" style="display: none;">Please enter value less than Max EIRP.</strong> 
                    </div>
                    <!-- Antenna Gain B -->
                    <div class="col-6 sidebar-padding top-margin">
                      <label for="" class="label"></label>
                      <input
                        type="number"
                        name=""
                        id="antgain2"
                        class="input disable"
                        value="25"
                        max="35"
                        disabled
                      />
                      <strong class="gain2Alert" style="display: none;">Please enter value less than Max EIRP.</strong> 
                    </div>
                  </div>
                  <!-- Row for cable and other losses -->
                  <div class="row">
                    <!-- Cable Loss A -->
                    <div class="col-6 sidebar-padding">
                      <label for="" class="label">Cable Loss</label>
                      <input
                        type="number"
                        name=""
                        id="cableLoss1"
                        value="2"
                        min="2"
                        max="6"
                        class="input disable"
                        disabled
                        required
                        onchange="calcTxPower()"
                      />
                    </div>
                    <!-- Cable loss B -->
                    <div class="col-6 sidebar-padding top-margin">
                      <label for="" class="label"></label>
                      <input
                        type="number"
                        name=""
                        id="cableLoss2"
                        value="2"
                        min="2"
                        max="6"
                        class="input disable"
                        required
                        disabled
                        onchange="calcTxPower()"
                      />
                    </div>
                  </div>
                   
                  
                  <!-- Row for calculated transmit power -->
                  <div class="row">
                    <!-- Calculated Transmit Power A -->
                    <div class="col-6 sidebar-padding">
                      <label for="" class="label">Transmit Power</label>
                      <input
                        type="number"
                        name=""
                        id="transmitPower1"
                        class="input"
                        max="27"
                        value=""
                        required
                        onchange="deviceinfo()"
                      />
                      <strong class="tx1Alert" style="display:none">Less than 3. Please adjust ant. gain/ cable loss.</strong>
                    </div>
                    <!-- Calculated Transmit power B -->
                    <div class="col-6 sidebar-padding top-margin">
                      <label for="" class="label"></label>
                      <input
                        type="number"
                        name=""
                        id="transmitPower2"
                        class="input"
                        max="27"
                        value=""
                        required
                        onchange="deviceinfo()"
                      />
                      <strong class="tx2Alert" style="display:none">Less than 3. Please adjust ant. gain/ cable loss.</strong>
                    </div>
                  </div>
                   <!-- For height -->
                   <div class="row">
                    <!-- Height of tower A -->
                    <div class="col-6 sidebar-padding">
                      <label for="channelBandwidth" class="label">Height</label>
                      <!-- <div class="input-grid-col-5"> -->
                      <input
                        type="text"
                        class="input"
                        id="aheight1"
                        value="15"
                        required
                        onchange="drawPolyline()"
                      />
                      <span class="metre">m</span>
                      <!-- </div> -->
                    </div>
                    <!-- Height for tower B -->
                    <div class="col-6 sidebar-padding top-margin">
                      <!-- <div class="input-grid-col-5"> -->
                      <label for="channelBandwidth" class="label"></label>
                      <input
                        type="text"
                        class="input"
                        id="aheight2"
                        value="15"
                        required
                        onchange="drawPolyline()"
                      />
                      <span class="metre">m</span>
                      <!-- </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of sidebar section 2 which contains options to choose from say - bandwidth, freq, cable loss, transmit power -->

              <!-- Sidebar Section 3 -->
              <!-- Start of sidebar section 3 which contains the calculated values and button for report generation-->
              <div class="sidebar-section">
                <!-- Heading of the Section -->
                <header class="sidebar-section-header">
                  <label for="" class="sidebar-section-title"
                    >Link Summary</label
                  >
                  <a href="">
                    <i class="fa-solid fa-arrows-rotate refresh"></i>
                  </a>
                </header>
                <!-- Body of the link summary -->
                <!-- Empty class emties the innerHtML when radio is ion4le i.e. ant gain is 0 -->
                <!-- resetTable is called when cancel ptp button is pressed to reset the value of the table -->
                <div class="sidebar-section-body" style="padding: 0">
                  <div class="table-responsive">
                    <table class="link-summary table">
                      <tbody>
                        <tr>
                          <form class="tableform">
                            <th>line of sight</th>
                          <td>
                            <span class="ng-binding resetTable" id="los">Yes / No</span>
                          </td>
                          <th>fresnel radius</th>
                          <td>
                            <span class="ng-binding resetTable" id="fresnelRadius"></span>
                            <span>m</span>
                          </td>
                        </tr>
                        <!-- Second Column -->
                        <tr>
                          <th>link distance</th>
                          <td>
                            <span class="ng-binding resetTable" id="linkDistance"></span>
                            <span>Km</span>
                          </td>
                          <th>EIRP Max</th>
                          <td>
                            <span class="ng-binding resetTable" id="eirpMax">dBm</span>
                          </td>
                        </tr>
                        <!-- Third column -->
                        <tr>
                          <th>rsl a</th>
                          <td>
                            <span class="ng-binding empty resetTable" id="rsl1"></span>
                            <span>dBm</span>
                          </td>
                          <th>rsl b</th>
                          <td>
                            <span class="ng-binding empty resetTable" id="rsl2"></span>
                            <span>dB</span>
                          </td>
                        </tr>
                        <!-- Fourth Column -->
                        <tr>
                          <th>snr a</th>
                          <td>
                            <span class="ng-binding empty resetTable" id="snr1"></span>
                            <span>dBm</span>
                          </td>
                          <th>snr b</th>
                          <td>
                            <span class="ng-binding empty resetTable" id="snr2"></span>
                            <span>dB</span>
                          </td>
                        </tr>
                        <!-- Last Column -->
                        <tr>
                          <th>throughput</th>
                          <td>
                            <span class="ng-binding empty resetTable" id="throughput"></span>
                            <span>Mbps</span>
                          </td>
                          <th>link reliability</th>
                          <td>
                            <span
                              class="ng-binding empty resetTable"
                              id="linkAvailability"
                            ></span>
                            <span>%</span>
                          </td>
                          </form>  
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="align-center">
                    <div class="sidebar-section-body" style="padding: 30px">
                      <div class="btn-group">
                        <button
                          type="button"
                          class="btn"
                          id="reportbtn"
                          onclick="reportMarker(); submitformm()"
                          disabled
                        >
                          Installation Report
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of the sidebar section containing calculated values and the button for the report -->
              <!-- Start of the Sidebar Section 4 -->
              <!-- Elevation Chart Section -->
              <div class="sidebar-section-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="elevation-chart col-xs-12">
                      <div id="chart" class="chart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Sidebar Section 4 containing elevation chart-->
            </form>
          </div>
        </div>
        <!-- Map Container -->
        <div class="col-lg-8 map-section map-container">
          <div id="map3d" class="sidebar-section-body"></div>
        </div>
      </div>
    </div>
    <!-- Link Report Pop Up -->
    <div class="popup">
      <div class="content">
        <!-- Start of the header of linked report -->
        <div class="reportheader">
          <h4 class="modal-title">
            Installation Report
            <div class="modal-control print-hide">
              <i class="fa-solid fa-xmark" id="close-btn"></i>
            </div>
            <div
              class="modal-control print-hide comp-hide"
              onclick="window.print()"
            >
              <i class="fa-solid fa-print"></i>
            </div>
            <!-- Export Select -->
            <div class="modal-control print-hide col-2 mob-hide">
              <select
                name=""
                id="exports"
                class="export"
                onchange="downloadExport()"
              >
                <option value="" hidden>Export</option>
                <option value="">Print / Download</option>
                <option value="">Export To Excel</option>
              </select>
            </div>
            <div class="modal-control">
              <input id="reportLinkName" />
            </div>
          </h4>
        </div>
        <!-- Header ends -->
        <!-- Start of the body of link report -->
        <div class="modal-body container">
          <div class="row second-row">
            <div class="col-lg-6 report-holder">
              <div class="report-content">
                <div class="heading">Link Settings</div>
                <table class="table table-condensed table-striped" id="tbl1">
                  <tbody>
                    <tr>
                      <th></th>
                      <th>Site A</th>
                      <th>Site B</th>
                    </tr>
                    <tr>
                      <th>Channel Bandwidth</th>
                      <td colspan="2">
                        <span id="reportbandwidth"></span>
                        <span>MHz</span>
                      </td>
                      <td style="display: none"></td>
                    </tr>
                    <tr>
                      <th>Frequency</th>
                      <td colspan="2">
                        <span id="reportfrequency"></span>
                        <span>MHz</span>
                      </td>
                      <td style="display: none"></td>
                    </tr>
                    <tr>
                      <th>Transmit Power</th>
                      <td>
                        <span id="txA"></span>
                        <span>dBm</span>
                      </td>
                      <td>
                        <span id="txB"></span>
                        <span>dBm</span>
                      </td>
                    </tr>
                    <tr>
                      <th>Antenna Gain</th>
                      <td>
                        <span id="antGainA"></span>
                        <span>dBm</span>
                      </td>
                      <td>
                        <span id="antGainB"></span>
                        <span>dBm</span>
                      </td>
                    </tr>
                    <tr>
                      <th>Cable Loss</th>
                      <td>
                        <span id="reportlossA"></span>
                        <span></span>
                      </td>
                      <td>
                        <span id="reportlossB"></span>
                        <span></span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-lg-6 report-holder">
              <div class="report-content">
                <div class="heading">Elevation Profile</div>
                <div class="elevation-chart">
                  <div
                    class="report-chart chart"
                    id="report_elevation_profile"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Second row of the link report -->
          <div class="row second-row">
            <!-- Map container -->
            <div class="col-lg-5 report-holder" style="display: flex">
              <div class="report-content report-map-height">
                <div class="heading">Link Topography</div>
                <div class="report-map-container">
                  <div id="reportmap"></div>
                </div>
              </div>
            </div>
            <!-- link statistics container -->
            <div class="col-lg-7 report-holder">
              <div class="report-content">
                <div class="heading">Link Stats</div>
                <div class="table-responsive-lg">
                  <table class="table table-condensed table-striped" id="tbl2">
                    <tbody>
                      <tr>
                        <th></th>
                        <th>Site A</th>
                        <th>Site B</th>
                      </tr>
                      <tr>
                        <th>Link Distance</th>
                        <td colspan="2">
                          <span id="reportlinkdistance"></span>
                          <span>Km</span>
                        </td>
                        <td style="display: none"></td>
                      </tr>
                      <tr>
                        <th>Fresnel Radius</th>
                        <td colspan="2">
                          <span id="reportfresradius"></span>
                          <span>m</span>
                        </td>
                        <td style="display: none"></td>
                      </tr>
                      <tr>
                        <th>Azimuth Angle</th>
                        <td>
                          <span id="azimuthA"></span>
                          <span>deg</span>
                        </td>
                        <td>
                          <span id="azimuthB"></span>
                          <span>deg</span>
                        </td>
                      </tr>
                      <tr>
                        <th>RSL</th>
                        <td>
                          <span id="reportrsl1"></span>
                          <span>dBm</span>
                        </td>
                        <td>
                          <span id="reportrsl2"></span>
                          <span>dBm</span>
                        </td>
                      </tr>
                      <tr>
                        <th>SNR</th>
                        <td>
                          <span id="reportsnr1"></span>
                          <span>dB</span>
                        </td>
                        <td>
                          <span id="reportsnr2"></span>
                          <span>dB</span>
                        </td>
                      </tr>
                      <tr>
                        <th>Fade Margin</th>
                        <td>
                          <span id="fadeMargin1"></span>
                          <span>dB</span>
                        </td>
                        <td>
                          <span id="fadeMargin2"></span>
                          <span>dB</span>
                        </td>
                      </tr>
                      <tr>
                        <th>MCS</th>
                        <td>
                          <span id="mcs1"></span>
                          <span></span>
                        </td>
                        <td>
                          <span id="mcs2"></span>
                          <span></span>
                        </td>
                      </tr>
                      <tr>
                        <th>Modulation</th>
                        <td>
                          <span id="modulation1"></span>
                          <span></span>
                        </td>
                        <td>
                          <span id="modulation2"></span>
                          <span></span>
                        </td>
                      </tr>
                      <tr>
                        <th>FEC</th>
                        <td>
                          <span id="fec1"></span>
                          <span></span>
                        </td>
                        <td>
                          <span id="fec2"></span>
                          <span></span>
                        </td>
                      </tr>
                      <tr>
                        <th>Link Rate</th>
                        <td>
                          <span id="linkRate1"></span>
                          <span></span>
                        </td>
                        <td>
                          <span id="linkRate2"></span>
                          <span></span>
                        </td>
                      </tr>
                      <tr>
                        <th>Throughput</th>
                        <td colspan="2">
                          <span id="reportthroughput"></span>
                          <span>Mbps</span>
                        </td>
                        <td style="display: none"></td>
                      </tr>
                      <tr>
                        <th>Link Availability</th>
                        <td colspan="2">
                          <span id="reportlinkAvailability"></span>
                          <span>%</span>
                        </td>
                        <td style="display: none"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Third row of the link report -->
          <div class="row second-row">
            <!-- Site A details -->
            <div class="col-lg-6 report-holder">
              <div class="report-content">
                <div class="heading">
                  Site A <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="table-responsive-lg">
                  <table class="table table-condensed table-striped" id="tbl3">
                    <tbody>
                      <tr>
                        <th style="vertical-align: middle">Address</th>
                        <td id="addHeightA">
                          <span id="reportAddressA"></span>
                        </td>
                      </tr>
                      <tr>
                        <th>Co-ordinates</th>
                        <td><span id="reportCoordA"></span></td>
                      </tr>
                      <tr>
                        <th>Elevation</th>
                        <td><span id="reportElevationA"></span></td>
                      </tr>
                      <tr>
                        <th>Height</th>
                        <td><span id="reportHeightA"></span></td>
                      </tr>
                      <tr>
                        <th>Azimuth Angle</th>
                        <td><span id="reportHeadingA"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Site B Details -->
            <div class="col-lg-6 report-holder">
              <div class="report-content">
                <div class="heading">
                  Site B <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="table-responsive-lg">
                  <table class="table table-condensed table-striped" id="tbl4">
                    <tbody>
                      <tr>
                        <th style="vertical-align: middle">Address</th>
                        <td id="addHeightB">
                          <span id="reportAddressB"></span>
                        </td>
                      </tr>
                      <tr>
                        <th>Co-ordinates</th>
                        <td><span id="reportCoordB"></span></td>
                      </tr>
                      <tr>
                        <th>Elevation</th>
                        <td><span id="reportElevationB"></span></td>
                      </tr>
                      <tr>
                        <th>Height</th>
                        <td><span id="reportHeightB"></span></td>
                      </tr>
                      <tr>
                        <th>Azimuth Angle</th>
                        <td><span id="reportHeadingB"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Third row ends -->
          <!-- Button to donwload the Tables -->
          <div class="dataToXlsx comp-hide">
            <button class="exportBtn btn" onclick="exportToExcel()">
              <span style="padding-right: 3px">
                <i class="fa fa-download" aria-hidden="true"></i>
              </span>
              Export To Excel
            </button>
          </div>
        </div>
        <!-- Link Report Body ends -->
      </div>
    </div>
    <!-- End of link report pop up -->
    <!-- Strat of reference table div -->
    <div class="table" style="display: none">
      <!-- Table 1 10 MHz -->
      <table id="throughput10MHz" class="mcsTable" hidden>
        <tr>
          <th>Min</th>
          <th>Max</th>
          <th>MCS</th>
          <th>Modulation</th>
          <th>FEC</th>
          <th>Link Rate</th>
          <th>Throughput</th>
        </tr>

        <tr>
          <td>-85</td>
          <td>-82.01</td>
          <td>0</td>
          <td>BPSK</td>
          <td>1/2</td>
          <td>7</td>
          <td>4.9</td>
        </tr>
        <tr>
          <td>-82</td>
          <td>-80.01</td>
          <td>1</td>
          <td>QPSK</td>
          <td>1/2</td>
          <td>14</td>
          <td>9.8</td>
        </tr>
        <tr>
          <td>-80</td>
          <td>-77.01</td>
          <td>2</td>
          <td>QPSK</td>
          <td>3/4</td>
          <td>21</td>
          <td>14.7</td>
        </tr>
        <tr>
          <td>-77</td>
          <td>-73.01</td>
          <td>3</td>
          <td>16-QAM</td>
          <td>1/2</td>
          <td>28</td>
          <td>19.6</td>
        </tr>
        <tr>
          <td>-73</td>
          <td>-69.01</td>
          <td>4</td>
          <td>16-QAM</td>
          <td>3/4</td>
          <td>43</td>
          <td>30.01</td>
        </tr>
        <tr>
          <td>-69</td>
          <td>-68.01</td>
          <td>5</td>
          <td>64-QAM</td>
          <td>2/3</td>
          <td>57</td>
          <td>39.9</td>
        </tr>
        <tr>
          <td>-68</td>
          <td>-65.01</td>
          <td>6</td>
          <td>64-QAM</td>
          <td>3/4</td>
          <td>65</td>
          <td>45.5</td>
        </tr>
        <tr>
          <td>-65</td>
          <td>0</td>
          <td>7</td>
          <td>64-QAM</td>
          <td>5/6</td>
          <td>72</td>
          <td>50.4</td>
        </tr>
        <!-- <tr>
          <td>-59</td>
          <td>-57.01</td>
          <td>8</td>
          <td>256-QAM</td>
          <td>3/4</td>
          <td>173.3</td>
          <td>120</td>
        </tr>
        <tr>
          <td>-57</td>
          <td>0</td>
          <td>9</td>
          <td>256-QAM</td>
          <td>5/6</td>
          <td>192</td>
          <td>135</td>
        </tr> -->
      </table>

      <!-- TABLE 2 BANDWIDTH 20MHz -->
      <table id="throughput20MHz" class="mcsTable" hidden>
        <tr>
          <th>Min</th>
          <th>Max</th>
          <th>MCS</th>
          <th>Modulation</th>
          <th>FEC</th>
          <th>Link Rate</th>
          <th>Throughput</th>
        </tr>

        <tr>
          <td>-82</td>
          <td>-79.01</td>
          <td>0</td>
          <td>BPSK</td>
          <td>1/2</td>
          <td>14.4</td>
          <td>10</td>
        </tr>
        <tr>
          <td>-79</td>
          <td>-77.01</td>
          <td>1</td>
          <td>QPSK</td>
          <td>1/2</td>
          <td>28.9</td>
          <td>20</td>
        </tr>
        <tr>
          <td>-77</td>
          <td>-74.01</td>
          <td>2</td>
          <td>QPSK</td>
          <td>3/4</td>
          <td>43.3</td>
          <td>30</td>
        </tr>
        <tr>
          <td>-74</td>
          <td>-70.01</td>
          <td>3</td>
          <td>16-QAM</td>
          <td>1/2</td>
          <td>57.8</td>
          <td>40</td>
        </tr>
        <tr>
          <td>-70</td>
          <td>-66.01</td>
          <td>4</td>
          <td>16-QAM</td>
          <td>3/4</td>
          <td>86.7</td>
          <td>60</td>
        </tr>
        <tr>
          <td>-66</td>
          <td>-65.01</td>
          <td>5</td>
          <td>64-QAM</td>
          <td>2/3</td>
          <td>115.6</td>
          <td>80</td>
        </tr>
        <tr>
          <td>-65</td>
          <td>-64.01</td>
          <td>6</td>
          <td>64-QAM</td>
          <td>3/4</td>
          <td>130</td>
          <td>91</td>
        </tr>
        <tr>
          <td>-64</td>
          <td>-59.01</td>
          <td>7</td>
          <td>64-QAM</td>
          <td>5/6</td>
          <td>144.4</td>
          <td>101</td>
        </tr>
        <tr>
          <td>-59</td>
          <td>-57.01</td>
          <td>8</td>
          <td>256-QAM</td>
          <td>3/4</td>
          <td>173.3</td>
          <td>120</td>
        </tr>
        <tr>
          <td>-57</td>
          <td>0</td>
          <td>9</td>
          <td>256-QAM</td>
          <td>5/6</td>
          <td>192</td>
          <td>135</td>
        </tr>
      </table>

      <!-- TABLE 2 BANDWIDTH 40MHz  -->

      <table id="throughput40MHz" class="mcsTable" hidden>
        <tr>
          <th>Min</th>
          <th>Max</th>
          <th>MCS</th>
          <th>Modulation</th>
          <th>FEC</th>
          <th>Link Rate</th>
          <th>Throughput</th>
        </tr>

        <tr>
          <td>-79</td>
          <td>-76.01</td>
          <td>0</td>
          <td>BPSK</td>
          <td>1/2</td>
          <td>30</td>
          <td>21</td>
        </tr>
        <tr>
          <td>-76</td>
          <td>-74.01</td>
          <td>1</td>
          <td>QPSK</td>
          <td>1/2</td>
          <td>60</td>
          <td>42</td>
        </tr>
        <tr>
          <td>-74</td>
          <td>-71.01</td>
          <td>2</td>
          <td>QPSK</td>
          <td>3/4</td>
          <td>90</td>
          <td>63</td>
        </tr>
        <tr>
          <td>-71</td>
          <td>-67.01</td>
          <td>3</td>
          <td>16-QAM</td>
          <td>1/2</td>
          <td>120</td>
          <td>84</td>
        </tr>
        <tr>
          <td>-67</td>
          <td>-63.01</td>
          <td>4</td>
          <td>16-QAM</td>
          <td>3/4</td>
          <td>180</td>
          <td>126</td>
        </tr>
        <tr>
          <td>-63</td>
          <td>-62.01</td>
          <td>5</td>
          <td>64-QAM</td>
          <td>2/3</td>
          <td>240</td>
          <td>168</td>
        </tr>
        <tr>
          <td>-62</td>
          <td>-61.01</td>
          <td>6</td>
          <td>64-QAM</td>
          <td>3/4</td>
          <td>270</td>
          <td>189</td>
        </tr>
        <tr>
          <td>-61</td>
          <td>-56.01</td>
          <td>7</td>
          <td>64-QAM</td>
          <td>5/6</td>
          <td>300</td>
          <td>210</td>
        </tr>
        <tr>
          <td>-56</td>
          <td>-54.01</td>
          <td>8</td>
          <td>256-QAM</td>
          <td>3/4</td>
          <td>360</td>
          <td>252</td>
        </tr>
        <tr>
          <td>-54</td>
          <td>0</td>
          <td>9</td>
          <td>256-QAM</td>
          <td>5/6</td>
          <td>400</td>
          <td>280</td>
        </tr>
      </table>

      <table id="throughput80MHz" class="mcsTable" hidden>
        <tr>
          <th>Min</th>
          <th>Max</th>
          <th>MCS</th>
          <th>Modulation</th>
          <th>FEC</th>
          <th>Link Rate</th>
          <th>Throughput</th>
        </tr>

        <tr>
          <td>-76</td>
          <td>-73.01</td>
          <td>0</td>
          <td>BPSK</td>
          <td>1/2</td>
          <td>65</td>
          <td>45</td>
        </tr>
        <tr>
          <td>-73</td>
          <td>-71.01</td>
          <td>1</td>
          <td>QPSK</td>
          <td>1/2</td>
          <td>130</td>
          <td>91</td>
        </tr>
        <tr>
          <td>-71</td>
          <td>-68.01</td>
          <td>2</td>
          <td>QPSK</td>
          <td>3/4</td>
          <td>195</td>
          <td>135</td>
        </tr>
        <tr>
          <td>-68</td>
          <td>-64.01</td>
          <td>3</td>
          <td>16-QAM</td>
          <td>1/2</td>
          <td>260</td>
          <td>182</td>
        </tr>
        <tr>
          <td>-64</td>
          <td>-60.01</td>
          <td>4</td>
          <td>16-QAM</td>
          <td>3/4</td>
          <td>390</td>
          <td>275</td>
        </tr>
        <tr>
          <td>-60</td>
          <td>-59.01</td>
          <td>5</td>
          <td>64-QAM</td>
          <td>2/3</td>
          <td>520</td>
          <td>365</td>
        </tr>
        <tr>
          <td>-59</td>
          <td>-58.01</td>
          <td>6</td>
          <td>64-QAM</td>
          <td>3/4</td>
          <td>585</td>
          <td>410</td>
        </tr>
        <tr>
          <td>-58</td>
          <td>-53.01</td>
          <td>7</td>
          <td>64-QAM</td>
          <td>5/6</td>
          <td>650</td>
          <td>455</td>
        </tr>
        <tr>
          <td>-53</td>
          <td>-51.01</td>
          <td>8</td>
          <td>256-QAM</td>
          <td>3/4</td>
          <td>780</td>
          <td>546</td>
        </tr>
        <tr>
          <td>-51</td>
          <td>0</td>
          <td>9</td>
          <td>256-QAM</td>
          <td>5/6</td>
          <td>866.7</td>
          <td>610</td>
        </tr>
      </table>

      <table id="throughput160MHz" class="mcsTable" hidden>
        <tr>
          <th>Min</th>
          <th>Max</th>
          <th>MCS</th>
          <th>Modulation</th>
          <th>FEC</th>
          <th>Link Rate</th>
          <th>Throughput</th>
        </tr>

        <tr>
          <td>6</td>
          <td>9.9999</td>
          <td>0</td>
          <td>BPSK</td>
          <td>1/2</td>
          <td>130</td>
          <td>45</td>
        </tr>
        <tr>
          <td>10</td>
          <td>11.9999</td>
          <td>1</td>
          <td>QPSK</td>
          <td>1/2</td>
          <td>260</td>
          <td>91</td>
        </tr>
        <tr>
          <td>12</td>
          <td>14.9999</td>
          <td>2</td>
          <td>QPSK</td>
          <td>3/4</td>
          <td>390</td>
          <td>135</td>
        </tr>
        <tr>
          <td>15</td>
          <td>16.9999</td>
          <td>3</td>
          <td>16-QAM</td>
          <td>1/2</td>
          <td>520</td>
          <td>182</td>
        </tr>
        <tr>
          <td>17</td>
          <td>19.9999</td>
          <td>4</td>
          <td>16-QAM</td>
          <td>3/4</td>
          <td>780</td>
          <td>275</td>
        </tr>
        <tr>
          <td>20</td>
          <td>22.9999</td>
          <td>5</td>
          <td>64-QAM</td>
          <td>2/3</td>
          <td>1040</td>
          <td>365</td>
        </tr>
        <tr>
          <td>23</td>
          <td>25.9999</td>
          <td>6</td>
          <td>64-QAM</td>
          <td>3/4</td>
          <td>1170</td>
          <td>410</td>
        </tr>
        <tr>
          <td>26</td>
          <td>29.9999</td>
          <td>7</td>
          <td>64-QAM</td>
          <td>5/6</td>
          <td>1300</td>
          <td>455</td>
        </tr>
        <tr>
          <td>30</td>
          <td>30.9999</td>
          <td>8</td>
          <td>256-QAM</td>
          <td>3/4</td>
          <td>1560</td>
          <td>546</td>
        </tr>
        <tr>
          <td>31</td>
          <td>80</td>
          <td>9</td>
          <td>256-QAM</td>
          <td>5/6</td>
          <td>1733.3</td>
          <td>610</td>
        </tr>
      </table>


<script>






</script>


    <!-- <script src="<?php echo BASE_URL; ?>/js/reportspage/queryselect.js" type="text/javascript"></script> -->
    <script src="https://io.hfcl.com/js/reportspage/queryselect.js" type="text/javascript"></script>

    <!-- <script src="<?php echo BASE_URL; ?>/js/reportspage/functionalities.js" type="text/javascript"></script> -->
    <script src="https://io.hfcl.com/js/reportspage/functionalities.js" type="text/javascript"></script>


    <!-- <script src="<?php echo BASE_URL; ?>/js/reportspage/map.js" type="text/javascript"></script> -->
    <script src="https://io.hfcl.com/js/reportspage/map.js" type="text/javascript"></script>

    <!-- <script src="<?php echo BASE_URL; ?>/js/reportspage/miscFunc.js" type="text/javascript"></script> -->
    <script src="https://io.hfcl.com/js/reportspage/miscFunc.js" type="text/javascript"></script>

    <!-- <script src="<?php echo BASE_URL; ?>/js/reportspage/tabletocsv.js" type="text/javascript"></script> -->
    <script src="https://io.hfcl.com/js/reportspage/tabletocsv.js" type="text/javascript"></script>

    <!-- End of reference table div -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFf4mpz_yyO4VwiDBxITLVQjp8Zr_VlHc&libraries=places&callback=initMap"></script>
    <script>




    
      // Event Listener for the address of the two sites
      var ctry = document.getElementById("ctryCode");
      var selectedctry = ctry.options[ctry.selectedIndex].innerHTML;
      var add1 = document.getElementById("add0");
      var add2 = document.getElementById("add1");
      var autocomplete1 = new google.maps.places.Autocomplete(add1);
      var autocomplete2 = new google.maps.places.Autocomplete(add2);
      autocomplete1.addListener("place_changed", function () {
        var place1 = autocomplete1.getPlace();
          // check for the country
          if (add1.value.includes(selectedctry)){
            document.getElementById("searchtowerA").value =
          place1.geometry["location"].lat().toFixed(6) +
          "," +
          place1.geometry["location"].lng().toFixed(6);
            inputMarker();
          }
          else{
            alert("The address entered doesnot belong to the selected country")
            document.getElementById("add0").value = "";
          }
       
      });
      autocomplete2.addListener("place_changed", function () {
        var place2 = autocomplete2.getPlace();

          // check for the country
          if (add2.value.includes(selectedctry)){
            document.getElementById("searchtowerB").value =
          place2.geometry["location"].lat().toFixed(6) +
          "," +
          place2.geometry["location"].lng().toFixed(6);
            inputMarker();
          }
          else{
            alert("The address entered doesnot belong to the selected country")
            document.getElementById("add1").value = "";
          }
      });

      // Event listener for reverse geocoding taking co-ordinates giving address
      document
        .getElementById("searchtowerA")
        .addEventListener("change", function () {
          var inputs = document.getElementById("searchtowerA").value;
          var inputString = inputs.split(",");
          var inputLatLong = {
            lat: parseFloat(inputString[0]),
            lng: parseFloat(inputString[1]),
          };
          geocoder
            .geocode({ location: inputLatLong })
            .then((response) => {
              if (response.results[0]) {
                  // To check for the country name
               if(response.results[0].formatted_address.includes(selectedctry)){
                 // Populating the address at Site A
                 document.getElementById("add0").value =
                  response.results[0].formatted_address;
                document.getElementById("reportAddressA").innerHTML =
                  response.results[0].formatted_address;
                inputMarker()
               }
               else{
                alert("The entered co-ordinate doesnot belong to the selected country.")
                document.getElementById("searchtowerA").value = "";
               }
              }
            })
            // .catch((e) => window.alert("Geocoder failed due to:", e));
        });
      // Event listener for reverse geocoding
      document
        .getElementById("searchtowerB")
        .addEventListener("change", function () {
          var inputs = document.getElementById("searchtowerB").value;
          var inputString = inputs.split(",");
          var inputLatLong = {
            lat: parseFloat(inputString[0]),
            lng: parseFloat(inputString[1]),
          };
          geocoder
            .geocode({ location: inputLatLong })
            .then((response) => {
              if (response.results[0]) {
                    // To check for the country name
               if(response.results[0].formatted_address.includes(selectedctry)){
                document.getElementById("add1").value =
                  response.results[0].formatted_address;
                document.getElementById("reportAddressB").innerHTML =
                  response.results[0].formatted_address;
                inputMarker()
               }
               else{
                alert("The entered co-ordinate doesnot belong to the selected country.")
                document.getElementById("searchtowerB").value = ""
               }
              }
            })
            // .catch((e) => window.alert("Geocoder failed due to:", e));
        });



     

    </script>
   
  </body>
</html>

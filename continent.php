<!DOCTYPE html>
<html>
    <?php
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        } 
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="google-site-verification" content="kevV-HFG1JijHyuKnnkIeN6dY_Hb-ueXuqoUv-pPWUU"/>
        <meta name="ahrefs-site-verification" content="167ef56daf7b5a6af88ecea027be9df8f7a528cfe6be55f3f794a32094b792f2">
        <meta name="keywords" content="Import Export Data, Export Import Data Provider, Business Intelligence Report, Import Export Trade Data, Best Market Research, Importers Exporters Data, Buyers List, List of Suppliers, Trade Data, Best Import Export Data" />
        <meta name="robots" content="index, follow" id="robots"/>
        <meta name="description" content="TradeImeX is a leading Import Export Trade Data Provider. We Cover 70+ Countries Import Export Trade Data online. Discover the Growth Trend." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
        <title>
            <?php
                $country_id = $id;
                switch ($country_id) {
                    case "AS-24" :
                        echo 
                        'Asia Trade Data';
                    break;
                    case "AF-24" :
                        echo 
                        'Africa Trade Data';
                    break;
                    case "EU-34" :
                        echo 
                        'Europe Trade Data';
                    break;
                    case "NA-8" :
                        echo 
                        'North America Trade Data';
                    break;
                    case "OC-3" :
                        echo 
                        'Oceania Trade Data';
                    break;
                    case "SA-11" :
                        echo 
                        'South America Trade Data';
                    break;
                    default:
                        echo "Error 404 ";
                }
            ?>
        </title>
        <link rel="icon" type="image/x-icon" href="assets/img/Favicon Logo.png">

        <?php include 'link.php';?>
        
        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PVH9BTS');
        </script>
        <!-- End Google Tag Manager -->
        <style>
            #chart_wrap {
                position: relative;
                padding-bottom: 70%;
                height: 0;
                overflow:hidden;
            }
            #chart_div {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .chart {
                width: 100%; 
                min-height: 450px;
            }
            #chartdiv {
                width: 100%;
                height: 300px;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php';?>

        <!-- Breadcrumb -->
        <div class="container-fluid bg-bluish pdt-2">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-bluish">
                        <li class="breadcrumb-item">
                            <a class="text-hover" href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php
                                $country_id = $id;
                                switch ($country_id) {
                                    case "AS-24" :
                                        echo 
                                        'Asia Trade Data';
                                    break;
                                    case "AF-24" :
                                        echo 
                                        'Africa Trade Data';
                                    break;
                                    case "EU-34" :
                                        echo 
                                        'Europe Trade Data';
                                    break;
                                    case "NA-8" :
                                        echo 
                                        'North America Trade Data';
                                    break;
                                    case "OC-3" :
                                        echo 
                                        'Oceania Trade Data';
                                    break;
                                    case "SA-11" :
                                        echo 
                                        'South America Trade Data';
                                    break;
                                    default:
                                        echo "Error 404 ";
                                }
                            ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Overview of country -->
        <div class="container-fluid pdt-2 pdb-5 bg-bluish">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="text-content">
                            <span>Overview</span>
                            <h1 class="gradient-h2" style="font-size: 48px;font-weight: 900;">
                                ASIA TRADE DATA
                            </h1>
                            <p>
                                Asia, which is the world’s biggest continent on the earth, 
                                comprises 48 recognized countries including Russia, India, 
                                and Indonesia. We, at TradeImeX ® Info Solution Pvt Ltd., 
                                provide authentic and accurate statistics and customs data 
                                of multiple Asian countries that can be very useful to those 
                                people who are looking to grow their knowledge and career 
                                via foreign trade and primarily targeting Asian countries.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <!-- <div id="chart_div" style="width: 500px; height: 500px;"></div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Country covered -->
        <div class="continent-tabcontent bg-dark-custom" style="display: block !important;float: none;width: auto;">
            <div class="container">
                <?php
                    $country_id =$id;
                    switch ($country_id) {
                        case "AS-24" :
                            echo 
                            '<div class="row padding-tb">
                                <div class="text-content">
                                    <h2 class="text-white text-center">Countries Covered Under Asia Trade Data</h2>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <a href="countries.php?id=TAS-1&&$scid=AS-24" class="text-hover text-white">
                                        <img src="assets/flags/bangladesh.png">
                                        <br>
                                        <h4>Bangladesh</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/china_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-2&&$scid=AS-24" class="text-hover text-white">
                                        <h4>China</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/egypt_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-3&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Egypt</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/indonesia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-4&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Indonesia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/iran_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-5&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Iran</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/iraq_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-6&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Iraq</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/japan_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-7&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Japan</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/kazakhstan_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-8&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Kazakhstan</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/kuwait_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-9&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Kuwait</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/malaysia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-10&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Malaysia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/pakistan_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-11&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Pakistan</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/philippines_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-12&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Phillipines</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/qatar_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-13&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Qatar</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/saudi_arabia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-14&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Saudi Arabia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/singapore_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-15&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Singapore</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/korea_south_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-16&&$scid=AS-24" class="text-hover text-white">
                                        <h4>South Korea</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/sri_lanka_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-17&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Sri Lanka</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/republic_of_china_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-18&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Taiwan</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/thailand_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-19&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Thailand</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/turkey_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-20&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Turkey</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/united_arab_emirates_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-21&&$scid=AS-24" class="text-hover text-white">
                                        <h4>UAE</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags//ukraine_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-22&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Ukraine</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/uzbekistan_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAS-23&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Uzbekistan</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/vietnam_rectangular_icon_with_shadow_64 (1).png">
                                    <br>
                                    <a href="countries.php?id=TAS-24&&$scid=AS-24" class="text-hover text-white">
                                        <h4>Vietnam</h4>
                                    </a>
                                </div>
                            </div>';
                        break;
                        case "AF-24" :
                            echo 
                            '<div class="row padding-tb">
                                <div class="text-content">
                                    <h2 class="text-white text-center">Countries Covered Under Africa Trade Data</h2>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/botswana_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-1&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Botswana</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/cameroon_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-2&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Cameroon</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/central_african_republic_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-3&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Central Africa</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/chad_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-4&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Chad</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/democratic_republic_of_the_congo_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-5&&$scid=AF-24" class="text-hover text-white">
                                        <h4>DR Congo</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/ethiopia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-6&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Ethiopia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/ghana_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-7&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Ghana</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/cote_d_Ivoire_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-8&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Ivory Coast</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/kenya_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-9&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Kenya</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/lesotho_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-10&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Lesotho</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/liberia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-11&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Liberia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/malawi_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-12&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Malawi</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/namibia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-13&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Namibia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/niger_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-14&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Niger</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/nigeria_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-15&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Nigeria</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/sao_tome_and_principe_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-16&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Sao Tome</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/senegal_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-17&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Senegal</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/sierra_leone_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-18&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Sierra Leone</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/south_africa_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-19&&$scid=AF-24" class="text-hover text-white">
                                        <h4>South Africa</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/tanzania_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-20&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Tanzania</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/togo_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-21&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Togo</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/uganda_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-22&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Uganda</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/zambia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-23&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Zambia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/zimbabwe_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TAF-24&&$scid=AF-24" class="text-hover text-white">
                                        <h4>Zimbabwe</h4>
                                    </a>
                                </div>
                            </div>';
                        break;
                        case "EU-34" :
                            echo 
                            '<div class="row padding-tb">
                                <div class="text-content">
                                    <h2 class="text-white text-center">Countries Covered Under Europe Trade Data</h2>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/austria_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-1&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Austria</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/belgium_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-2&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Belgium</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/bulgaria_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-3&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Bulgaria</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/croatia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-4&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Croatia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/cyprus_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-5&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Cyprus</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/czech_republic_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-6&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Czech</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/denmark_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-7&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Denmark</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/estonia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-8&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Estonia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/finland_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-9&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Finland</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/france_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-10&&$scid=EU-34" class="text-hover text-white">
                                        <h4>France</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/germany_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-11&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Germany</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/greece_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-12&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Greece</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/hungary_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-13&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Hungary</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/ireland_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-14&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Ireland</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/italy_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-15&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Italy</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/kazakhstan_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-16&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Kazakhstan</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/kosovo_rectangular_icon_with_shadow_64 (1).png">
                                    <br>
                                    <a href="countries.php?id=TEU-17&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Kosovo</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/latvia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-18&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Latvia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/lithuania_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-19&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Lithuania</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/luxembourg_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-20&&$scid=EU-34" class="text-hover text-white">
                                        <h4>LuxemBourg</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/malta_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-21&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Malta</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/moldova_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-22&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Moldova</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/netherlands_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-23&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Netherlands</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/poland_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-24&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Polands</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/portugal_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-25&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Portugal</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/russia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-26&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Russia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/romania_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-27&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Romania</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/slovakia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-28&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Slovokia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/slovenia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-29&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Slovenia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/spain_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-30&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Spain</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/sweden_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-31&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Sweden</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/united_kingdom_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-32&&$scid=EU-34" class="text-hover text-white">
                                        <h4>UK</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/ukraine_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-33&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Ukraine</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2 Flag">
                                    <img src="assets/flags/uzbekistan_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TEU-34&&$scid=EU-34" class="text-hover text-white">
                                        <h4>Uzbekistan</h4>
                                    </a>
                                </div>
                            </div>';
                        break;
                        case "NA-8" :
                            echo 
                            '<div class="row padding-tb">
                                <div class="text-content">
                                    <h2 class="text-white text-center">Countries Covered Under North America Trade Data</h2>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/canada_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TNA-1&&$scid=NA-8" class="text-hover text-white">
                                        <h4>Canada</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/costa_rica_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TNA-2&&$scid=NA-8" class="text-hover text-white">
                                        <h4>Costa Rica</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/el_salvador_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TNA-3&&$scid=NA-8" class="text-hover text-white">
                                        <h4 style="font-size: 12px !important;">EL Salvador</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/guatemala_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TNA-4&&$scid=NA-8" class="text-hover text-white">
                                        <h4>Guatemala</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/honduras_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TNA-5&&$scid=NA-8" class="text-hover text-white">
                                        <h4>Honduras</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/mexico_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TNA-6&&$scid=NA-8" class="text-hover text-white">
                                        <h4>Mexico</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/united_states_of_america_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TNA-7&&$scid=NA-8" class="text-hover text-white">
                                        <h4>US</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/zambia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TNA-8&&$scid=NA-8" class="text-hover text-white">
                                        <h4>Zambia</h4>
                                    </a>
                                </div>
                            </div>';
                        break;
                        case "OC-3" :
                            echo 
                            '<div class="row padding-tb" style="justify-content: center;">
                                <div class="text-content">
                                    <h2 class="text-white text-center">Countries Covered Under Oceania Trade Data</h2>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/australia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TOC-1&&$scid=OC-3" class="text-hover text-white">
                                        <h4>Australia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/fiji_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TOC-2&&$scid=OC-3" class="text-hover text-white">
                                        <h4>Fiji</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/new_zealand_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TOC-3&&$scid=OC-3" class="text-hover text-white">
                                        <h4 style="font-size: 12px !important;">New Zealand</h4>
                                    </a>
                                </div>
                            </div>';
                        break;
                        case "SA-11" :
                            echo 
                            '<div class="row padding-tb">
                                <div class="text-content">
                                    <h2 class="text-white text-center">Countries Covered Under South Africa Trade Data</h2>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/argentina_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-1&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Agentina</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/bolivia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-2&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Bolivia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/brazil_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-3&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Brazil</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/chile_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-4&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Chile</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/colombia_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-5&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Colombia</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/ecuador_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-6&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Ecuador</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/guyana_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-7&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Guyana</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/paraguay_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-8&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Paraguay</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/peru_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-9&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Peru</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/uruguay_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-10&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Uruguay</h4>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="assets/flags/venezuela_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    <a href="countries.php?id=TSA-11&&$scid=SA-11" class="text-hover text-white">
                                        <h4>Venezuela</h4>
                                    </a>
                                </div>
                            </div>';
                        break;
                        default:
                            echo "Error 404 ";
                    }
                ?>
            </div>
        </div>
        <div class="clearfix"></div>

        <!-- Top 10 imports of country -->
        <div class="container-fluid pdt-2 pdb-2">
            <div class="container">
                <div class="text-content">
                    <span>Use Case</span>
                    <h2>
                        Top 10 Imports Of  Botswana
                    </h2>
                    <p>
                        Use our suite of optimized and composable UIs to seamlessly collect 
                        payment details, customer addresses, offer mobile wallets, and more. 
                        Businesses using Stripe's Payment Element saw 10.5% more revenue on average.
                        TradeImeX ® Info Solution Pvt Ltd., provide authentic and accurate statistics and 
                        customs data of multiple Asian countries that can be very useful to those people 
                        who are looking to grow their knowledge and career via foreign trade and 
                        primarily targeting Asian countries.
                    </p>
                </div>
            </div>
            <div class="container pdt-2">
                <div class="row">
                    <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="list">
                                <li>Petroleum Oils And Mineral fuels ($8.66 billion) 15.6%</li>
                                <li>Motor cars and other motor vehicles ($2.94 billion) 5.33%</li>
                                <li>Petroleum gases and hydrocarbons ($2.11 billion) 3.82%</li>
                                <li>Pharmaceuticals and Medicaments ($1.55 billion) 2.8%</li>
                                <li>Coal and solid fuels manufactured from coal ($1.17 billion) 2.13%</li>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="list">
                                <li>Electrical appliances including telephones ($1.01 billion) 1.83%</li>
                                <li>Iron and steel (952 million US$) 1.72%</li>
                                <li>Insecticides, rodenticides, fungicides, and herbicides ($912 million) 1.65%</li>
                                <li>Tractors ($792 million) 1.43%</li>
                                <li>Electric generating sets and rotary converters ($688 million) 1.24%</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div id="10_imports" class="chart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top 10 partners of continent-->
        <div class="container-fluid pdb-5">
            <div class="container">
                <div class="text-content">
                    <span>Top 10 Partners Of Countries</span>
                    <h2>
                        Powerful building blocks to help <br>
                        optimize conversion across web and mobile
                    </h2>
                    <p>
                        Use our suite of optimized and composable UIs to seamlessly collect 
                        payment details, customer addresses, offer mobile wallets, and more. 
                        Businesses using Stripe's Payment Element saw 10.5% more revenue on average.
                    </p>
                </div>
            </div>
            <div class="container pdt-2">
                <div  class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                        <div id="10_partners" class="chart"></div>
                    </div>
                    <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <li class="list">Petroleum Oils And Mineral fuels ($8.66 billion) 15.6%</li>
                            <li class="list">Motor cars and other motor vehicles ($2.94 billion) 5.33%</li>
                            <li class="list">Petroleum gases and hydrocarbons ($2.11 billion) 3.82%</li>
                            <li class="list">Pharmaceuticals and Medicaments ($1.55 billion) 2.8%</li>
                            <li class="list">Coal and solid fuels manufactured from coal ($1.17 billion) 2.13%</li>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <li class="list">Electrical appliances including telephones ($1.01 billion) 1.83%</li>
                            <li class="list">Iron and steel (952 million US$) 1.72%</li>
                            <li class="list">Insecticides, rodenticides, fungicides, and herbicides ($912 million) 1.65%</li>
                            <li class="list">Tractors ($792 million) 1.43%</li>
                            <li class="list">Electric generating sets and rotary converters ($688 million) 1.24%</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sample Data -->
        <div class="container-fluid padding-tb bg-dark-custom">
            <div class="container">
                <div class="text-content">
                    <span>Sample Data</span>
                    <h2 class="text-white">
                        We help customers achieve measurable results
                    </h2>
                    <p class="text-white">
                        Integrate Stripe with your existing systems to support the entire 
                        lifecycle of your business’s cash flow—from acquiring customers and 
                        collecting revenue, to closing your books and filing sales taxes. 
                        With Stripe’s comprehensive revenue and finance automation solution, 
                        you don’t have to settle for oversized, arcane systems or small-scale, 
                        piecemeal tools.
                    </p>
                </div>
            </div>
            <div class="container pdt-2">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="flex" style="justify-content: center;">
                                <img src="assets/img/BL Data.png" width="60%" style="border-radius: 12px;">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="10000">
                            <div class="flex" style="justify-content: center;">
                                <img src="assets/img/BL Data.png" width="60%" style="border-radius: 12px;">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="10000">
                            <div class="flex" style="justify-content: center;">
                                <img src="assets/img/BL Data.png" width="60%" style="border-radius: 12px;">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <div class="bg-caret">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </div>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <div class="bg-caret">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Benefits -->
        <!-- <div class="container-fluid padding-tb bg-bluish">
            <div class="container">
                <div class="text-content">
                    <span>Benefits</span>
                    <h2>
                        Don’t waste time reinventing the payments wheel
                    </h2>
                    <p>
                        Building a conversion-optimized payments experience is hard. 
                        Elements lets you take advantage of Stripe’s collective experience 
                        across front-end, design, and analytics, so that you can spend less 
                        time on payments and more time on your product.
                    </p>
                </div>
            </div>
            <div class="container pdt-2">
                New Card Design will be implented here for benefits -->
                <!-- <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card-content pdb-2">
                            <div class="head">
                                <h3>UI Optimizations</h3>
                            </div>
                            <li class="list">Client-side input validation</li>
                            <li class="list">Input masking</li>
                            <li class="list">Card-specific CVC hints</li>
                            <li class="list">Built-in accessibility (ARIA)</li>
                            <li class="list">Autofill via browser</li>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card-content pdb-2">
                            <div class="head">
                                <h3>UI Optimizations</h3>
                            </div>
                            <li class="list">Client-side input validation</li>
                            <li class="list">Input masking</li>
                            <li class="list">Card-specific CVC hints</li>
                            <li class="list">Built-in accessibility (ARIA)</li>
                            <li class="list">Autofill via browser</li>
                        </div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card-content pdb-2">
                            <div class="head">
                                <h3>UI Optimizations</h3>
                            </div>
                            <li class="list">Client-side input validation</li>
                            <li class="list">Input masking</li>
                            <li class="list">Card-specific CVC hints</li>
                            <li class="list">Built-in accessibility (ARIA)</li>
                            <li class="list">Autofill via browser</li>
                        </div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card-content pdb-2">
                            <div class="head">
                                <h3>UI Optimizations</h3>
                            </div>
                            <li class="list">Client-side input validation</li>
                            <li class="list">Input masking</li>
                            <li class="list">Card-specific CVC hints</li>
                            <li class="list">Built-in accessibility (ARIA)</li>
                            <li class="list">Autofill via browser</li>
                        </div> 
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Last Partner tab -->
        <?php include 'tab_inc.php';?>

        <?php include 'footer.php';?>
        <?php include 'script.php';?>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="//cdn.amcharts.com/lib/5/index.js"></script>
        <script src="//cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="//cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <!-- Top 10 imports of country -->
        <script>
            var root = am5.Root.new("10_imports");

            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            var chart = root.container.children.push(
                am5percent.PieChart.new(root, {
                    radius: am5.percent(90),
                    innerRadius: am5.percent(50)
                })
            );

            // Define data
            var data = [{
                    country: "France",
                    sales: 100000
                }, {
                    country: "Spain",
                    sales: 160000
                }, {
                country: "United Kingdom",
                sales: 80000
            }];

            // Create series
            var series = chart.series.push(
                am5percent.PieSeries.new(root, {
                    name: "Series",
                    valueField: "sales",
                    categoryField: "country"
                })
            );

            series.data.setAll(data);

            // Disabling labels and ticks
            series.labels.template.set("visible", false);
            series.ticks.template.set("visible", false);
        </script>
        <!-- <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', 'Percentage'],
                    ["Petroleum Oils And Mineral fuels ($8.66 billion) 15.6%",  15.6],
                    ["Motor cars and other motor vehicles ($2.94 billion)", 5.33],
                    ["Petroleum gases and hydrocarbons ($2.11 billion)", 3.82],
                    ["Pharmaceuticals and Medicaments ($1.55 billion)", 2.8],
                    ["Coal and solid fuels manufactured from coal ($1.17 billion)", 2.13],
                    ["Electrical appliances including telephones ($1.01 billion)",  1.83],
                    ["Iron and steel (952 million US$)", 1.72],
                    ["Insecticides, rodenticides, fungicides, and herbicides ($912 million)", 1.65],
                    ["Tractors ($792 million)", 1.43],
                    ['Electric generating sets and rotary converters ($688 million)', 1.24]
                ]);

                var options = {
                    title: '',
                    pieHole: 0.4,
                };

                var chart = new google.visualization.PieChart(document.getElementById('10_imports'));
                chart.draw(data, options);
            }
            $(window).resize(function(){
                drawChart();
            });
        </script> -->
        <!-- End of chart js -->

        <!-- Top 10 partners of country-->
        <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['', 'Percentage'],
                    ["Petroleum Oils And Mineral fuels ($8.66 billion) 15.6%",  15.6],
                    ["Motor cars and other motor vehicles ($2.94 billion)", 5.33],
                    ["Petroleum gases and hydrocarbons ($2.11 billion)", 3.82],
                    ["Pharmaceuticals and Medicaments ($1.55 billion)", 2.8],
                    ["Coal and solid fuels manufactured from coal ($1.17 billion)", 2.13],
                    ["Electrical appliances including telephones ($1.01 billion)",  1.83],
                    ["Iron and steel (952 million US$)", 1.72],
                    ["Insecticides, rodenticides, fungicides, and herbicides ($912 million)", 1.65],
                    ["Tractors ($792 million)", 1.43],
                    ['Electric generating sets and rotary converters ($688 million)', 1.24]
                ]);

                var options = {
                    width: 500,
                    legend: { position: 'none' },
                    chart: {
                        title: '',
                    },
                    axes: {
                        x: {
                        0: { side: 'top', label: ''} // Top x-axis.
                        }
                    },
                    bar: { groupWidth: "90%" }
                };

                var chart = new google.charts.Bar(document.getElementById('10_partners'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
            $(window).resize(function(){
                drawChart();
            });
        </script>
        <!-- End of chart js -->

        <script>
            $(window).on("throttledresize", function (event) {
                var options = {
                    width: '100%',
                    height: '100%'
                };

                var data = google.visualization.arrayToDataTable([]);
                drawChart(data, options);
            });
        </script>

        <!-- Flag JS -->
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active-1", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active-1";
            }
        </script>
        <!-- End Of Flag JS -->
    </body>
</html>
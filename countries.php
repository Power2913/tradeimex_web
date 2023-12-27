<!DOCTYPE html>
<html>
    <?php
        if(isset($_GET['id'])) {
            $id = $_GET['id']; //Country ID
        } 
        if(isset($_GET['$scid'])) {
            $continent_id = $_GET['$scid']; //Continent ID
        }
        if(isset($_GET['role'])) {
            $role = $_GET['role'];  //Import/Export
        }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="google-site-verification" content="kevV-HFG1JijHyuKnnkIeN6dY_Hb-ueXuqoUv-pPWUU" />
        <meta name="ahrefs-site-verification" content="167ef56daf7b5a6af88ecea027be9df8f7a528cfe6be55f3f794a32094b792f2">
        <meta name="keywords" content="Import Export Data, Export Import Data Provider, Business Intelligence Report, Import Export Trade Data, Best Market Research, Importers Exporters Data, Buyers List, List of Suppliers, Trade Data, Best Import Export Data" />
        <meta name="robots" content="index, follow" id="robots"/>
        <meta name="description" content="TradeImeX is a leading Import Export Trade Data Provider. We Cover 70+ Countries Import Export Trade Data online. Discover the Growth Trend." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
        <title>Country - Tradeimex</title>
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
    </head>
    <body>
        <?php include 'header.php';?>

        <!-- Breadcrumb & Import/Export Button -->
        <div class="container-fluid bg-bluish pdt-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-bluish">
                                <li class="breadcrumb-item">
                                    <a class="text-hover" href="index.php">Home</a>
                                </li>
                                <!-- Continent Name -->
                                <li class="breadcrumb-item" aria-current="page">
                                    <?php
                                        $cntnt_id = $continent_id;
                                        switch ($cntnt_id) {
                                            case "AS-24" :
                                                echo 
                                                '<a href="Continent.php?id='.$continent_id.'" class="text-hover">Asia Trade Data</a>';
                                            break;
                                            case "AF-24" :
                                                echo 
                                                '<a href="Continent.php?id='.$continent_id.'" class="text-hover">Africa Trade Data</a>';
                                            break;
                                            case "EU-34" :
                                                echo 
                                                '<a href="Continent.php?id='.$continent_id.'" class="text-hover"> Europe Trade Data</a>';
                                            break;
                                            case "NA-8" :
                                                echo 
                                                '<a href="Continent.php?id='.$continent_id.'" class="text-hover">North America Trade Data</a>';
                                            break;
                                            case "OC-3" :
                                                echo 
                                                '<a href="Continent.php?id='.$continent_id.'" class="text-hover">Oceania Trade Data</a>';
                                            break;
                                            case "SA-11" :
                                                echo 
                                                '<a href="Continent.php?id='.$continent_id.'" class="text-hover">South America Trade Data</a>';
                                            break;
                                            default:
                                                echo "Error 404 ";
                                        }
                                    ?>
                                </li>
                                
                                <!-- Country Name -->
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php
                                        $cntry_id = $id;
                                        switch ($cntry_id) { 
                                            case "TAS-1" :
                                                echo 
                                                'Bangladesh';
                                            break;
                                            default:
                                            echo "Error 404 ";
                                        }
                                    ?>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <!-- Import Export Button -->
                    <div class="col-sm-6 col-md-6 col-lg-6" style="display:flex;justify-content: end;">
                        <div class="btn btn-group">
                            <?php
                                $role_id = $role; //Here we are getting the role of page import/export for data differentiation
                                switch ($role_id) {
                                    case "import";
                                        echo 
                                        '<a href="countries.php?id='.$id.'&&$scid='.$continent_id.'&&role=import" class="btn btn-primary">
                                            Import
                                        </a>
                                        <a href="countries.php?id='.$id.'&&$scid='.$continent_id.'&&role=export" class="btn btn-outline">
                                            Export
                                        </a>';
                                    break;
                                    case "export";
                                        echo 
                                        '<a href="countries.php?id='.$id.'&&$scid='.$continent_id.'&&role=import" class="btn btn-outline">
                                            Import
                                        </a>
                                        <a href="countries.php?id='.$id.'&&$scid='.$continent_id.'&&role=export" class="btn btn-primary">
                                            Export
                                        </a>';
                                    break;
                                    default :
                                    echo 
                                    '<a href="countries.php?id='.$id.'&&$scid='.$continent_id.'&&role=import" class="btn btn-primary">
                                        Import
                                    </a>
                                    <a href="countries.php?id='.$id.'&&$scid='.$continent_id.'&&role=export" class="btn btn-outline">
                                        Export
                                    </a>';
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- overview of country -->
        <div class="container-fluid padding-tb bg-bluish slanted-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="text-content">
                            <span>Botswana Import</span>
                            <h1 class="gradient-h2" style="font-size: 48px;font-weight: 900;">
                                BOTSWANA IMPORT DATA
                            </h1>
                            <p>
                                Botswana, also known as the Republic of Botswana, is a country surrounded 
                                by land from all sides and situated in southern Africa. The country is 70% 
                                flat and shares its territory with the Kalahari Desert. Botswana shares its 
                                borders with South Africa, Namibia, and Zimbabwe. Botswana custom import data, 
                                derived from Botswana trade data reveals that imports of Botswana were worth 
                                USD 6.15 billion in 2020 which was more than the imports that were done in 2019
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="data-img">
                            <img src="assets/img/Botswana.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Points-->
        <div class="container-fluid padding-tb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card-content cdh-14">
                            <div class="icon">
                                <img src="assets/img/rank.jpg" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3>120+</h3>
                            </div>
                            <p>
                                RANK IN WORLD IMPORT
                                Reach more users with 40+ payment methods through 
                                a single integration. Easily manage payment methods 
                                from the Dashboard
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card-content cdh-14">
                            <div class="icon">
                                <img src="assets/img/share.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>  
                            <div class="head">
                                <h3>0.0.3%</h3>
                            </div>
                            <p>
                                SHARE IN WORLD IMPORT TRADE
                                Choose the Elements you need and match them to 
                                the look and feel of your site with CSS-level styling.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card-content cdh-14">
                            <div class="icon">
                                <img src="assets/img/canada.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3>Canada</h3>
                            </div>
                            <p>
                                BIGGEST IMPORT PARTNER
                                Save development time and eliminate user confusion with 
                                built-in accessibility, error messages, input masking, autofill, and more.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card-content cdh-14">
                            <div class="icon">
                                <img src="assets/img/diamond.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3>Diamond</h3>
                            </div>
                            <p>
                                MAJOR IMPORTS
                                Stripe’s platform meets industry certification standards 
                                to help reduce compliance burdens for your business.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Live Import Export -->
        <div class="container-fluid padding-tb bg-img">
            <div class="text-content text-center bg-color">
                <h2 style="font-size: 38px;">
                    Search Import Export Live Data
                </h2>
            </div>
            <div class="container">
                <div class="row bg-green" style="border-radius: 1rem;">
                    <div class="searchbox col-sm-2 col-md-2  col-lg-2">
                        <select class="form-control"  style="border: 0px transparent !important;">
                            <option class="form-control" value="">Select Country</option>
                            Asia 
                            <option class="form-control" value="">Bangladesh</option>
                            <option class="form-control" value="">China</option>
                            <option class="form-control" value="">Egypt</option>
                            <option class="form-control" value="">Indonesia</option>
                            <option class="form-control" value="">Iran</option>
                            <option class="form-control" value="">Iraq</option>
                            <option class="form-control" value="">Japan</option>
                            <option class="form-control" value="">Kazakhstan</option>
                            <option class="form-control" value="">Kuwait</option>
                            <option class="form-control" value="">Malaysia</option>
                            <option class="form-control" value="">Pakistan</option>
                            <option class="form-control" value="">Phillipines</option>
                            <option class="form-control" value="">Qatar</option>
                            <option class="form-control" value="">Saudi Arabia</option>
                            <option class="form-control" value="">Singapore</option>
                            <option class="form-control" value="">South Korea</option>
                            <option class="form-control" value="">Sri Lanka</option>
                            <option class="form-control" value="">Taiwan</option>
                            <option class="form-control" value="">Thailand</option>
                            <option class="form-control" value="">Turkey</option>
                            <option class="form-control" value="">UAE</option>
                            <option class="form-control" value="">Ukraine</option>
                            <option class="form-control" value="">Uzbekistan</option>
                            <option class="form-control" value="">Vietnam</option>
                            Africa
                            <option class="form-control" value="">Botswana</option>
                            <option class="form-control" value="">Cameroon</option>
                            <option class="form-control" value="">Central Africa</option>
                            <option class="form-control" value="">Chad</option>
                            <option class="form-control" value="">DR Congo</option>
                            <option class="form-control" value="">Ethiopia</option>
                            <option class="form-control" value="">Ghana</option>
                            <option class="form-control" value="">Ivory Coast</option>
                            <option class="form-control" value="">Kenya</option>
                            <option class="form-control" value="">Lesotho</option>
                            <option class="form-control" value="">Liberia</option>
                            <option class="form-control" value="">Malawi</option>
                            <option class="form-control" value="">Namibia</option>
                            <option class="form-control" value="">Niger</option>
                            <option class="form-control" value="">Nigeria</option>
                            <option class="form-control" value="">Sao Tome</option>
                            <option class="form-control" value="">Senegal</option>
                            <option class="form-control" value="">Sierra Leone</option>
                            <option class="form-control" value="">South Africa</option>
                            <option class="form-control" value="">Tanzamia</option>
                            <option class="form-control" value="">Togo</option>
                            <option class="form-control" value="">Uganda</option>
                            <option class="form-control" value="">Zambia</option>
                            <option class="form-control" value="">Zimbabwe</option>
                            America
                            <option class="form-control" value="">Canada</option>
                            <option class="form-control" value="">Costa Rica</option>
                            <option class="form-control" value="">El Salvador</option>
                            <option class="form-control" value="">Guatemala</option>
                            <option class="form-control" value="">Honduras</option>
                            <option class="form-control" value="">Mexico</option>
                            <option class="form-control" value="">Panama</option>
                            <option class="form-control" value="">US</option>
                            <option class="form-control" value="">Argentina</option>
                            <option class="form-control" value="">Bolivia</option>
                            <option class="form-control" value="">Brazil</option>
                            <option class="form-control" value="">Chile</option>
                            <option class="form-control" value="">Colombia</option>
                            <option class="form-control" value="">Ecuador</option>
                            <option class="form-control" value="">Guyana</option>
                            <option class="form-control" value="">Paraguay</option>
                            <option class="form-control" value="">Peru</option>
                            <option class="form-control" value="">Uruguay</option>
                            <option class="form-control" value="">Venezuela</option>
                            Europe
                            <option class="form-control" value="">Austria</option>
                            <option class="form-control" value="">Belgium</option>
                            <option class="form-control" value="">Bulgaria</option>
                            <option class="form-control" value="">Croatia</option>
                            <option class="form-control" value="">Cyprus</option>
                            <option class="form-control" value="">Czech</option>
                            <option class="form-control" value="">Denmark</option>
                            <option class="form-control" value="">Estonia</option>
                            <option class="form-control" value="">Finland</option>
                            <option class="form-control" value="">France</option>
                            <option class="form-control" value="">Germany</option>
                            <option class="form-control" value="">Greece</option>
                            <option class="form-control" value="">Hungary</option>
                            <option class="form-control" value="">Ireland</option>
                            <option class="form-control" value="">Italy</option>
                            <option class="form-control" value="">Kazakhstan</option>
                            <option class="form-control" value="">Kosovo</option>
                            <option class="form-control" value="">Latvia</option>
                            <option class="form-control" value="">Lithuania</option>
                            <option class="form-control" value="">Luxembourg</option>
                            <option class="form-control" value="">Malta</option>
                            <option class="form-control" value="">Moldova</option>
                            <option class="form-control" value="">Netherlands</option>
                            <option class="form-control" value="">Poland</option>
                            <option class="form-control" value="">Portugal</option>
                            <option class="form-control" value="">Russia</option>
                            <option class="form-control" value="">Romania</option>
                            <option class="form-control" value="">Slovenia</option>
                            <option class="form-control" value="">Spain</option>
                            <option class="form-control" value="">Sweden</option>
                            <option class="form-control" value="">Uk</option>
                            <option class="form-control" value="">Ukraine</option>
                            <option class="form-control" value="">Uzbekistan</option>
                            Oceania
                            <option class="form-control" value="">Australia</option>
                            <option class="form-control" value="">Fiji</option>
                            <option class="form-control" value="">New Zealand</option>
                        </select>
                    </div>
                    <div class="searchbox col-sm-2 col-md-2 col-lg-2">
                        <select class="form-control" style="border: 0px transparent !important;">
                            <option class="form-control" value="">Import</option>
                            <option class="form-control" value="">Export</option>
                        </select>
                    </div>
                    <div class="searchbox col-sm-3 col-md-3 col-lg-3">
                        <input type="text" placeholder="Description" class="form-control">
                    </div>
                    <div class="searchbox col-sm-2 col-md-2 col-lg-2">
                        <input type="text" placeholder="HS Code" class="form-control">
                    </div>
                    <div class="searchbox col-sm-3 col-md-3 col-lg-3">
                        <a class="ybtn ybtn-header-color" style="width: 100%;text-align: center;padding: 18px 0px 18px 0px;">
                            Search
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top 10 products of country -->
        <div class="container-fluid pdt-5 pdb-2">
            <div class="container">
                <div class="text-content">
                    <span>Use Case</span>
                    <h2>
                        Top 10 Imports Of
                        Botswana
                    </h2>
                    <p>
                        Use our suite of optimized and composable UIs to seamlessly collect 
                        payment details, customer addresses, offer mobile wallets, and more. 
                        Businesses using Stripe's Payment Element saw 10.5% more revenue on average.
                    </p>
                </div>
            </div>
            <div class="container pdt-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row">
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
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div id="10_imports" style="width: 650px; height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top 10 Imports Exports of country -->
        <div class="container-fluid pdt-2 pdb-5">
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
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                        <div id="10_partners" style="width: 600px; height: 350px;"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                        <li class="list">China (24.58%)</li>
                        <li class="list">India (14.85%)</li>
                        <li class="list">Singapore (5.47%)</li>
                        <li class="list">Indonesia (5.01%)</li>
                        <li class="list">The United Arab Emirates (3.23%)</li>
                        <li class="list">The United States of America (3.1%)</li>
                        <li class="list">Malaysia (4.24%)</li>
                        <li class="list">Japan (3.63%)</li>
                        <li class="list">Brazil (3.38%)</li>
                        <li class="list">Saudi Arabia (3.32%)</li>
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
                <div class="flex" style="justify-content: center;">
                    <img src="assets/img/BL Data.png" width="60%" style="border-radius: 12px;">
                </div>
            </div>
        </div>

        <!-- Benefits -->
        <div class="container-fluid padding-tb bg-bluish">
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
            <div class="container">
                <div class="text-content">
                    <li class="list">Building a conversion-optimized</li>
                    <li class="list">Building a conversion-optimized</li>
                    <li class="list">Building a conversion-optimized</li>
                    <li class="list">Building a conversion-optimized</li>
                    <li class="list">Building a conversion-optimized</li>
                    <li class="list">Building a conversion-optimized</li>
                    <li class="list">Building a conversion-optimized</li>
                    <li class="list">Building a conversion-optimized</li>
                </div>
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
                </div> -->
            </div>
        </div>

        <!-- Faqs -->
        <div class="container-fluid pdt-2 pdb-2 bg-bluish">
            <div class="container">
                <div class="text-content">
                    <h1>Frequently Asked Questions!!</h1>
                </div>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <b>What is an HSN Code?</b>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body" style="color: #425466;">
                                Introduced in the year 1988, Harmonized System of Nomenclature code, 
                                also known as HSN code is a small, 6-digit code that is given to each 
                                product to give it a unique identity. This code is important for both, 
                                B2B and B2C tax invoices for supplies of goods and services. HSN codes 
                                make GST filing easier and smooth.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <b>What is a Bill of Lading and what data does it contain?</b>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body" style="color: #425466;">
                                B/L Data, also known as Bill of Lading data, provides information
                                about shipping documents and mainly has insights about shipment
                                but pricing details are missing in this report. The main key points 
                                mentioned in B/L data include the date, shipper name, shipper address, 
                                sea shipments/sea frights, Commodity name, and many more such things.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <b>What does it mean with statistical Data?</b>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body" style="color: #425466;">
                                Statistical data helps you to study the market size of 
                                any country and then gives you insights into their imports 
                                and exports in a specified time. Information covered in 
                                statistical data mainly includes the consolidated value 
                                of product price in a specified time, quantity of product, 
                                name of the country, etc.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <b>What is a Bill of Lading and what data does it contain?</b>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body" style="color: #425466;">
                                B/L Data, also known as Bill of Lading data, provides information 
                                about shipping documents and mainly has insights about shipment 
                                but pricing details are missing in this report. The main key points 
                                mentioned in B/L data include the date, shipper name, shipper address, 
                                sea shipments/sea frights, Commodity name, and many more such things.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <b>What does it mean with statistical Data?</b>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body" style="color: #425466;">
                                Statistical data helps you to study the market size of 
                                any country and then gives you insights into their imports 
                                and exports in a specified time. Information covered in 
                                statistical data mainly includes the consolidated value 
                                of product price in a specified time, quantity of product, 
                                name of the country, etc.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reference Countries -->
        <div class="container-fluid bg-gradient-custom bg-bluish pdt-2 pdb-2">
            <div class="container">
                <div class="text-content text-center">
                    <h2 class="text-white">You might be intrested in other continents as well</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="searchbox">
                            <a class="ybtn ybtn-header-color" style="width: 100%;text-align: center;padding: 18px 0px 18px 0px;">
                                Asia Trade Data
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="searchbox">
                            <a class="ybtn ybtn-header-color" style="width: 100%;text-align: center;padding: 18px 0px 18px 0px;">
                                Africa Trade Data
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="searchbox">
                            <a class="ybtn ybtn-header-color" style="width: 100%;text-align: center;padding: 18px 0px 18px 0px;">
                                Oceania Trade Data
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="searchbox">
                            <a class="ybtn ybtn-header-color" style="width: 100%;text-align: center;padding: 18px 0px 18px 0px;">
                                Europe Trade Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php';?>
        <?php include 'script.php';?>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- Top 10 imports of country -->
        <script type="text/javascript">
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

                // Paul Irish’s Debounced resize plug-in
                $(window).smartresize(function () {
                    chart.draw(data, options);
                });
            }
        </script>
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
        </script>
        <!-- End of chart js -->
    </body>
</html>



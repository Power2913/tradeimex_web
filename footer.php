<footer class="text-center text-lg-start bg-bluish">
    <!-- Forms & Links -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-lg-3 col-xl-3 mx-auto mb-4" style="margin-top: 2.5rem;">
                <h5 class="text-uppercase mb-4 col-xs-12" style="font-weight: 600;">
                    Contact us
                </h5>
                <form action="backend/query_form.php" name="myform" method="POST" id="contact-form" onsubmit="return validateform()">
                    <div class="input-group mb-3">
                        <input name="name" autocomplete="off" required type="text" class="form-control" placeholder="Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">@</span>
                        <input name="email" autocomplete="off" required type="text" class="form-control" placeholder="Email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">+91</span>
                        <input name="number" autocomplete="off" maxlength="10" required type="text" class="form-control" placeholder="Mobile Number" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <input name="company" autocomplete="off" required type="text" class="form-control" placeholder="Company Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <select name="role" required class="form-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option>IMPORT</option>
                            <option>EXPORT</option>
                            <option>BOTH</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                    </div>
                    <div class="input-group">
                        <textarea name="message" required class="form-control" placeholder="Your Message" aria-label="With textarea" id= "txt" ></textarea>
                    </div>
                    <div class="btn col-md-12">
                        <button type="Submit" id="submit" class="btn btn-primary flex">
                            Submit 
                        </button>
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    </div>
                </form>
            </div>

            <div class="col-sm-6 col-xs-6 col-md-3 col-lg-3 col-xl-2 mx-auto mb-4 mobile-footer" style="margin-top: 2.5rem;text-align: start;">
                <h5 class="text-uppercase fw-bold mb-4" style="margin-bottom: 2rem;font-weight: 600;">
                    Company
                </h5>
                <p>
                    <a href="about-us.php" class="td-none text-uppercase text-hover">About Us</a>
                </p>
                <p>
                    <a href="why-choose-us.php" class="td-none text-uppercase text-hover">WHY CHOOSE US?</a>
                </p>
                <p>
                    <a href="products.php" class="td-none text-uppercase text-hover">PRODUCT & SERVICES</a>
                </p>
                <p>
                    <a href="careers.php" class="td-none text-uppercase text-hover">CAREERS</a>
                </p>
                <p>
                    <a href="partners.php" class="td-none text-uppercase text-hover">PARTNER</a>
                </p>
                <p>
                    <a href="our-clients.php" class="td-none text-uppercase text-hover">CLIENTS</a>
                </p>
                <p>
                    <a href="faqs.php" class="td-none text-uppercase text-hover">FAQS</a>
                </p>
                <p>
                    <a href="contact-us.php" class="td-none text-uppercase text-hover">Contact us</a>
                </p>
            </div>

            <div class="col-sm-6 col-xs-6 col-md-3 col-lg-3 col-xl-2 mx-auto mb-4 mobile-footer" style="margin-top: 2.5rem;text-align: start;">
                <h5 class="text-uppercase fw-bold mb-4" style="margin-bottom: 2rem;font-weight: 600;">
                    Our data
                </h5>
                <p>
                    <a href="global-trade-data.php" class="td-none text-uppercase text-hover">Global Trade Data</a>
                </p>
                <p>
                    <a href="continent.php" class="td-none text-uppercase text-hover">africa trade data</a>
                </p>
                <p>
                    <a href="continent.php" class="td-none text-uppercase text-hover">asia trade data</a>
                </p>
                <p>
                    <a href="continent.php" class="td-none text-uppercase text-hover">europe trade data</a>
                </p>
                <p>
                    <a href="continent.php" class="td-none text-uppercase text-hover">north america trade data</a>
                </p>
                <p>
                    <a href="continent.php" class="td-none text-uppercase text-hover">oceania trade data</a>
                </p>
                <p>
                    <a href="continent.php" class="td-none text-uppercase text-hover">south america trade data</a>
                </p>
                <p>
                    <a href="hs-code.php" class="td-none text-uppercase text-hover">HS CODE</a>
                </p>
            </div>

            <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3 col-xl-2 mx-auto mb-4 mobile-footer" style="margin-top: 2.5rem;text-align: start;">
                <h5 class="text-uppercase fw-bold mb-4" style="margin-bottom: 2rem;font-weight: 600;">Countries</h5>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">Turkey Export data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">Turkey Import data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">philippines Import data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">philippines Export data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">vietnam import data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">vietnam export data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">USA export data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">USA import data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">Russia import data</a>
                </p>
                <p>
                    <a href="countries.php" class="td-none text-uppercase text-hover">Russia export data</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Alert For Link Detection -->
    <div id="snackbar">
        <svg class="bi flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
            <style>svg{fill:#842029}</style>
            <path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
        </svg>
        <b>Link Detected!</b> Form cannot be submitted.
    </div>

    <!-- Social Media -->
    <div class="container">
        <div class="row flex">
            <div class="text-content text-center">
                <h5 style="font-weight: 600;text-align: center;">SOCIAL MEDIA</h5>
            </div>
            <div class="icon-container" style="text-align: center;">
                <a href="https://twitter.com/tradeimex" style="color: #55ACEE;" id="fp" >
                    <i class="fa-brands fa-twitter fa-2xl"></i>
                </a>
                <a href="https://www.facebook.com/tradeimex" style="color: #3B5998;" id="fp">
                    <i  class="fa-brands fa-facebook fa-2xl"></i>
                </a>    
                <a href="https://www.linkedin.com/company/tradeimex/?viewAsMember=true" style="color: #0077B5;" id="fp">
                    <i  class="fa-brands fa-linkedin fa-2xl"></i>
                </a>
                <a href="https://www.youtube.com/@tradeimex" style="color: red;" id="fp">  
                    <i  class="fa-brands fa-youtube fa-2xl"></i>
                </a>
                <a href="https://www.instagram.com/tradeimexinfo?igshid=OGQ5ZDc2ODk2ZA==" style="color: #bc2a8d;" id="fp">  
                    <i  class="fa-brands fa-instagram fa-2xl"></i>
                </a>
                <a href="https://pin.it/63T7r73" style="color: red;" id="fp">  
                    <i  class="fa-brands fa-pinterest fa-2xl"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright, Terms & Conditions -->
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xl-6 col-xs-12">
                <div style="text-align: center;padding: 20px 0px 0px 0px;">
                    <p style="font-size:14px;font-weight: 600;">
                        Please Read Our
                        <a class="text-hover" href="terms-of-use.php">Terms of use</a>,
                        <a class="text-hover" href="privacy-policy.php">Privacy Policy</a> &
                        <a class="text-hover" href="disclaimer.php">Disclaimer</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-6 col-xs-12">
                <div style="text-align: center;padding: 20px 0px 0px 0px;">
                    <p style="font-size:14px">
                        <b>© 2018-2024 by TradeImeX® India. All Rights are Reserved</b>
                    </p>
                </div> 
            </div>
        </div>  
    </div>
</footer>
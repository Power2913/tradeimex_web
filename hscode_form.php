<!DOCTYPE html>
<html>
    <head>
        <title>HS Codes</title>
        <?php include 'link.php'; ?>
    </head>
    <body>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4" style="margin-top: 2.5rem;">
                    <h5 class="text-uppercase mb-4 col-xs-12" style="font-weight: 600;">
                        HS Code Details
                    </h5>
                    <form action="backend/hs_code.php" name="myform" method="POST" id="contact-form" onsubmit="return validateform()">
                        <div class="input-group mb-3">
                            <input name="section_name" autocomplete="off" required type="text" class="form-control" placeholder="Section Name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="chapter_no" autocomplete="off" required type="text" class="form-control" placeholder="Chapter Number">
                        </div>
                        <div class="input-group mb-3">
                            <input name="chapter_name" autocomplete="off" required type="text" class="form-control" placeholder="Chapter Name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="code_value" autocomplete="off" required type="text" class="form-control" placeholder="Code Value">
                        </div>
                        <div class="input-group mb-3">
                            <input name="code_name" autocomplete="off"  required type="text" class="form-control" placeholder="Code Name">
                        </div>
                        <div class="btn col-md-12">
                            <button type="Submit" id="submit" class="btn btn-primary flex">
                                Submit 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
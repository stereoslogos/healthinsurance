<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12  mt-3">
            <?php echo Flasher::flash(); ?>
        </div>
        <div class="col-12 py-3">
            <h1 style="text-transform:uppercase; color: #4169E1; font-family: 'Montserrat'; font-weight: bold; font-size:54px" class="mb-3 float-end"><?php echo 'Find the best health coverage plan'; ?></h1>
            <!-- <a href="home" class="btn btn-warning float-end">Go back</a> -->
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="mb-3">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/medical-insurance-3600266-3057481.png" alt="">
                <div class='card'>
                </div>
                
                
            </div>
        </div>
        <div class="col-lg-7">
            <div class="header"><i style='font-size:14px;color:blue' class='fas'>&#xf2bb;</i> <ins><b>Answer 5 simple questions to get started</b></ins></div>
            <br>
            
            <div class='card'>
                    <div class='card-header'>Qualify here</div>
                    <div class='card-body'>
                        <form id='report_error' method='post' action='support/report_error'>
                            <?php echo insert_inputs(); ?>
                            <div class='form-group row'>
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='email_e'>Full name</label>
                                    <input id='email_e' type='text' class='form-control mb-3' name='email_e' placeholder='Jane Doe' required>
                                </div>
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='user_e'>Phone Number</label>
                                    <input id='user_e' type='number' class='form-control mb-3' name='user_e' placeholder='+1(786)1234' required>
                                </div>
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='email_e'>How many dependents do you have?</label>
                                    <input id='email_e' type='number' class='form-control mb-3' name='email_e' placeholder='2' required>
                                </div>
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='user_e'>Monthly Income:</label>
                                    <br>
                                    <input type="radio" name="US Resident" id="" value="US Resident">
                                    <label for="us-r">0 - 50 USD</label>
                                    <input type="radio" name="US Resident" id="" value="US Resident">
                                    <label for="us-r">50 - 100 USD</label>
                                    <input type="radio" name="US Resident" id="" value="US Resident">
                                    <label for="us-r">+100 USD</label>
                                </div>
                                <div class='col-xl-12 col-12 mb-3'>
                                    <label for="us-roc">US Resident or Citizen:          </label>
                                    <select name="roc" id="cars">
                                        <option value="resident">US Resident</option>
                                        <option value="citizen">US Citizen</option>
                                    </select>
                                </div>
                                <br>
                                <button class='btn btn-success' type='submit'>Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            <br>
            <!-- <blockquote class="text">
                After filling out the form and sending the report you will receive an email to your inbox describing further steps.
            </blockquote> -->
        </div>
    </div>
</div>
        </div>
    </div>
</div>
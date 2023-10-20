<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_navsup.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12  mt-3">
            <?php echo Flasher::flash(); ?>
        </div>
        <div class="col-12 py-3">
            <h1 class="mb-3 float-start text-light"><?php echo 'Need support?'; ?></h1>
            <a href="home" class="btn btn-warning float-end">Go back</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="mb-3">
                <div class="header text-light"><i style='font-size:14px;color:yellow' class='fas'>&#xf234;</i> <ins><b>New user</b></ins></div>
                <blockquote class="text-white">
                    Request access to <b>Sybel Management Solutions</b>.
                </blockquote>
                
                <div class='card'>
                    <div class='card-header'>New user</div>
                    <div class='card-body'>
                        <form id='form_user' method='post' action='support/post_add'>
                            <?php echo insert_inputs(); ?>
                            <div class='form-group row'>
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='name'>Full name</label>
                                    <input id='name' type='text' class='form-control' name='name' placeholder='Susan Doe' required>
                                </div>
                                
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='username'>Username</label>
                                    <input id='username' type='text' class='form-control' name='username' placeholder='susdoe' required>
                                </div>
                            </div>
                            <div class='form-group row mb-3'>
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='password'>Password</label>
                                    <input id='password' type='password' class='form-control' name='password' placeholder='*********' required>
                                </div>
                                
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='email'>E-mail</label>
                                    <input id='email' type='email' class='form-control' name='email' placeholder='susan@mail.com' required>
                                </div>
                            </div>
                            
                            <button class='btn btn-success' type='submit'>Request</button>
                        </form>
                    </div>
                </div>
                <br>
                <blockquote class="text-white">
                    After filling out the form and sending the request you will receive an email to your inbox describing further steps.
                </blockquote>
                <h5 class='text-danger'>
                    <ins><b>We utterly require you to check your spam email folder in case you do not receive the email to your inbox within an hour</b></ins>.
                </h5>
                <hr style='color:white;'>
                <div class="header text-light"><i style='font-size:14px;color:yellow' class='fas'>&#xf502;</i> <ins><b>Locked user</b></ins></div>
                <blockquote class="text-danger">
                    Request to unlock your existing user.
                </blockquote>
                <small class="text-danger">- coming soon</small>
                <hr style='color:white;'>
            </div>
        <hr>
        </div>
        <div class="col-lg-8">
            <div class="header text-light"><i style='font-size:14px;color:yellow' class='fas'>&#xf2bb;</i> <ins><b>Report an issue</b></ins></div>
            <blockquote class="text-white">
                For existing users with access. Describe the issue you are experiencing. Please, be as specific as possible and include any number, code or error you might have.
            </blockquote>
            
            <div class='card'>
                    <div class='card-header'>Report an issue</div>
                    <div class='card-body'>
                        <form id='report_error' method='post' action='support/report_error'>
                            <?php echo insert_inputs(); ?>
                            <div class='form-group row'>
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='email_e'>Email associated</label>
                                    <input id='email_e' type='email' class='form-control mb-3' name='email_e' placeholder='me@mail.com' required>
                                </div>
                                <div class='col-xl-6 col-12 mb-3'>
                                    <label for='user_e'>Username</label>
                                    <input id='user_e' type='text' class='form-control mb-3' name='user_e' placeholder='susdoe' required>
                                </div>
                                <div class='col-xl-12 col-12 mb-3'>
                                <textarea id='report' name='report' class='form-control' style='box-sizing: border-box;padding: 12px 20px;' rows='3'></textarea>
                                </div>
                            </div>
                            <button class='btn btn-warning' type='submit'>Report</button>
                        </form>
                    </div>
                </div>
            <br>
            <blockquote class="text-white">
                After filling out the form and sending the report you will receive an email to your inbox describing further steps.
            </blockquote>
            <h5 class='text-danger'>
                <ins><b>We utterly require you to check your spam email folder in case you do not receive the email to your inbox within an hour</b></ins>.
            </h5>
            
        </div>
    </div>
</div>

<?php require_once INCLUDES.'inc_footer.php'; ?>
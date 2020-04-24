    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css?d='); echo time(); ?>" />
    <style>
      /* .flex, .flex > div[class*='col-'] {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex:1 0 auto;
      }

      .panel {
       display: flex;
       flex-direction:column;
       align-content:stretch;
      }

      .panel-body {
       display: flex;
       flex-grow:1;
      } */
      #boxformlogin {
        background: rgba(37, 36, 36, 0.8);
        mix-blend-mode: normal;
        text-align: center;
        height:100%;
      }
      #formlogin{
        color:white;
        padding-top:200px;
        padding-left:20%;
        padding-right:20%;
      }
      #loginbg{
        background-image: url('assets/images/loginbg.jpg');
        background-size: 100% ;
        height:100%;
        filter: contrast(90%) brightness(110%);
      }
      /* footer */
      h5{
        font-size: 13px;
      }

    </style>
    <title><?= $title ?></title>
	</head>

	<body>
    <div id="loginbg" class="row">
        <div class="col-8"></div>
        <div class="col-4 " id="boxformlogin">
            <form id="formlogin" action="<?= base_url('auth'); ?>" method="post">
                <h2>Login</h2>
                <?php if (isset($_SESSION['error_message'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['error_message'] ?>
                    </div>
                <?php } ?>
                <?= $this->session->flashdata('message'); ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= set_value('username'); ?>" required>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <button type="submit" class="btn btn-primary button1">Login</button>
                <br></br>
                <p>Don't have an account? <a href="<?= site_url('auth/register') ?>">Register here</a></p>
            </form>
        </div>
    </div>


	</body>



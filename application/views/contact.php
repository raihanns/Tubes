<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
    body {
        background-image: url("https://media.winnipegfreepress.com/images/NEP7110820.jpg");
    }

    .contact {
        width: 60%;
    }

    .container {
        border-radius: 100px;
    }
</style>
<form class="contact">
    <div class="jumbotron jumbotron-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1>Contact us </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <!------------------------------------------ NAME -------------------------------------------->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" required="required" />
                                </div>
                                <!-------------------------------------------- EMAIL --------------------------------------------->
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                        <input type="email" class="form-control" id="email" placeholder="Email" required="required" /></div>
                                </div>
                                <!----------------------------------------------SUBJECT------------------------------------ -->
                                <div class="form-group">
                                    <label for="email">Nomor Handphone</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" id="nohp" placeholder="No Hp" required="required" /></div>
                                </div>
                                <!----------------------------------------MESSAGE----------------------------------------------- -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</form>
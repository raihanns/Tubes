<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg">


            <?php $i = 1; ?>
            <?php foreach ($news as $n) :  ?>
                <!-- Title -->
                <h1 class="mt-4"><?= $n['judul']; ?></h1>
                <p class="lead">
                    by
                    <a href="#">Admin</a>
                </p>
                <h4><?= $n['isi']; ?></h4>
                <hr>
                <?php $i++; ?>
            <?php endforeach; ?>


        </div>


    </div>
    <!-- /.row -->

</div>
<!-- /.container -->


</body>

</html>
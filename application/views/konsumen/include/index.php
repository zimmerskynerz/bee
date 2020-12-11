<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('konsumen/include/head') ?>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php $this->load->view('konsumen/include/nav_bar') ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <?php $this->load->view('konsumen/include/top_bar') ?>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <?php $this->load->view('konsumen/' . $folder . '/' . $halaman . '') ?>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->
    <?php $this->load->view('konsumen/include/footer.php') ?>
</body>

</html>
<?php require ('inc/header.php'); ?>



    <!-- wrappage begin here -->
    <div id="wrappage">
        <!-- container begin here -->

        <div class="container">
            
            <!-- top block begin here -->
            <?php require ('module/awal.php'); ?>
            <!-- top block end here -->


            <!-- center block begin here -->

            <div class="center-block">

                <!-- scanner begin here -->
                <?php require ('module/scan.php'); ?>
                <!-- scanner end here -->

                <!-- main begin here -->
                <div class="main">
                    <div class="load">
                    </div>
                    <div class="shut-left">

                    </div>
                    <div class="shut-right">

                    </div>
                    <div class="page">
                        <!-- foto / social block begin here -->
                        <div class="box-left left">

                            <?php require ('module/foto.php'); ?>
                            <!-- foto / social block end here -->
                            
                            <!-- menu begin here -->
                            <?php require ('module/menu.php'); ?>
                            
                        </div>
                        <!-- menu end here -->

                        <!-- page block begin here -->
                        <div class="cont left">
                            <!-- page about begin here -->
                            <?php require ('module/about.php'); ?>
                            <!-- page about end here -->

                            <!-- page portofolio begin here -->
                            <div id="newpage" class="box left">
                                <?php require ('module/portofolio.php'); ?>
                            </div>
                            <!-- page portofolio end here -->

                            <!-- page skill begin here -->
                            <div id="resume" class="box left">
                                <?php require ('module/skill.php'); ?>
                            </div>
                            <!-- page skill end here -->

                            <!-- page portfolio begin here -->
                            <div id="portfolio" class="box left">
                                <div class="box-content">


                                </div>
                            </div>
                            <!-- page portfolio end here -->

                            <!-- page contact begin here -->

                            <div id="contact" class="box left">
                                <?php require ('module/contact.php'); ?>
                            </div>
                            <!-- page contact end here -->

                        </div>
                        <!-- page block end here -->
                    </div>
                </div>
                <!-- main end here -->

            </div>

            <!-- center block end here -->


<audio autoplay hidden>
  <source src="http://www.gitalestarifm.com/mp3/matrix.mp3">
Your browser does not support the audio element.
</audio>


<!-- We will put our React component inside this div. -->
<div id="like_button_container"></div>

<!-- Load React. -->
<!-- Note: when deploying, replace "development.js" with "production.min.js". -->
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

<!-- Load our React component. -->
<script src="js/react.js"></script>

<?php require ('inc/footer.php'); ?>
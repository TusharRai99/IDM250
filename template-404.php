<?php
/* Template Name: Portfolio-Listing*/
?>

<?php get_header(); ?>


<h2>This is the default templeate</h2>

<?php while (have_posts()) : the_post(); ?>
  <div class="" style="max-width: 1920px; margin: 0 auto;">
    <h1 class=""><?php the_title(); ?>
    </h1>

    <div class="">
      <!-- start content -->

      </section>



















      <!---------- Facilities ---------->

      <section id="whyus" class="facility">
        <!-- <h1>My Work</h1> -->
        <!-- ROW 1   -->
        <h1 id="work">All Work</h1>
        <div class="row">

          <a href="blufit.html">
            <div class="facility-col hvrbox">
              <img src="images/headspace.png" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top">
                <div class="hvrbox-text">
                  <h3>BluFit App</h3>
                  <div class="details">
                    <!-- <h4>figma</h4>
                                    <h4>adobe suite</h4> -->
                  </div>

                </div>

              </div>
            </div>
          </a>


          <a href="mindscape.html">
            <div class="facility-col hvrbox">
              <img src="images/headspace.png" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top">
                <div class="hvrbox-text">

                  <h3>Developing MicroInteractions</h3>
                  <div class="details">
                    <!-- <h4>figma</h4>
                                    <h4>adobe suite</h4> -->
                  </div>


                </div>

              </div>
            </div>
          </a>














          <a href="washingtonpostcase.html">
            <div class="facility-col hvrbox">
              <img src="images/headspace.png" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top">
                <div class="hvrbox-text">

                  <h3>Washington Post</h3>
                  <div class="details">
                    <!-- <h4>figma</h4>
                                <h4>adobe suite</h4> -->
                  </div>



                </div>

              </div>
            </div>
          </a>
        </div>

        <!-- ROW 2 -->

        <div class="marg">

        </div>

        <div class="row">


          <a href="portalredesign.html">
            <div id="random" class="facility-col hvrbox">
              <img src="images/headspace.png" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top">
                <div class="hvrbox-text">

                  <h3>Drexel University's Payment Portal</h3>
                  <div class="details">
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ab quod cum fugit minima impedit omnis doloremque, quis cupiditate consequatur quisquam hic. Asperiores aspernatur officia esse explicabo culpa, dignissimos aut.</p>
                                <h4>figma</h4>
                                <h4>adobe suite</h4> -->
                  </div>
                </div>
              </div>

            </div>
          </a>





          <a href="wesgold.html">
            <div class="facility-col hvrbox">
              <img src="images/headspace.png" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top">
                <div class="hvrbox-text">

                  <h3>WesGold Fellows</h3>
                  <div class="details">
                    <!-- <h4>figma</h4>
                                <h4>adobe suite</h4> -->
                  </div>


                </div>

              </div>
            </div>
          </a>




          <a href="kamis.html">
            <div class="facility-col hvrbox">
              <img src="images/headspace.png" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top">
                <div class="hvrbox-text">
                  <h3>Kami's Cleaning Service</h3>
                  <div class="details">
                    <!-- <h4>figma</h4>
                                <h4>adobe suite</h4> -->
                  </div>


                </div>

              </div>
            </div>
          </a>








        </div>

        <!-- 

ROW 3 -->


        <div class="row">






          <a href="recycledelphia.html">
            <div class="facility-col hvrbox">
              <img src="images/headspace.png" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top">
                <div class="hvrbox-text">

                  <h3>RecycleDelphia</h3>
                  <div class="details">

                  </div>





                  <div class="facility-col hvrbox">
                    <img src="images/headspace.png" class="hvrbox-layer_bottom">
                    <div class="hvrbox-layer_top">
                      <div class="hvrbox-text">

                        <h3>Coming Soon!</h3>
                        <div class="details">

                        </div>



                      </div>

                    </div>
                  </div>


                </div>






      </section>










      <?php the_content(); ?>
      <!-- end content -->
    </div>
  </div>
<?php endwhile; ?>

<?php get_footer();

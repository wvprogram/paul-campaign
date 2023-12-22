<?php include('includes/stdHeaderStart.php'); ?>
<?php include('includes/pages/stdHeaderHomeEnd.php'); ?>


<main class="home">
    <div class="bg-image">
        <div class="container">
            <section class="home-content">
                <!-- Need Image here -->
                <div class="logo-content">
                    <img src="images/pages/home/logo.png" alt="Paul Yang Logo">
                    <div class="logo-information">
                        <h1>Paul Yang</h1>
                        <p>Minnesota Supreme Court</p>
                    </div> 
                </div>

                <div class="form-container">
                    <h1>Join Our Campaign</h1>
                    <?php include('includes/forms/campaign.html'); ?>
                </div>
            </section>
        </div>
    </div>
    <div>
        <section class="home-banner">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="images/pages/home/vote-banner.jpg">
                </div>

                <div class="mySlides fade">
                    <img src="images/pages/home/vote-banner-v1.jpg">
                </div>

                <div class="mySlides fade">
                    <img src="images/pages/home/vote-banner-v2.jpg">
                </div>

                <!-- Next and previous buttons -->
                <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
            </div>
        </section>
    </div>
    <div class="container">
        <section class="home-information">
            <div class="about">
                <h2>About Me</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ipsum laborum voluptatem dolorum dolorem dolores minima consequuntur maiores? Distinctio temporibus ad voluptate numquam harum natus aperiam quam porro praesentium ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis repellat assumenda itaque, sint eligendi adipisci iusto incidunt nihil velit nulla inventore sunt repudiandae quo voluptatibus iste omnis maxime corrupti ipsa!</p>
                <div class="img-container">
                    <img src="images/pages/home/image-1.jpg" alt="Paul Yang image 1">
                </div>
            </div>
            <div class="why">
                <h2>Why Me</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo similique impedit vel perferendis tenetur quidem voluptates! Quae animi officia et autem, dolores culpa quod voluptatum laboriosam eius? Praesentium, adipisci ex? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem doloremque commodi nulla vero obcaecati quis fuga libero, eligendi enim quae molestiae iure? Ipsam explicabo, reiciendis distinctio dolore exercitationem quis quod!</p>
                <div class="img-container">
                    <img src="images/pages/home/image-2.jpg" alt="Paul Yang image 2">
                </div>
            </div>
        </section>
    </div>
</main>


<?php include('includes/stdFooter.php'); ?>
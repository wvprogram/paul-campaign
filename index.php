<?php include('content/stdHeaderStart.php'); ?>
<?php include('content/pages/stdHeaderHomeEnd.php'); ?>

<main class="home">
    <div class="container">
        <section class="home-content">
            <!-- Need Image here -->
            <div class="logo-content">
                <img src="../images/pages/home/logo.png" alt="Paul Yang Logo">
                <div class="logo-information">
                    <h1>Paul Yang</h1>
                    <p>Minnesota Supreme Court</p>
                </div> 
            </div>

            <div class="form-container">
                <h1>Join Our Campaign</h1>
                <form id="join-campaign" action="#">
                    <ul>
                        <li id="formFname">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname">
                            <!-- <small class="error">First Name is required</small> -->
                        </li>
                        <li id="formLname">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname">
                            <!-- <small class="error">Last Name is required</small> -->
                        </li>
                        <li id="formZip">
                            <label for="zip">Zip Code</label>
                            <input type="text" id="zip" name="zip">
                            <!-- <small class="error">Zip Code is required</small> -->
                        </li>
                        <li id="formEmail">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                            <!-- <small class="error">Email is required</small> -->
                        </li>
                    </ul>
                    <input class="submitButton" type="submit" value="Submit" />
                </form>
            </div>
        </section>
    </div>
    <div>
        <section class="home-banner">
            <div>
                <img src="images/pages/home/vote-banner.jpg" alt="Vote Banner">
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

<?php include('content/stdFooter.php'); ?>
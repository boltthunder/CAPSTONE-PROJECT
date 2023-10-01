<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-12 py-3">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-12 text-center">
                <?php
                $user_id = $_SESSION['user_id'];
                $user_info = new fetch();
                $result = $user_info->checkInfo($user_id);

                if($result){
                    $row = $result->fetch();
                    ?>
                    <img class="border bg-secondary" src="../upload/<?=$row['acc_profile']?>" alt="" width="120" height="150"><br>
                    <a href="profile.php" class="fs-6">Update Profile</a>
                </div>
                <div class="col-xl-8 col-lg-8 col-12  d-flex">
                    <div class="align-items-center">
                        <label for="">Name: <?=$row['acc_fname']?> <?=$row['acc_mname']?> <?=$row['acc_lname']?></label><br>
                        <label for="">Adress: <?=$row['acc_address']?></label><br>
                        <label for="">Email: <?=$row['acc_email']?></label><br>
                        <label for="">UserName: <?=$row['acc_uname']?></label><br>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="logout.php" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>


<div style="background-color:#F9EBE2">
    <div class="container py-5">

    <div class="row py-5 text-center">

        <div class="col-xl- col-lg-4 col-md-4 col-sm-4 col-xsml-12">
        
                <p>2901 E Madison St. Seattle, WA 98112<br>206.325.9100</p>
                <a href="">info@cafeflora.com</a>
        
            <div class="py-4 mx-auto">
                <a href="" class="mx-1"><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href="" class="mx-1"><i class="fa-brands fa-facebook-f fa-xl"></i></a>
                <a href="" class="mx-1"><i class="fa-brands fa-twitter fa-xl"></i></a>
            </div>
        </div>

        <div class="col-xl- col-lg-4 col-md-4 col-sm-4 col-xsml-12">
            <p>SeaTac Airport, Concourse A<br>206.731.7533</p>
                    <a href="">info@floretseattle.com</a>
            
                <div class="py-4 mx-auto">
                    <a href="" class="mx-1"><i class="fa-brands fa-instagram fa-xl"></i></a>
                    <a href="" class="mx-1"><i class="fa-brands fa-facebook-f fa-xl"></i></a>
                    <a href="" class="mx-1"><i class="fa-brands fa-twitter fa-xl"></i></a>
                </div>
        </div>

        <div class="col-xl- col-lg-4 col-md-4 col-sm-4 col-xsml-12">
            <p>1511 S. Lucile St. Seattle, WA 98108<br>206.762.0418</p>
                    <a href="">206.762.0418</a>
            
                <div class="py-4 mx-auto">
                    <a href="" class="mx-1"><i class="fa-brands fa-instagram fa-xl"></i></a>
                    <a href="" class="mx-1"><i class="fa-brands fa-facebook-f fa-xl"></i></a>
                    <a href="" class="mx-1"><i class="fa-brands fa-twitter fa-xl"></i></a>
                </div>
        </div>

    </div>


    <div class="row d-flex justify-content-center">

        <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6 col-xsm-12 py-5">
                <h5 class="text-center">Sign-up for our E-Newsletter:</h5><br>
                <form action="" class="d-flex">
                    <input class="form-control me-2" type="email" placeholder="Enter Your Email Adress" aria-label="Search">
                    <div><button class="btn btn-outline-primary" type="submit">SIGNUP</button></div>
                </form>
        </div>
        

    </div>

    <div class="row d-flex justify-content-center">

        <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6 col-xsm-12 py-5 mx-auto d-flex justify-content-center">
                <p>© Cafe Flora</p> <div class="mx-2">|</div> <a href="">Terms & Privacy </a><div class="mx-2">|</div> <a href="about.php">About Us </a><div class="mx-2">|</div> <a href="">Contact Us </a>
        </div>


    </div>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  </body>
  </html>



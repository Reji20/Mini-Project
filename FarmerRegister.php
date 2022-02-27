<?php
include './Header.php';
?>
<!-- //inner banner -->

<!-- contact section -->
<section class="w3l-contact-11 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
        <h3 class="title-style text-center mb-lg-5 mb-4">Farmer <span>Sign Up</span></h3>
        <div class="form-inner-cont mx-auto" style="max-width:800px">
            <form method="post" class="signin-form" enctype="multipart/form-data">
                <div class="row align-form-map">
                    <div class="col-sm-6 form-input">
                        <input type="text" name="name" id="w3lName" placeholder="Name" />
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="text" name="farm" id="w3lSender" placeholder="Farm" required="" />
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="text" name="regno" placeholder="Society Number" class="contact-input">
                    </div>
                    <div class="col-sm-6 form-input">
                        <div class="custom-select1" style="margin-bottom: 20px">
                            <select name="district">
                                <option>Select A Location</option>

                                <?php
                                include './Dbconnetion.php';
                                $qry1 = "SELECT * FROM `location`";
                                $res1 = mysqli_query($con, $qry1);
                                while ($row1 = mysqli_fetch_array($res1)) {
                                    echo "<option value='" . $row1['location'] . "'>" . $row1['location'] . "</option>";
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="text" name="contact" placeholder="Contact" class="contact-input" pattern="[6789][0-9]{9}" maxlength="10">
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="email" name="email" placeholder="Email id" class="contact-input">
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="password" name="psw" placeholder="Password" class="contact-input">
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="password" name="cpsw" placeholder="Confirm Password" class="contact-input">
                    </div>
                    <div class="col-sm-6 form-input">
                        <p>&nbsp;&nbsp;&nbsp;Upload Your Id Proof</p>
                        <input type="file" name="proof" placeholder="Upload The Id Proof" class="contact-input">
                    </div>
                    <div class="col-sm-6 form-input">
                        <p>&nbsp;&nbsp;&nbsp;Upload Your Pic</p>
                        <input type="file" name="img" placeholder="Upload The Profile Pic" class="contact-input">
                    </div>
                </div>
                <div class="form-input">
                    <textarea placeholder="Address" name="address" id="w3lMessage" required=""></textarea>
                </div>
                <div class="submit text-right">
                    <button type="submit" class="btn btn-style" name="submit">Submit
                    </button>
                </div>
            </form>
            <?php
            include './Dbconnetion.php';
            if (isset($_POST['submit'])) {
                //                            
                $name = $_POST['name'];
                $address = $_POST['address'];
                $farm = $_POST['farm'];
                $regno = $_POST['regno'];
                $district = $_POST['district'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $psw = $_POST['psw'];
                $cpsw = $_POST['cpsw'];
                if ($psw == $cpsw) {

                    $folder = 'images/';
                    $file = $folder . basename($_FILES['proof']['name']);
                    move_uploaded_file($_FILES['proof']['tmp_name'], $file);
                    $folder = 'images/';
                    $file = $folder . basename($_FILES['proof']['name']);


                    $folder1 = 'images/';
                    $file1 = $folder1 . basename($_FILES['img']['name']);
                    move_uploaded_file($_FILES['img']['tmp_name'], $file1);
                    $folder1 = 'images/';
                    $file1 = $folder1 . basename($_FILES['img']['name']);

                    $sel = "SELECT COUNT(*) AS COUNT FROM `farmer` WHERE `contact`='$contact' OR `email`='$email'";
                    $res = mysqli_query($con, $sel);
                    $fetch = mysqli_fetch_array($res);
                    if ($fetch['COUNT'] > 0) {
                        echo '<script>alert("Already Registered")</script>';
                    } else {
                        $qry = "INSERT INTO `farmer`(`name`,`address`,`farm`,`regno`,`location`,`contact`,`email`,`proof`,`img`)VALUES('$name','$address','$farm','$regno','$district','$contact','$email','$file','$file1')";
                        $exe = mysqli_query($con, $qry);
                        if ($exe) {
                            $qry2 = "INSERT INTO `login`(`uid`,`uname`,`psw`,`type`)VALUES((SELECT MAX(`uid`) FROM `farmer`),'$email','$psw','Farmer')";
                            $exe2 = mysqli_query($con, $qry2);
                            $qryAllo = "INSERT INTO `farmeralloc`(`fid`) VALUE ((SELECT MAX(`uid`) FROM `farmer`))";
                            $exeAllo = mysqli_query($con, $qryAllo);
                            echo '<script>alert("Successfull!!!")</script>';
                        } else {
                            echo '<script>alert("Failed to Register")</script>';
                        }
                    }
                } else {
                    echo '<script>alert("Pleae Check the Password")</script>';
                }
            }
            ?>


        </div>
    </div>
</section>

<?php
include './Footer.php';
?>
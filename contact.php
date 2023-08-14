<?php include('include/header_contact.php'); ?>
<!-- bootstrap 5 cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

                <!-- Javascript Form Validation -->
    <script>
        function contactVal() {
            // name validation
            if (document.getElementById("name").value == "") {
                document.getElementById("name").style.border = "1px solid red";
                document.getElementById("name_error").style.color = "#f00";
                document.getElementById("name").focus();
                document.getElementById("name_error").innerHTML = "Please Enter Name";
                return false;
            }

            // Email Validation
            if (document.getElementById('email').value == "") {
                document.getElementById('email').style.border = "1px solid red";
                document.getElementById('email_error').style.color = "#f00";
                document.getElementById('email').focus();
                document.getElementById('email_error').innerHTML = "Email is required";
                return false;
            } else {
                var email = document.getElementById('email').value;
                var epattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if (!pat.test(email)) {
                    document.getElementById('email').style.border = "1px solid red";
                    document.getElementById('email_error').style.color = "#f00";
                    document.getElementById('email').focus();
                    document.getElementById('email_error').innerHTML = "Please enter a valid Email";
                    return false;
                }

            }
            // Mobile validation
            if (document.getElementById("phone").value == "") {
                document.getElementById("phone").style.border = "1px solid red";
                document.getElementById("phone_error").style.color = "#f00";
                document.getElementById("phone").focus();
                document.getElementById("phone_error").innerHTML = "Please Enter Mobile No.";
                return false;
            } else {
                var mobile = document.getElementById("mobile").value;
                var mpattern = /^\d{10}$/;
                if (!mpattern.test(mobile)) {
                    document.getElementById("phone").style.border = "1px solid red";
                    document.getElementById("phone_error").style.color = "#f00";
                    document.getElementById("phone").focus();
                    document.getElementById("phone_error").innerHTML = "Please Enter Valid 10 Digit Mobile No.";
                    return false;

                }
            }
           

            // dropdown Validation 
            if (document.getElementById("product").value == "") {
                document.getElementById("product").style.border = "1px solid red";
                document.getElementById("product_error").style.color = "#f00";
                document.getElementById("product").focus();
                document.getElementById("product_error").innerHTML = "Please Select Anyone";
                return false;
            }

            // Message Box Validation
            if (document.getElementsById("message").value == "") {
                document.getElementById("message").style.border = "1px solid red";
                document.getElementById("message_error").style.color = "#f00";
                document.getElementById("message").focus();
                document.getElementById("message_error").innerHTML = "Please enter some work details here";
                return false;
            }

        }

        function checkValue(ele) {
            if (ele.value != "") {
                ele.style.border = "1px solid #999";
                document.getElementById(ele.id + "_error").innerHTML = "";
            }
        }
    </script>
    <!-- End javascript Form Validation -->



<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(assets/images/page_banner.jpg)">
<h3 style="color: #0da848; padding-right: 228px; padding-bottom: 19px;" class="text-center">Domestic Water Purifiers<br> on Rental Based</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content">
                <!-- <h4 style="color: #e72322;">DOMESTIC WATER PURIFIER</h4> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== MAP PART START ======-->

<section>
    <div class="contact-map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121772.72291845911!2d78.25834259726561!3d17.488523999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9146ffb43683%3A0xf4ea7e752f999917!2sINTEGRATED%20ENGINEERING!5e0!3m2!1sen!2sin!4v1683371266420!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>
</section>

<!--====== MAP PART ENDS ======-->

<!--====== CONACT PART START ======-->

<section id="contact-part" class="pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="contact-form pt-45">
                    <h6>Book Now</h6>
                    <form id="contactform" action="thankyou" method="POST" name="contactform" onsubmit="return contactVal()">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <label>Name:</label>
                                    <input type="text" name="name" id="name" onblur="checkValue(this)" placeholder="Name" autocomplete="off">
                                    <span id="name_error" style="color: red;"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <label>Phone:</label>
                                    <input type="tel" name="phone" id="phone" onblur="checkValue(this)" placeholder="Phone No" autocomplete="off">
                                    <span id="phone_error" style="color: red;"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <label>Email Address :</label>
                                    <input type="email" name="email" id="email" onblur="checkValue(this)" placeholder="Email Address" autocomplete="off">
                                    <span id="email_error" style="color: red;"></span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <label>Select Products:</label>
                                    <select class="form-select" name="product" id="product" onblur="checkValue(this)">
                                    
                                    <span id="product_error" style="color: red;"></span>    
                                        <option selected>Select Products</option>
                                        <option value="ORiCH Crest">ORiCH Crest</option>
                                        <option value="ORiCH Brio">ORiCH Brio</option>
                                        <option value="ORiCH Flora">ORiCH Flora</option>
                                        <option value="ORiCH Ample">ORiCH Ample</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="singel-form form-group">
                                    <label>Write a message :</label>
                                    <textarea name="message" id="message" onblur="checkValue(this)" 
                                    placeholder="Write Message Here..." autocomplete="off">
                                   
                                </textarea>
                                <span id="message_error" style="color: red;"></span>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="singel-form">
                                    <button type="submit" name="submit" id="submit" onsubmit="contactVal();">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-info pt-45"><br>
                    <!-- <h6>Contact Info</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p> -->
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="cont pl-15">
                                <p>Plot No 18, HNO 3-3-13/2, Ganesh Nilayam, Kukatpally, 500072, Hyderabad</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="cont pl-15">
                                <p>info@integratedwatersolutions.in</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="cont pl-15">
                                <p>waterpurifieronrental@gmail.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="cont pl-15">
                                <p>+91 9640633386</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="cont pl-15">
                                <p>+91 9640633387</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><br>

<!--====== CONACT PART ENDS ======-->



<!--====== DELIVERY PART ENDS ======-->
<?php include('include/footer_contact.php'); ?>
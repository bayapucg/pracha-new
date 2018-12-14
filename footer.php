<!-- Footer -->
<footer>
    <div class="callout">
        <div class="container">
            <div class="row wow fadeInDown" data-wow-delay=".6s">
                <div class=" col-sm-7">
                    <h2>Want Any Assistence Please Write Us</h2>
                </div>
                <div class=" col-sm-5">
                    <a href="#" class="button btn-theme medium ">GET A QUOTE &nbsp;
                        <i class="fas fa-location-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="themeColor">Stay in touch</div>
                    <div class="formOuter">
                        <form id="footerContactForm" action="#">
                            <input type="text" class="inputText" placeholder="Name" name="namef">
                            <input type="email" class="inputText" placeholder="Email" name="emailf">
                            <textarea class="inputText" placeholder="Write message" name="messagef"></textarea>
                            <input type="submit" value="Submit" class="button btn-theme small button-fill-width">
                        </form>
                        <div class=" error-handling-messages">
                            <div id="success-footer">Thank you</div>
                            <div id="error-footer"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInLeft" data-wow-delay=".6s">
                    <div class="themeColor">Service we offer</div>
                    <ul>
                        <li>
                            <a href="#">Web Development </a>
                        </li>
                        <li>
                            <a href="#">Mobile / App Development</a>
                        </li>
                        <li>
                            <a href="#">Marketing</a>
                        </li>
                        <li>
                            <a href="#">Solutions</a>
                        </li>
                        <li>
                            <a href="#">Market Verticals</a>
                        </li>
                    </ul>
                    <div class="themeColor">Work For</div>
                    <ul>
                        <li>
                            <a href="#">Agency </a>
                        </li>
                        <li>
                            <a href="#">Enterprise </a>
                        </li>
                        <li>
                            <a href="#">Startup</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3  wow fadeInRight" data-wow-delay="1.2s">
                    <div class="themeColor">Quick Links</div>
                    <ul>
                        <li>
                            <a href="index.php">Home </a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                    <div class="themeColor">Connect with Us</div>
                    <ul class="socialIcon">
                        <li>
                            <a href="#" class="fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tw">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="li">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="gp">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-3 haevQuestion  wow fadeInRight" data-wow-delay="1.6s">
                    <div class="themeColor">Have Question?</div>
                    <div class="font12">Call Us </div>
                    <div class="callNo">IND: 040-48541273
                    </div>
                    <div class="emailIds">
                        <i class="fas fa-envelope"></i> &nbsp;
                        <a href="mailto:info@example.com"> info@prachatech.com</a>
                        <br>
                        <i class="fab fa-skype"></i> &nbsp;
                        <a href="#"> pracha.skype </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copy Right Section -->
    <div class="copyRight">
        <div class="container">
            <div class="copy">&copy; 2018 Pracha. All Rights Reserved.</div>
            <div class="designedBy">Website Design & Developed by
                <a href="#
  ">Pracha</a>
            </div>
        </div>
    </div>
    <!-- .Copy Right Section -->

</footer>
<!-- .Footer -->


<!-- Back to top -->
<a href="javascript:;" id="back-to-top" title="Back to top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- .Back to top -->


<!--jQuery minified v1.11.3 library  -->
<script src="js/jquery.min.js"></script>

<!--jQuery validate JS   -->
<script src="js/validate.js"></script>

<!--Bootstrap minified JS -->
<script src="js/bootstrap.min.js"></script>

<!--Wow Effect JS -->
<script src="js/wow.min.js"></script>

<!--Owl Carousel 2 minified JS -->
<script src="js/owl.carousel.min.js"></script>

<!--Theme Custom JS -->
<script src="js/function.js"></script>
<script src="js/demo.js"></script>


<script>
/*
------------------------------------------------------------
Function to activate form button to open the slider.
------------------------------------------------------------
*/
function open_panel() {
slideIt();
var a = document.getElementById("sidebar");
a.setAttribute("id", "sidebar1");
a.setAttribute("onclick", "close_panel()");
}
/*
------------------------------------------------------------
Function to slide the sidebar form (open form)
------------------------------------------------------------
*/
function slideIt() {
var slidingDiv = document.getElementById("slider");
var stopPosition = 0;
if (parseInt(slidingDiv.style.right) < stopPosition) {
slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
setTimeout(slideIt, 1);
}
}
/*
------------------------------------------------------------
Function to activate form button to close the slider.
------------------------------------------------------------
*/
function close_panel() {
slideIn();
a = document.getElementById("sidebar1");
a.setAttribute("id", "sidebar");
a.setAttribute("onclick", "open_panel()");
}
/*
------------------------------------------------------------
Function to slide the sidebar form (slide in form)
------------------------------------------------------------
*/
function slideIn() {
var slidingDiv = document.getElementById("slider");
var stopPosition = -342;
if (parseInt(slidingDiv.style.right) > stopPosition) {
slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
setTimeout(slideIn, 1);
}
}
</script>

</body>

</html>
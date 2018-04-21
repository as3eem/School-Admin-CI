<?php
?>

<br>
<div class="footer">
    <div class="container">
        <h3>Sign up for our newsletter</h3>
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus
            tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
        <div class="footer-contact">
            <form onsubmit="return confirm('Thank you. We will contact you soon.');">
                <input type="text" placeholder="Enter your email to update" required=" ">
                <input type="submit" value="">
            </form>
        </div>
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <p>HALOVIETNAM LTD
                    66, Dang Van ngu, Dong Da
                    Hanoi, USA.
                    <a href="mailto:info@example.com">contact@example.com</a>
                <p>Phone : +844 35149182</p>
            </div>
            <div class="col-md-3 footer-grid">
                <ul>
                    <li><a href="<?=base_url()?>index.php/Student/mail">Contact</a></li>
                    <li><a href="<?=base_url()?>index.php/Student/gallery">Gallery</a></li>
                    <li><a href="<?=base_url()?>index.php/Student/About">Short Codes</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <ul>
                    <li><a href="<?=base_url()?>index.php/Student/events">News & Events</a></li>
                    <li><a href="<?=base_url()?>index.php/Student/services">Services</a></li>
                    <li><a href="<?=base_url()?>index.php/Student/home">Home</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
<!--                <div class="footer-grid-left">-->
<!--                    <img src="--><?//=base_url()?><!--Static/home/images/10.jpg" alt=" " class="img-responsve" />-->
<!--                </div>-->
<!--                <img src="--><?//=base_url()?><!--Static/home/images/12.jpg" alt=" " class="img-responsve" />-->
<!--                </div>-->
<!--                <div class="footer-grid-left">-->
<!--                    <img src="--><?//=base_url()?><!--Static/home/images/11.jpg" alt=" " class="img-responsve" />-->
<!--                </div>-->
<!--                <div class="footer-grid-left">-->
<!--                    <img src="--><?//=base_url()?><!--Static/home/images/10.jpg" alt=" " class="img-responsve" />-->
<!--                </div>-->
<!--                <div class="footer-grid-left">-->
<!--                    <img src="--><?//=base_url()?><!--Static/home/images/8.jpg" alt=" " class="img-responsve" />-->
<!--                </div>-->
<!--                <div class="footer-grid-left">-->
<!--                    <img src="--><?//=base_url()?><!--Static/home/images/9.jpg" alt=" " class="img-responsve" />-->
<!--                </div>-->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="footer-copy">
            <p>&copy 2016 RSINIG CHILD. All rights reserved | Design by <a href="http://RitronixTechnology.com">RitronixTechnology.</a></p>
            <ul>
                <li><a href="#" class="twitter"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Twitter"></span></a></li>
                <li><a href="#" class="p"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Pinterest"></span></a></li>
                <li><a href="#" class="facebook" id="facebook"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Facebook"></span></a></li>
                <li><a href="#" class="dribble"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Dribbble"></span></a></li>
                <li><a href="#" class="rss"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On RSS"></span></a></li>
                <div class="clearfix"> </div>
            </ul>
            <script>
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })
            </script>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- here stars scrolling icon -->

</body>
</html>

<section class="container">
    <div class="widgets-wrap">
        <div class="widget logowidget">
            <a href="" class="footerlogo"><img src="images/logo.png" alt="" /> <strong>Plumbing</strong></a>
        </div>

        <div class="widget links">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>

        <div class="widget">
            <p>Contact Us:</p>
            <p>
                <a href="tel:{{env('CONTACT_NUMBER')}}" style="text-decoration: none; color: inherit"> <span class="fa fa-phone"></span> Phone: &nbsp;{{env('CONTACT_NUMBER')}}</a>
            </p>
            <p><span class="fa fa-envelope"></span> Email: &nbsp; info@yourwebsite.com</p>
        </div>
    </div>

    <div class="footerbottom">
        <div class="copyright">Copyright &copy; 2016 Plumbing. All Rights Reserved - Powered by: <a href="https://www.ringba.com">Ringba</a></div>
        <div class="socialmedia">
            <p>Stay Connected:</p>
            <a href="" class="facebook"><span class="fa fa-facebook"></span></a>
            {{-- <a href="" class="twitter"><span class="fa fa-twitter"></span></a>
            <a href="" class="linkedin"><span class="fa fa-linkedin"></span></a> --}}
            <a href="" class="gplus"><span class="fa fa-google-plus"></span></a>
        </div>
    </div>
</section>
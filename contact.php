<!-- Contact Section -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p>contactme@gmail.com</p>
                <p>01124569856</p><br>
                <a href="images/my-cv.pdf" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
                <?php if (isset($successMessage)): ?>
                    <p style="color: green;"> <?php echo $successMessage; ?> </p>
                <?php elseif (isset($errorMessage)): ?>
                    <p style="color: red;"> <?php echo $errorMessage; ?> </p>
                <?php endif; ?>
                <form action="" method="POST">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <br><br>
                    <input type="email" name="Email" placeholder="Your Email" required>
                    <br><br>
                    <textarea name="Message" rows="6" placeholder="Your Message" required></textarea>
                    <br><br>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p>Copyright @Just Do It.</p>
    </div>
</div>
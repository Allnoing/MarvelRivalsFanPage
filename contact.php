<?php
require 'common.php'; // Include the common functions
displayHead("Contact the Marvel Rivals Team");
displayMenu();
?>

<section class="container my-5">
    <h2 class="text-center mb-4">Contact - Marvel Rivals</h2>
    <div class="row">
        <!-- Contact Information -->
        <div class="col-md-6">
            <h4>Get in Touch</h4>
            <p><strong>Email:</strong> overseabd@global.netease.com</p>
            <!-- <p><strong>Phone:</strong> (800) 123-4567</p> (Can't find phone number)-->
            <p><strong>Address:</strong> 250 5th Ave, San Fransisco, California 10001</p> <!-- (Old address, recently shutdown american division) -->
        </div>

        <!-- Contact Form -->
        <div class="col-md-6">
            <h4>Send a Message</h4>
            <form action="submit_contact.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</section>

<?php displayFooter("Marvel Rivals Fan Site by Sa'Cairo Bonner"); ?>

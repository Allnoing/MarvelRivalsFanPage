<?php
/* Author: Sa'Cairo Bonner
   Create Date: 3/03/2025
   Class: ITN264
   Class Section: 201
   Assignment: PHP Functions
   Purpose: This file contains the functions that will be used in the index.php file.
*/

function displayHead($title) {
   echo '<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>' . $title . '</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="styles.css">
   </head>
   <body>';
}

function displayMenu() {
   echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
           <div class="container">
               <a class="navbar-brand" href="index.php">Home</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" title="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                   <ul class="navbar-nav ms-auto">
                       <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                       <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                       <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                   </ul>
               </div>
           </div>
         </nav>';
}

function displayFooter($owner = "SaCairo Bonner") { // Default value if no name is provided for the footer
    echo '<footer class="text-center text-white py-3">
            <p>&copy; ' . date("Y") . ' ' . htmlspecialchars($owner) . '. All Rights Reserved.</p>
          </footer>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
}
?>


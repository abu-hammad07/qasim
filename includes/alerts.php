 <!-- successAlertMessage -->

 <?php
    if (isset($_SESSION['message'])) {
    ?>
     <div class="alert alert-primary alert-dismissible fade show" role="alert">
         <strong>Success!</strong> <?php echo $_SESSION['message']; ?>
         <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
 <?php
        unset($_SESSION['message']);
    }
    ?>
 <?php
    if (isset($_SESSION['already'])) {
    ?>
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Success!</strong> <?php echo $_SESSION['already']; ?>
         <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
 <?php
        unset($_SESSION['already']);
    }
    ?>


 <?php
    if (isset($_SESSION['delete'])) {
    ?>
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Success!</strong> <?php echo $_SESSION['delete']; ?>
         <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
 <?php
        unset($_SESSION['delete']);
    }
    ?>
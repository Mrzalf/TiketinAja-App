<?php if (!empty($_SESSION['notif'])) : ?>
   <script>
       alert("<?php echo $_SESSION['notif'] ?>")
   </script>
   <?php unset($_SESSION['notif']) ?>
<?php endif; ?>
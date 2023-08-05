<?php
//index.php
require_once('../HTML/navbar.php');
require_once('../HTML/form.php');

require_once('../HTML/footer.php');


?>
<script>
  let is_logged_in = <?php echo $_SESSION['is_logged_in'] ? 'true' : 'false'; ?>;

  if (is_logged_in) {
    let logout = document.getElementById('logout');
    let a_tage = document.getElementById('a_tage');
    logout.innerHTML = 'Logout';
    a_tage.href = "logout_process.php";
  }
</script>




<?php
  session_start();
  $_SESSION['userid'] = 'secret';
  $_SESSION['mail'] = 'secret@exmaple.jp';
?><body>
ログインしました<br>
ID: <?php echo htmlspecialchars($_SESSION['userid']); ?><br>
メールアドレス: <?php echo htmlspecialchars($_SESSION['mail']); ?>
</body>

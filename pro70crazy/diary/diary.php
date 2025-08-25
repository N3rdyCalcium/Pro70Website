<html>
  <head>
    <title>Calvin's Personal Diary and Notes</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="alternate" type="application/rss+xml"
title="@Pro70crazy Twitter"
href="https://nitter.net/Pro70crazy/rss">
  </head>
  <body>
    <!-- display @Pro70crazy RSS feed from Twitter -->
    <script src="/diary/rss.js"></script>

    <!--if user types the correct password, it will display all the info. If user types the wrong password or just entered the file directly, it will display a wrong password warning instead of the info.-->
    <p><?php
$code = rand(1000,9999);
$clue = $code;
 if (($_REQUEST['RandomPassword'] == $code))
{
  echo "<script>alert('This diary is CASE SENSITIVE!! So dont share it publicly.')</script>";
  echo "<h1>Calvin's Personal Diary and Notes</h1>";
  echo '<a href="/">go back home</a>';
  echo "<br><br>";
  echo "<b><u>04/23/2022 14:06: </p></u><p>The 2nd exam was over, now I can take a long break before the last exam.";
  echo "<br><br><br>";
  echo "<b><u>03/28/2022 07:43: </b></u><p>Exam is over. schools starts as normal. Theres more bigger exam later in April 11.";
  echo "<br><br><br>";
  echo "<b><u>03/22/2022 10:01: </b></u><p>Today is the 2nd exam. I hope it's going as planned. I'm not writing this anymore it's boring. maybe after exam ok";
  echo "<br><br><br>";
  echo "<b><u>03/21/2022 11:31: </b></u><p>2 done 7 more to go. After the long wait, we are dismissed.";
  echo "<br><br><br>";
  echo "<b><u>03/21/2022 10:49: </b></u><p>The last one was intense, but I get through it. phew";
  echo "<br><br><br>";
  echo "<b><u>03/21/2022 10:29: </b></u><p>2nd Exam just started. I'm using iPad for that since my computer battery is running out. I can't share screen. So I ask the teacher to share screen then, simple? really?";
  echo "<br><br><br>";
  echo "<b><u>03/21/2022 09:37: </b></u><p>One done, 8 more to go. I have to wait until 10AM. My battery is dropping right now...";
  echo "<br><br><br>";
  echo "<b><u>03/21/2022 08:00: </b></u><p>First biggest exam ever. I hope it went well</p>";
}
else
{
echo "<p>Wrong password, try again.";
echo "<br><br>";
echo "Wait a minute, you trying to cheat or hacker? STOP IT!!!!</p>";
echo '<p>Go <a href="/diary/password.html">here</a> to see the clue of the password';
echo "<br><br>";
echo '<a href="/diary/">try again</a>';
echo "<br>";
echo '<a href="/">go back home</a>';
};
    ?></p>
  </body>
</html>
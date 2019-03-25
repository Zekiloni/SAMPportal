<?php
require("config.php");
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function SMFPosts() {
  global $conn;
  $sql = "SELECT poster_name, subject, body, id_board, id_topic, id_msg FROM smf_messages ORDER BY id_msg DESC LIMIT 3";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    $link = "forum/index.php?topic=" . $row["id_topic"] . "#msg" . $row["id_msg"];
    echo '
      <div class="titlebg"><a href=". $link .">FORUM: ' . $row["subject"] . '</a></div>
      <div class="textbg">
        ' . $row["body"] . '<br> <small>Autor: ' . $row["poster_name"] . '</small>
      </div><br>';
  }
}

function Staff() {
  global $conn;
  $sql = "SELECT * FROM smf_members WHERE id_group = 1 ORDER BY id_group DESC LIMIT 10";
  $result = $conn->query($sql);
  $conn->close();
  while($row = $result->fetch_assoc()) {
    $admin = $row["id_group"] == 1;

    if ($admin) {
      echo "Administrator";
    }
    else {
      echo "User";
    }
    $link = "forum/index.php?action=profile;u=" . $row["id_member"];
    echo " - <a href=". $link .">" . $row["member_name"]. "</a><br>";
  }
}
?>

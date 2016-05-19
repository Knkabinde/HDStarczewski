<?php
	header("Refresh: 5; url=kontakt.html");
  $imie = $_POST['imie'];
  $nazwisko = $_POST['nazwisko'];
  $email = $_POST['email'];
  $message = $_POST['wiadomosc'];
  
  $headers = "Nowa wiadomość z twojej strony HDStarczewski\r\n";
  $headers .= "Została wysłana przez $imie $nazwisko\r\n";
  $headers .= "Swoją odpowiedź kieruj na E-mail: $email\r\n";
  $topic = "HDStarczewski-kontakt: Nowa wiadomość od: $imie $nazwisko";
  $where = "marcin.starczewski@onet.pl";
  mail($where,$topic,$message, $headers);

  echo '<center><font size="5">Wiadomosc zostala pomysle wyslana...</font><br/><font size="4">Za chwile zostaniesz przekierowany z powrotem, jesli po 10 sekundach nic sie nie dzieje <a href="kontakt.html">kliknij tutaj</a></center>';
?>
<h1 class="admin-user-title">Liste des utilisateurs</h1>

<table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $csv = read("../" . $_SESSION["file"]);
    for($i = 0 ; $i < sizeof($csv) - 1 ; $i++ ) {
      echo "<tr><td>" . $i+1 . "</td><td>" . $csv[$i][0] . "</td><td>" . $csv[$i][2] . "</td></tr>";
    }
    ?>
  </tbody>
</table>
<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "home";
$rows = [
  [
    "name" => '$GLOBALS',
    "description" => "Référence toutes les variables disponibles dans un contexte global",
    "page_name" => "globals",
  ],
  [
    "name" => '$_SERVER',
    "description" => "Variables de serveur et d'exécution",
    "page_name" => "server",
  ],
  [
    "name" => '$_FILES',
    "description" => "Variable de téléchargement de fichier via HTTP",
    "page_name" => "file",
  ],
  [
    "name" => '$_COOKIE',
    "description" => "Cookies HTTP",
    "page_name" => "cookie",
  ],
  [
    "name" => '$_SESSION',
    "description" => "Variables de session",
    "page_name" => "session",
  ],
  [
    "name" => '$_ENV',
    "description" => "Variables d'environnement",
    "page_name" => "env",
  ],
];
?>
<!-- Header Section -->
<?php
require_once "includes/layout/header.php";
?>
<!-- Navbar -->
<?php
require_once "includes/layout/navbar.php";
?>
<div class="pt-5 pb-5">
  <div class="container">
    <?php
    if ($page === "home") {
    ?>
      <table class="table table-striped">
        <tr>
          <th>Variable Name</th>
          <th>Description</th>
          <th>Example</th>
        </tr>
        <?php
        foreach ($rows as $row) {
          echo "<tr>";
          echo  "<td>" . $row['name'] . "</td>";
          echo  "<td>" . $row['description'] . "</td>";
          echo  '<td><a href="./index.php?page=' . $row['page_name'] . '">Link</a></td>';
          echo "</tr>";
        }
        ?>
      </table>
    <?php
    } else if ($page === "globals") {
      include "includes/templates/globals.php";
    } else if ($page === "server") {
      include "includes/templates/server.php";
    } else if ($page === "file") {
      include "includes/templates/file.php";
    } else if ($page === "cookie") {
      include "includes/templates/cookie.php";
    } else if ($page === "session") {
      include "includes/templates/session.php";
    } else if ($page === "env") {
      include "includes/templates/env.php";
    } else if ($page === "login") {
      include "includes/templates/login.php";
    }
    ?>
  </div>
</div>
<!-- Footer Section -->
<?php
require_once "includes/layout/footer.php";
?>
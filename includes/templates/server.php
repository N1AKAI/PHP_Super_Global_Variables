<div class="mb-5">
  <pre><code class="language-php">&lt;?php
foreach ($_SERVER as $name => $value) {
  echo "&lt;tr&gt;";
  echo  "&lt;td&gt;" . $name . "&lt;/td&gt;";
  echo  "&lt;td&gt;" . $value . "&lt;/td&gt;";
  echo "&lt;/tr&gt;";
}
?&gt;</code></pre>
</div>

<table class="table table-striped d-block overflow-auto">
  <tr>
    <th>Name</th>
    <th>Value</th>
  </tr>
  <?php
  foreach ($_SERVER as $name => $value) {
    echo "<tr>";
    echo  "<td>" . $name . "</td>";
    echo  "<td>" . $value . "</td>";
    echo "</tr>";
  }
  ?>
</table>
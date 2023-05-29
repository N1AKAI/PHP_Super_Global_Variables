<div class="mb-5">
  <pre>
<code class="language-php">&lt;?php
if($_SERVER["REQESUT_METHOD"] === "POST" && isset($_FILES["upload"])) {
foreach ($_FILES["upload"] as $name => $value) {
  echo "&lt;tr&gt;";
  echo  "&lt;td&gt;" . $name . "&lt;/td&gt;";
  echo  "&lt;td&gt;" . $value . "&lt;/td&gt;";
  echo "&lt;/tr&gt;";
  }
}
?&gt;
</code>
</pre>
</div>

<div>
  <h4>Choose a file</h4>
  <form action="./index.php?page=file" method="POST" enctype="multipart/form-data" class="mb-4">
    <div class="input-group mt-4 mx-auto" style="width: 600px">
      <input type="file" class="form-control" name="upload" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
      <button class="btn main-btn py-1" type="submit" id="inputGroupFileAddon04">Upload</button>
    </div>
  </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["upload"])) {
?>
  <table class="table table-striped">
    <tr>
      <th>Name</th>
      <th>Value</th>
    </tr>
    <?php
    foreach ($_FILES["upload"] as $name => $value) {
      echo "<tr>";
      echo  "<td>" . $name . "</td>";
      echo  "<td>" . $value . "</td>";
      echo "</tr>";
    }
    ?>
  </table>
<?php
}
?>
<?php

$title = '';
$age = '';
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['submit'])) {
  $name = htmlspecialchars($_REQUEST['name']) ?? '';
  $age = htmlspecialchars($_REQUEST['age']) ?? '';
  $submitted = true;
}

?>

<form method="post">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
  </div>
  <input type="submit" name="submit" value="Submit">
</form>

<?php if ($submitted) : ?>
<p>Hello, <?php echo $name; ?>! You are <?php echo $age; ?> years old.</p>
<?php endif; ?>
<?php 

$otherInformation = array(
  'Faculty' => 'faculty',
  'Study Program' => 'study',
  'Status Akademik' => 'status'
);

$isComplete = false;

if (count($otherInformation) === 5) {
  $isComplete = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Personal Information">
  <title>Your Personal Information</title>
  <link rel="stylesheet" href="styles/personal.css">
</head>
<body>
  <main>
    <header>
      <h1>Personal Information</h1>
    </header>
    <main>
      <?php if($isComplete) { ?>
        <section>
          <h1><?= $_POST['name'] ?></h1>
          <h2><?= $_POST['nim'] ?></h2>
        </section>
        <section>
          <?php foreach ($otherInformation as $key => $value) { ?>
            <div>
              <h4><?= $key; ?></h4>
              <h3><?= $_POST[$value]; ?></h3>
            </div>
          <?php } ?>
        </section>
      <?php } else { ?>
        <span>
          Oops, your data is not complete, please back and complete your data
        </span>
        <a href="../">
          back
        </a>
      <?php } ?>
    </main>
  </main>
</body>
</html>
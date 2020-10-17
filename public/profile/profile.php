<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/profile.css">
  <title>Profile Page</title>
</head>
<body>
  <?php 
    const PROFILE = array(
      'Name' => 'Anas Mubarak Yasin Mas\'ud',
      'Job' => 'Student of UIN Alauddin',
      'NIM' => 60900118020,
      'Class' => 'A',
      'Address' => 'Kab. Pinrang, Sulawesi Selatan',
      'Gender' => 'Male',
    );
  ?>
  <header class="jumbotron">
    <img class="hero-images" src="images/IMG_20180513_173903.jpg" alt="hero images">
  </header>
  <main>
    <aside class="profile-short">
      <img class="images" src="images/WhatsApp Image 2020-09-16 at 10.34.20.jpeg" alt="photo">
      <div class="wrapper-text">
        <h1 class="name"><?= PROFILE['Name'] ?></h1>
        <h2 class="job"><?= PROFILE['Job'] ?></h2>
      </div>
    </aside>
    <section class="profile-main">
      <h1 class="title">Profile</h1>
      <?php foreach(PROFILE as $key => $value) {?>
        <h3 class="overline"><?= $key ?></h2>
        <h2 class="subtitle"><?= $value ?></h2>
      <?php }?>
    </section>
  </main>
</body>
</html>
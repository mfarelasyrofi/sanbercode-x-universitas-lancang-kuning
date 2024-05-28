<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>
    <a href="/form">Form</a>
    
    <header>
        <h1>SELAMAT DATANG <?php echo $fname;?> <?php echo $lname;?>!</h1>
        <p><bold>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</bold></p>
    </header>

    <h2>Berikut Data Anda:</h2>
    <p>First Name: <?php echo $fname;?></p>
    <p>Last Name: <?php echo $lname;?></p>
    <p>Gender: <?php echo $gender;?></p>
    <p>Nationality: <?php echo $nationality;?></p>
    <p>Language: <?php echo $language_spoken;?></p>
    <p>Bio: <?php echo $bio;?></p>

    
</body>
</html>
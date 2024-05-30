<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
</head>
<body>
    <a href="/">Dashboard</a>

    <header>
        <h1>Buat Account Baru!</h1>
    </header>

    <h2>Sign Up Form</h2>

    <form action="/home" method="POST">
        <?php echo csrf_field(); ?>
        <label for="first_name">First Name</label><br />
        <input type="text" name="first_name" id="first_name" /><br /><br />
        <label for="last_name">Last Name</label><br />
        <input type="text" name="last_name" id="last_name" /><br /><br />

        <label>Gender:</label><br />
        <input type="radio" name="gender" value="male" />Male<br />
        <input type="radio" name="gender" value="female" />Female <br /><br />

        <label for="nationality">Nationality:</label><br />
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Netherlands">Netherlands</option>
            <option value="South Korea">South Korea</option>
        </select><br /><br />

        <label>Language Spoken:</label><br />
        <input type="checkbox" name="language_spoken" value="Indonesian" />Indonesian<br />
        <input type="checkbox" name="language_spoken" value="English" />English<br />
        <input type="checkbox" name="language_spoken" value="Dutch" />Dutch<br />
        <input type="checkbox" name="language_spoken" value="Korean" />Korean<br /><br />

        <label for="bio">Bio:</label><br />
        <textarea name="bio" id="bio" cols="30" rows="5"></textarea><br />

        <input type="submit" value="Sign Up" />
    </form>
</body>
</html>
<?php /**PATH C:\Unilak\Bootcamp\Tugas #11 Laravel\tugas-11-laravel\resources\views/page/form.blade.php ENDPATH**/ ?>
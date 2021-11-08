<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<body>
<form action="thanks.php" method="post">
    <div>
        <label for="lastName">Lastname :</label>
        <input type="text" id="lastName" name="lastName" required>
    </div>
    <div>
        <label for="firstName">Firstname :</label>
        <input type="text" id="firstName" name="firstName" required>
    </div>
    <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail" required>
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="tel" name="phone_number" id="phone" required>
    </div>
    <div>
        <label for="subject">Sujet</label>
        <select name="subject_message" id="subject" required>
            <option value="theme_1">Subject 1</option>
            <option value="theme_2">Subject 2</option>
            <option value="theme_3">Subject 3</option>
            <option value="theme_4">subject 4</option>
        </select>
    </div>
    <div>
        <label for="msg">Your message :</label>
        <textarea id="msg" name="user_message" required></textarea>
    </div>
    <div class="bouton">
        <button type="submit">Send message</button>
    </div>
</form>
    
</body>
</html>

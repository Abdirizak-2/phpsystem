<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="signup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <H2>Sign up Form</H2>
    <form>
    
        <label for="username">Enter your username:</label>
        <input type="text" id="username" placeholder="username..." required> <br>
    
        <label for="Email">Enter your email:</label>
        <input type="email" id="Email" placeholder="Email..." required>
        <br>
        <label for="Password">Password:</label>
        <input type="password" name="" id="Password" placeholder="password..." required>
        <br>
        <label for="Password">Confirm Password:</label>
        <input type="password" name="" id="Password" placeholder="confirm password..." required>

        <p>Select your age:</p>

        <input type="radio" name="age" value= "0-25" id="age">
        <label for="age">0-25</label>
        <br>
        <input type="radio" name="age" value= "26-50" id="age">
        <label for="age">26-50</label> <br>

        <input type="radio" name="age" value= "51+" id="age">
        <label for="age">51+</label> <br>

        <label for="question">security questions:</label>
        <select name="question" id="question">
            <option value="q1">What is your favourite icecream flavour?</option>
            <option value="q2">If you were to become an animal, which animal would you be?</option>
            <option value="q3">What is your birth City?</option>
           

        </select>
        <br>
        <label for="answer">Enter your answer:</label>
        
        <input type="text" name="answer" id="answer">
        <br>
        <label for="">Enter your bio
        
        </label>
        <br>
        <textarea name="bio" id="" cols="30" rows="10" placeholder="Enter your bio..."></textarea>
        <br>
        <input type="button" name="button" value="submit form">
        
    </form>
</body>
</html>
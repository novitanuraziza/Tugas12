<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="">

        <!-- First Name -->
        <label for="">First Name:</label><br><br>
        <input type="text" name="" id="">

        <br><br>

        <!-- Last Name -->
        <label for="">Last Name:</label><br><br>
        <input type="text" name="" id="">

        <br><br>

        <!-- Gender -->
        <label for="">Gender:</label><br><br>
        <!-- Male -->
        <input type="radio" id="male" name="drone" value="male" checked />
        <label for="male">Male</label>
        <br>
        <!-- Female -->
        <input type="radio" id="female" name="drone" value="female" checked />
        <label for="female">Female</label>
        <br>
        <!-- Other -->
        <input type="radio" id="other" name="drone" value="other" checked />
        <label for="other">Other</label>

        <br><br>

        <!-- Nationality -->
        <label for="">Nationality:</label><br><br>
        <select name="" id="">
            <option value="">Indonesian</option>
        </select>

        <br><br>

        <!-- Language Spoken -->
        <label for="">Language Spoken:</label><br><br>
        <input type="checkbox" name="" id="">Bahasa Indonesia<br>
        <input type="checkbox" name="" id="">English<br>
        <input type="checkbox" name="" id="">Other<br><br>
        
        <!-- Bio -->
        <label for="">Bio:</label><br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea>

        <br><br>

        <button><a href="{{ route('welcome') }}" style="text-decoration: none; color: black;">Sign Up </a></button>

    </form>
</body>
</html>
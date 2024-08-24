<?php include("heade.html")
?>
<body>
    <div class="register">
        <form action="" method="post">
            <label for="username">USERNAME</label>
            <input type="text" size="20" name="n"><br><br>
            <label for="age">AGE</label>
            <input type="number" size="3" name="a"><br><br>
            <label for="dob">DOB</label>
            <input type="date"name="d"><br><br>
            <label for="gender">GENDER</label>
            <input type="radio" value="male"name="g"/>MALE
            <input type="radio" value="female"name="g"/>FEMALE
            <input type="radio" value="others"name="g"/>OTHERS <br><br>
            <label for="email">EMAIL</label>
            <input type="email" name="e"size="50"/><br><br>
            <label for="password">PASSWORD</label>
            <input type="password" maxlength="8" name="p"/><br><br>
            <label for="department">DEPARTMENT</label>
            <select name="s">
                <option value="mech">MECH</option>
                <option value="cse">CSE</option>
                <option value="eee">EEE</option>
                <option value="ece">ECE</option>
                <option value="civil">CIVIL</option>
            </select> <br><br>
            <input type="submit" value="REGISTER"><br><br>
            <input type="submit" value="CANCEL"><br><br>
            <input type="submit" value=" SUBMIT "><br><br>

        </form>
    </div>
</body>
<?php include("footer.html")
?>
<html>
<head>
    <title>Sistem Informasi SD Negeri 111 Bandar Lampung</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <center><font size="6">Sign in</font></center>
        </div>
        <div class="artikel">
            <form action="cek_login.php" method="POST" >
                <div class="grup">
                   <label for="Username"><font size="3">Username</font></label>
                    <center><input type="text" name="username" placeholder="Masukkan Username"></center> <br>

                </div>
                <div class="grup">
                    <label for="password"><font size="3">Password</font></label>
                   <center><input type="password" name="password" placeholder="Masukan Password"></center><br><br>
                </div> <div class="grup">
                        <center><input type="submit" value="LOGIN"></center>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>
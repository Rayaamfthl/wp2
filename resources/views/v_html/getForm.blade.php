<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>getForm</title>
    <style>
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid black;
        }

        label,
        input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
            border: 1px solid black;
        }

        input[type="submit"] {
            padding: 5px 10px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <form action="#" method="post">
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim">

        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama">

        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" name="kelas">

        <input type="submit" value="Simpan">
    </form>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>PENDUDUK</title>
</head>

<body>
    <header>
        <h3>PENDUDUK</h3>
    </header>

    <form action="prosespenduduk.php" method="POST">

        <fieldset>

        <p>
            <label for="NIK"> NIK : </label>
            <input type="text" name="NIK" placeholder="" />
        </p>
        <p>
            <label for="NAMA">Nama : </label>
            <textarea name="NAMA"></textarea>
        </p>
        <p>
            <label for="Tanggal_lahir">Tanggal lahir : </label>
            <input type="text" name="Tanggal_lahir" placeholder="" />
        </p>
        <p>
            <label for="Tempat_lahir"> Tempat lahir : </label>
            <input type="text" name="Tempat_lahir" placeholder="" />
        </p>
        <tr>
        <p>
            <input type="file" name="filegambar" id="filegambar"></td>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
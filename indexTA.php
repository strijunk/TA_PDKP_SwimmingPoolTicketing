<!DOCTYPE html>
<html lang="en">
    <style>
        body{
            font-family: Helvetica;
            background-color: #ffffff;
            line-height: 25px;
            padding: 0px 100px 10px 100px;
        }
        header{
            font-family: 'Open Sans', sans-serif;
            color: #2f4f4f;
            text-align: center;
            background-color: #1e90ff;
            padding: 0px;
            margin: 0px;
        }
        form{
            padding: 20px 100px;
            background-color: #f8f8ff;
        }
        .nama{
            border: 0px 0px 3px;
            width: 200px;
            height: 20px;
            border-style: groove;
        }
        .no_id{
            border: 0px 0px 3px;
            width: 200px;
            height: 20px;
            border-style: groove;
        }
        .kolam{
            margin: 10px 5px 0px;
            width: 15px;
            height: 15px;
            background-color: skyblue;
        }
        .hari{
            margin-top: 7px;
            border: 1px;
            border-radius: 5px;
            border-style: groove;
            padding-left: 5px;
        }
        .jumlah{
            margin-top: 7px;
            padding-left: 5px;
            border-radius: 5px;
            border: 1px;
            border-style: groove;
            width: 65px;
            height: 20px;
        }
        .tombol{
            font-weight: 20px;
            margin: 10px 0px 0px;
            border: 0px;
            border-radius: 10px;
            border-shadow: 5px darkblue;
            width: 80px;
            height: 30px;
            background-color: skyblue;
            transition-duration: 0.4s;
        }
        .tombol:hover{
            background-color: #DBE0F7;
            box-shadow: 0px 3px 3px 0px grey;
        }
        body form label select{
            margin-left: 55px;
            width: 70px;
            height: 25px;
            border-radius: 10px;
        }
    </style>
    <head>
        <title>Swimming Pool Ticketing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <header>
    <br>
        <h2>SPT Swimming Pool Ticketing</h2>
        <h3>Welcome to the Swimming Pool Ticketing!</h3>
    <br>
    </header>
    <body>
     <form action="Sukses.php" method="post">
        <label>Nama
        <br><input class="nama" type="text" name="nama" value="" required><br>
        </label>
        <label>No ID</label>
        <br><input class="no_id" type="text" name="no_id" value="" required><br>

        <label style="margin: 5px 0px 0px">
        Jenis kolam <input class="kolam" type="radio" name="kolam" value="Anak-anak" required>Anak-anak
		            <input class="kolam" type="radio" name="kolam" value="Dewasa" required>Dewasa<br>
        </label>

        <label>Hari 
        <select class="hari" name="hari" required>
        <option name="senin" value="Senin">Senin</option>
		<option name="selasa" value="Selasa">Selasa</option>
		<option name="rabu" value="Rabu">Rabu</option>
		<option name="kamis" value="Kamis">Kamis</option>
        <option name="jumat" value="Jumat">Jumat</option>
		<option name="sabtu" value="Sabtu">Sabtu</option>
		<option name="minggu" value="Minggu">Minggu</option>
        </select><br>
        </label>

        <label>
        Jumlah tiket <input class="jumlah" type="number" name="jmltiket" min="1" max="20" required><br>
        </label>

        <button type="submit" class="tombol">Pesan</button>
     </form>
    </body>
</html>
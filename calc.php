<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <header>
            <a href="index.html">
                strona guwna
            </a>
            <a href="calc.php">
                kalkulator
            </a>
            <a href="items.html">
                itemy
            </a>
            <a href="builds.html">
                buildy
            </a>
        </header>
        <hr style="border:1px solid black; min-width: 100vw;">
        <main>
            <!--THIS IS left box with items you can equip when you click on slot-->
            <div id="przedmioty" class="box">
            <div id="item_boxes">
                    <button>Czapki</button>
                    <button>Peleryny</button>
                    <button>Zbroje</button>
                    <button>Spodnie</button><br>
                    <button>Buty</button>
                    <button>Paski</button>
                    <button>Rękawice</button>
                    <button>Pierścienie</button><br>
                    <button>Naszyjniki</button>
                    <button>Karwasze</button>
                    <button>Broń</button>
                </div>
<hr style="border: 1px solid black; margin-top:1%; margin-bottom:1%;">
            <?php

$account = "localhost";
$login = "root";
$password = "";
$db = "brokenranks";


$con = new mysqli($account, $login, $password, $db);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$q = "SELECT name, lvl_requirement FROM items WHERE id = 1";

$result = $con->query($q);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<div class="item-box">" "name: " . $row["name"] . " lvl_requirement: " . $row["lvl_requirement"] "</div>";
    }
    } else {
        echo "0 results";
    }

$con->close();
?>
            </div>
            <!--THIS IS middle box with your character equipment slots where you can put something-->
            <div id="przedmioty_set" class="box">

                <!--THIS IS top part of middle box-->
                <div id="choosing">
                <form action="" method="post">
                    <select name="" id="">
                        <option value="NoSelected">Wybierz profesje</option>
                        <option value="Mag_Ognia">Mag Ognia</option>
                        <option value="Barbarzynca">Barbarzynca</option>
                        <option value="Druid">Druid</option>
                        <option value="Rycerz">Rycerz</option>
                        <option value="Voodoo">Voodoo</option>
                        <option value="Lucznik">Lucznik</option>
                        <option value="Sheed">Sheed</option>
                    </select>
                    <input type="number" min="1" max="140" maxlength="3" name="level" id="level" placeholder="poziom postaci">
                    <button type="submit">Wybierz</button>
                </form>
                </div>

                <!--I BELIEVE THIS IS HORIZONTAL LINE-->
        <hr style="border:1px solid black; min-width: fit-content; margin-top:2vh;">

                <!--THIS IS bottom part of middle box where you choose your gear-->
                <div id="gear">
                    <div id="top-gear">
                        <div id="helmet" class="gearowing gear-box">1</div>
                        <div id="amulet" class="gearowing gear-box">2</div>
                        <div id="ring1" class="gearowing gear-box">3</div>
                        <div id="ring2" class="gearowing gear-box">4</div>
                    </div>
                    <div id="mid-gear">
                        <div id="cloak" class="gearowing gear-box">5</div>
                        <div id="armour" class="gearowing gear-box">6</div>
                    </div>
                    <div id="bottom-gear">
                        <div id="gloves" class="gearowing gear-box">7</div>
                        <div id="legs" class="gearowing gear-box">8</div>
                        <div id="belt" class="gearowing gear-box">9</div>
                        <div id="boots" class="gearowing gear-box">10</div>
                    </div>
                </div>
            </div>
            <!--THIS IS right box with statistics of your character-->
            <div id="statystyki" class="box">
                <table>
                    <tr>
                        <td>200</td>
                        <td>HP</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>MANA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>KONDYCJA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>SILA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ZRECZNOSC</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>MOC</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>WIEDZA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ODPORNOSC SIECZNA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ODPORNOSC KLUTA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ODPORNOSC OBUCHOWA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ODPORNOSC NA OGIEN</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ODPORNOSC NA ENERGIE</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ODPORNOSC NA ZIMNO</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ODPORNOSC NA UROK</td>
                    </tr>
                </table>
            </div>
        </main>
    </div>
</body>
</html>


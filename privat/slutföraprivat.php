<!DOCTYPE HTML>
<html>
<head>
  <title>Slutföra Jobb - Privat</title>
  <link rel="stylesheet" href="css/skapajobb.css">
</head>
<body>
 <form action="php/insert.php" method="POST">
  <table>
   <tr>
    <td>Datum</td>
    <td><input type="date" name="datum" required></td>
   </tr>
   
    <tr>
        <td>Jobb Utfört Av</td>
        <td></td>
    </tr>

   <tr>
    <td>Kund (Obligatorisk)</td>
    <td>
     <input type="text" name="kund" value="" required>
     </tr>
   
   <tr>
    <td>Adress (Obligatorisk)</td>
    <td><input type="text" name="adress" value="" required></td>
   </tr>

   <tr>
    <td>Ort (Obligatorisk)</td>
    <td><input type="text" name="ort" value="" required></td>
   </tr>

   <tr>
    <td>Telefonnummer (Obligatorisk)</td>
    <td><input type="text" name="telefonnummer" value="" required></td>
   </tr>

   <tr>
    <td>E-Post</td>
    <td><input type="email" name="email" value="" required></td>
   </tr>

   <tr>
    <td>Arbetsplats</td>
    <td><input type="text" name="arbetsplats" value="" required></td>
   </tr>

   <tr>
    <td>Spolning Hetvatten</td>
    <td><input type="checkbox" name="hetvatten" value="" required></td>
    <td><input type="text" name="tid" placeholder="Tid" required></td>
   </tr>
 
   <tr>
    <td>Spolning/sugning</td>
    <td><input type="checkbox" name="sugning" value="" required></td>
    <td><input type="text" name="tid" placeholder="Tid" required></td>
   </tr>

   <tr>
    <td>Filmning/TV-Inspektion</td>
    <td><input type="checkbox" name="filmning" value="" required></td>
    <td><input type="text" name="tid" placeholder="Tid" required></td>
   </tr>

   <tr>
    <td>Vattenförbrukning</td>
    <td><input type="checkbox" name="vattenanvändning" value="" required></td>
    <td><input type="text" name="vatten" placeholder="Liter" required></td>
   </tr>

   <tr>
    <td>Tippavgift/Ton</td>
    <td><input type="checkbox" name="tippavgfit" value="" required></td>
    <td><input type="text" name="vatten" placeholder="Vikt" required></td>
   </tr>

   <tr>
    <td>Extrapersonal</td>
    <td><input type="checkbox" name="tippavgfit" value="" required></td>
    <td><input type="text" name="extrapersonal" placeholder="Antal" required></td>
   </tr>

   <tr>
    <td>Jourutryckning</td>
    <td>
    <input type="checkbox" name="jourutryckning" required>
    <label for="jour">Jourutryckning Inkl. 1 TIM ARBETE 2995:-/st + MOMS=3744:-</label>
    </td>
    </tr>

    <tr>
    <td>Rotavdrag</td>
    <td>
    <input type="checkbox" name="rotavdrag" required>
    <label for="rot">Vid ROT-Avdrag tillkommer en avgift på 0.5H i arbetstid</label>
    </td>
    </tr>

    <tr>
    <td>Övrigt</td>
    <td><input type="text" name="övrigt" placeholder="Övrigt" required></td>
   </tr>

   <tr>
    <td>Kunden godkänner</td>
    <td>
    <input type="checkbox" name="kundgod" required>
    </td>
    </tr>

    <tr>
    <td>Kundens underskrift</td>
    <td><input type="text" name="kundsig" required></td>
    </tr>

    <tr>
    <td><input type="submit" value="Rensa" name="clear" id="rensa">
   </tr>

   
   <tr>
    <td><input type="submit" value="Skicka (Tryck två gånger)" name="Skicka"></td>
   </tr>
  
  </table>
 </form>
</body>
</html>

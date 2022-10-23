<!DOCTYPE HTML>
<html>
<head> 
  <title>Skapa Jobb</title>
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
    <td>Spolbil</td>
    <td>
    <label for="spolbil">Spolbil 1</label>
    <input type="checkbox" name="spolbil">
    </td>
    <td>
    <label for="spolbil">Spolbil 2</label>
    <input type="checkbox" name="spolbil">
    </td>
    <td>
    <label for="spolbil">Spolbil 3</label>
    <input type="checkbox" name="spolbil">
    </td>
    <td>
    <label for="spolbil">Spolbil 4</label>
    <input type="checkbox" name="spolbil">
    </td>
    <td>
    <label for="spolbil">Spolbil 5</label>
    <input type="checkbox" name="spolbil">
    </td>
   </tr>

   <tr>
    <td>Typ</td>
    <td>
    <label for="privatperson">Privatperson</label>
    <input type="radio" name="privatperson" required>
    </td>
    <td>    
    <label for="fastighetsbolag">Fastighetsbolag</label>
    <input type="radio" name="privatperson" required></td>
   </tr>

   <tr>
    <td>Kund (Obligatorisk)</td>
    <td>
     <input type="text" name="kund" value="" required>
     </tr>
   
    <tr>
    <td>Beställare</td>
    <td><input type="text" name="beställare" required></td>
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
    <td>Arbetsplats (Obligatorisk)</td>
    <td><input type="text" name="arbetsplats" value="" required></td>
   </tr>

   <tr>
    <td>E-Post</td>
    <td><input type="email" name="email" value="" required></td>
   </tr>
 
   <tr>
    <td><input type="submit" value="Skicka" name="Skicka"></td>
   </tr>
  
  </table>
 </form>
</body>
</html>
<?php
require_once 'dbConnection.php';
if ($conn)
{
  echo "connection successfully";
}
else
{
  echo "Connection not working";
}
if (isset($_POST['register']))
{
    $Confirmation = $_POST['Dsacr'];
    $Placesac = $_POST['Placesac'];
    $Firstn = $_POST['Firstn'];
    $Middlen = $_POST['Middlen'];
    $Lastn = $_POST['Lastn'];

    $Fathername = $_POST['Fathername'];
    $Fathnamemiddle = $_POST['Fathnamemiddle'];
    $Fathnamelast = $_POST['Fathnamelast'];
    $Mothername = $_POST['Mothername'];
    $Mothnamemiddle = $_POST['Mothnamemiddle'];
    $Mothnamelast = $_POST['Mothnamelast'];

    $Bplace = $_POST['Bplace'];
    $Bdate = $_POST['Bdate'];
    $Dsacr = $_POST['Dsacr'];
    $Minister = $_POST['Minister'];

    $Sponserfirstn = $_POST['Sponserfirstn'];
    $Sponserfirstm = $_POST['Sponserfirstm'];
    $Sponserfirstl = $_POST['Sponserfirstl'];
    $Sponsersecondn = $_POST['Sponsersecondn'];
    $Sponsersecondm = $_POST['Sponsersecondm'];
    $Sponsersecondl = $_POST['Sponsersecondl'];
    $Bookno = $_POST['Bookno'];
    $Pageno = $_POST['Pageno'];
    $Lineno = $_POST['Lineno'];

     $query = "INSERT INTO dbo.SavedRecordsTable (
      firstName
      ,midName
      ,lastName
      ,birthDate
      ,placeOfBirth
      ,confirmationORbaptismDate
      ,firstSponsorFirstName
      ,firstSponsorMidName
      ,firstSponsorLastName
      ,secondSponsorFirstName
      ,secondSponsorMidName
      ,secondSponsorLastName
      ,motherFirstName
      ,motherMaidenName
      ,motherMidName
      ,fatherFirstName
      ,fatherMidName
      ,fatherLastName
      ,placeOfBaptismORconfirmation
      ,ministerFullName
      ,bkNum
      ,pageNum
      ,lineNum) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
     $stmt = $conn->prepare($query);
    $stmt->execute ([$Firstn
      ,$Middlen
      ,$Lastn
      ,$Bdate
      ,$Bplace
      ,$Dsacr
      ,$Sponserfirstn
      ,$Sponserfirstm
      ,$Sponserfirstl
      ,$Sponsersecondn
      ,$Sponsersecondm
      ,$Sponsersecondl
      ,$Mothername
      ,$Mothnamelast
      ,$Mothnamemiddle
      ,$Fathername
      ,$Fathnamemiddle
      ,$Fathnamelast
      ,$Placesac
      ,$Minister
      ,$Bookno
      ,$Pageno
      ,$Lineno]);
}

echo "<script>Submitted</script>"
?>
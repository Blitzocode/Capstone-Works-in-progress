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
if (isset($_POST['next']))
{
    $certificatetypeselect = $_POST['certificatetypeselect'];
    // $requesttype = $_POST['requesttype'];
    // $numcopies = $_POST['numcopies'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $birth = $_POST['birth'];
    $country = $_POST['country'];
    $birthprovinces = $_POST['birthprovinces'];
    $birthcity = $_POST['birthcity'];
    $datebaptism = $_POST['datebaptism'];
    $sex = $_POST['sex'];

    $fathlastname = $_POST['fathlastname'];
    $fathname = $_POST['fathname'];
    $fathmiddlename = $_POST['fathmiddlename'];

    $mothlastname = $_POST['mothlastname'];
    $mothname = $_POST['mothname'];
    $mothmiddlename = $_POST['mothmiddlename'];

    $relation = $_POST['relation'];
    $purpose = $_POST['purpose'];
    // $othpresaon = $_POST['othpresaon'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    if ($certificatetypeselect=="KUMPIL")
    {
     $query = "INSERT INTO ConfirTable (
      ,relationshipToTheDocumentOwner
      ,lastName
      ,firstName
      ,middleName
      ,dateOfConfirmation
      ,parentLastName
      ,parentFirstName
      ,parentMiddleName
      ,purposeOfRequest) VALUES (?,?,?,?,?,?,?,?,?) ";
    }
     $stmt = $conn->prepare($query);
    $stmt->execute ([$relation, $lastname, $firstname, $middlename, $datebaptism, $mothlastname, $mothname, $mothmiddlename, $purpose]);
}
?>
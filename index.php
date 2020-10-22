<?php

class User {

    private $name;
    private $lastname;
    public $email;
    public $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function setName ($name) {
        $this->name = $name;
    }
    public function getName () {
        return $this->name ;
    }
    public function setLastname ($lastname) {
        $this->lastname = $lastname;
    }
    public function getLastname () {
        return $this->lastname ;
    }
}

$user1 = new User('cgcolombo@email.it', 'pippo53');
$user1->setName('carlo');
$user1->setLastname('colombo');

$user2 = new User('paola@email.it', 'lott46');
$user2->setName('paola');
$user2->setLastname('pastori');

$user3 = new User('mario55@email.it', 'persico49');
$user3->setName('mario');
$user3->setLastname('rossi');


$users = [$user1, $user2, $user3];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- style -->
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>email</th>
        <th>password</th>
    </tr>
        <?php foreach ($users as $k => $user) { ?>
            <tr>
                <td> <?php echo $k; ?> </td>
                <td> <?php echo $user->getName(); ?> </td>
                <td> <?php echo $user->getLastname(); ?> </td>
                <td> <?php echo $user->email; ?> </td>
                <td> <?php echo $user->password; ?> </td>
            </tr>
        <?php }
    ?>
</table>
</body>
</html>
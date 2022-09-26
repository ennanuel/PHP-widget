<?php

require_once __DIR__ . "/classes/HtmlElement.classes.php";
require_once __DIR__ . "/classes/BaseInput.classes.php";
require_once __DIR__ . "/classes/Form.classes.php";
require_once __DIR__ . "/classes/Button.classes.php";
require_once __DIR__ . "/classes/TextInput.classes.php";
require_once __DIR__ . "/classes/PasswordInput.classes.php";
require_once __DIR__ . "/classes/Select.classes.php";

$form = new Form();
$select = new Select('select', 'Select Something');
$select->addOption('Select', '');
$select->addOption('Book', '1');
$select->addOption('DVD', '2');
$select->addOption('Furniture', '3');
$select->deleteOption('2');

$form->addElement($select);
$form->addElement(new TextInput('firstname', 'First Name'));
$form->addElement(new TextInput('email', 'Email'));
$form->addElement(new PasswordInput('password', 'Password'));
$form->addElement(new Button("Submit"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    echo $form->render();

?>

</body>
</html>
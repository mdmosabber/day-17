
<?php

//        echo "<pre>";
//        print_r($_POST);

//        $firstName = $_POST['first_name'];
//        $lastName = $_POST['last_name'];
//        $fullName = $firstName.' '.$lastName;
//        echo $fullName;
//        $x = 'rohim';
//        echo  isset($x);

            $result='';
            if(isset($_POST['btn'])){

                require_once 'FullName.php';

                $fullName = new FullName();
              $result =  $fullName->makeFullName( $_POST['first_name'], $_POST['last_name']             );
            }

?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="full_name" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SubmiT"></td>
        </tr>
    </table>
</form>





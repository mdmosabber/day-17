<?php
    $result='';
    if(isset($_POST['btn'])){
        require_once 'FullName.php';

        $fullName = new FullName();

        $result = $fullName->myCalculator($_POST);
    }

?>


<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_number" value="<?php echo $_POST['first_number'] ?>"></td>
        </tr>
        <tr>
            <th>Second Name</th>
            <td><input type="text" name="second_number" value="<?php echo $_POST['second_number'] ?>"></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" name="result" value=" <?php echo $result ?> "></td>
        </tr>
        <tr>
            <th></th>
            <td>
            <input type="submit" name="btn" value="+">
            <input type="submit" name="btn" value="-">
            <input type="submit" name="btn" value="*">
            <input type="submit" name="btn" value="/">
            <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>
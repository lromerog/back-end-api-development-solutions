<?php
// Exercise: Revision 1
// This script combines GET and POST usage

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = htmlspecialchars($_POST['color']);
    echo "Your favorite color is $color!";
} else {
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
    ?>
    <form method="post">
        <label for="color">Hi <?php echo $name ? $name : 'guest'; ?>, what is your favorite color?</label>
        <input type="text" name="color" id="color">
        <button type="submit">Submit</button>
    </form>
    <?php
}
?> 
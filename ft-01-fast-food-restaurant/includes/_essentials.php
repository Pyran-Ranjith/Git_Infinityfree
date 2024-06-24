<?php ///require "header.php"; 
?>
<?php
function _redirect($url)
/*
    Aulternative for header(location: ) ffunction
    */
{
    if (!headers_sent()) {
        header('Location: ' . $url);
        exit;
    } else {
        echo '<script type="text/javascript">';
        echo 'window.location.href="' . $url . '";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
        echo '</noscript>';
        exit;
    }
}

function _alert($string = "", $type = "")
{
    return '
        <div class="alert alert-' . $type . '" role="alert">
        ' . $string . '</div> 
        ';
}

function _alert_link($string = "", $type = "info", $href = "", $href_text1 = "", $href_text2 = "")
/*
        Bootatrap alert link
        Parameters: Defauult is blank for all parameters
            1. String to display
            2. Typeof alert primary, secondary, success, 
                danger, warning, info, light, dark  etc. . 
            3. Link 
            4. Link text-1         
            5. Link text-2         
   */
{ //echo "<div class='alert alert-danger bg-danger text-center text-white' role='alert'>enter search keyword first</div>";

    return "
        <div class='alert alert-" . $type . " bg-" . $type . " text-left text-white' role='alert'>
            " . $string . " <a href='" . $href . "' class='alert-link'>" . $href_text1 . "</a>" . $href_text2 . "
        </div>
        ";

    /*         return #
        <div class="alert alert-'.$type.'" role="alert">
            '.$string.' <a href="'.$href.'" class="alert-link">'.$href_text1.'</a>'.$href_text2.'
        </div>
        ';
 */
}

function _bs_inp_hlp_alert($condition = true, $msg_if = "msg_if. .is empty !", $msg_else = "msg_else. .is empty !", $bs_bg = "bg-white", $bs_text = "text-danger")
{
    /*
        Bootatrap Input field help alert.
        Parameters: Defauults are satated in default parameters below.
            1. Condition to disply true or false
                if true disply the giveen alert msg otherwise default msg shon
            2. msg to desplayed when conditon true 
            3. msg to desplayed when conditon false 
            4. Bootstrap coler background         
            5. Bootstrap coler text
        Usage: 
            <?php echo _bs_inp_hlp_alert($help_firstname, "firstname is invalid", $help_firstname_text, "bg-white", "text-danger"); ?>
            <?php echo _bs_inp_hlp_alert(); ?>
   */
    //$msg_if =  "<div class='bg-white p-2 text-danger'>" .$msg_if. "</div>" ;
    $msg_if =  "<div class='" . $bs_bg . " p-2 " . $bs_text . "'>" . $msg_if . "</div>";
    return  $condition  ? $msg_if : "$msg_else";
}

function _alert_conditional($condition = true, $msg_if = "msg_if. .is empty !", $msg_else = "msg_else. .is empty !", $bs_bg = "bg-white", $bs_text = "text-danger")
{
    /*
        Bootatrap Input field help alert.
        Parameters: Defauults are satated in default parameters below.
            1. Condition to disply true or false
                if true disply the giveen alert msg otherwise default msg shon
            2. msg to desplayed when conditon true 
            3. msg to desplayed when conditon false 
            4. Bootstrap coler background         
            5. Bootstrap coler text
        Usage: 
            <?php echo _bs_inp_hlp_alert($help_firstname, "firstname is invalid", $help_firstname_text, "bg-white", "text-danger"); ?>
            <?php echo _bs_inp_hlp_alert(); ?>
   */
    //$msg_if =  "<div class='bg-white p-2 text-danger'>" .$msg_if. "</div>" ;
    $msg_if =  "<div class='" . $bs_bg . " p-2 " . $bs_text . "'>" . $msg_if . "</div>";
    return  $condition  ? $msg_if : "$msg_else";
}

function _require($file, $format = "")
{
    try {
        if (!file_exists($file))
            throw new Exception($file . ' does not exist');
        else
            require_once($file);
    } catch (Exception $e) {
        if ($format == "html") {
            // Html alert
            echo ' <h3>  Message : ' . $e->getMessage() . '</h3>';
            echo ' <h3>  Code : ' . $e->getCode() . '</h3>';
        } elseif ($format == "bootstrap") {
            // Bootstrap alert 
            echo '<br> <div class="alert alert-danger">  Code : ' . $e->getCode() . '</div>';
        } else {
            // Plane alert
            echo "<br>Message : " . $e->getMessage();
            echo "<br>Code : " . $e->getCode();
        }
    }
}

?>

<!-- <?php //require "footer.php"; 
        ?> -->
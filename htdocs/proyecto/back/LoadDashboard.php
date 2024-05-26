<?php
//Funciones de carga, es importante porque en dashboard.php solo deberia haber front, no funciones
function reloadList() {
    $dirArray = array_diff(scandir("JSON"),array('.','..'));
    foreach($dirArray as $element){
        $issuePath = "JSON/".$element;
        $issue = readOne($issuePath);
        //echo "<button id=".$issue["IssueID"]." class=\"grid-item button\">".$issue["IssueID"]."</button>";
        echo "<form action=\"back/showIssue.php\" method=\"get\">
        <input type=\"submit\" class=\"grid-item button\" name=\"IssueID\" value=\"".$issue["IssueID"]."\">
    </form>";
    }
}
?>


<?
$visitCounter = 0;
if (isset($_COOKIE["visitCounter"]))
    $visitCounter = ($_COOKIE["visitCounter"]);
    $visitCounter++;
//$lastVisit = "";
/*if (isset($_COOKIE["lastVisit"]))
    $lastVisit = date("d-m-Y H-i-s", $_COOKIE["lastVisit"]);
//if(date("d-m-Y", $_COOKIE["lastVisit"]) != date("d-m-Y")){
    setcookie("visitCounter", $visitCounter, 0x7FFFFFFF);
    setcookie("lastVisit", time(), 0x7FFFFFFF);
//} */
$lastVisit = NULL;
if (!isset($_COOKIE["lastVisit"])){
    setcookie("lastVisit", time(), 0x7FFFFFFF);
    setcookie("visitCounter", $visitCounter, 0x7FFFFFFF);
    $lastVisit = date("d-m-Y H-i-s", $_COOKIE["lastVisit"]);
    } else { $lastVisit = date("d-m-Y H-i-s", $_COOKIE["lastVisit"]);
    if (date("d-m-Y", $_COOKIE["lastVisit"]) != date("d-m-Y")) {
        $lastVisit = date("d-m-Y H-i-s", $_COOKIE["lastVisit"]);
        setcookie("lastVisit", time(), 0x7FFFFFFF);
        setcookie("visitCounter", $visitCounter, 0x7FFFFFFF);
    }
}
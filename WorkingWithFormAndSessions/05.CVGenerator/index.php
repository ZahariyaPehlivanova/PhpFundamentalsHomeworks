<?php
if (!isset($_GET["submit"])) {
    require_once "form.php";
    exit;
}
if(isset($_GET['generate'])){
    
    $firstName = trim($_GET['firstName']);
    $lastName = trim($_GET['lastName']);
    $email = trim($_GET['email']);
    $phone = trim($_GET['phone']);
    $gender = trim($_GET['gender']);
    $birthDate =trim($_GET['birthDate']);
    $nationality = trim($_GET["nationality"]);
    $companyName = trim($_GET["companyName"]);
    $companyFrom = trim($_GET["from"]);
    $companyTo = trim($_GET["to"]);

    $languages = [];
    for ($i = 0; $i < count($_GET["programLanguage"]); $i++) {
        if (empty(trim($_GET["programLanguage"][$i])))
            continue;
        $languages[$_GET["programLanguage"][$i]] = $_GET["languageLevel"][$i];
    }
    $otherLang = [];
    for ($i = 0; $i < count($_GET["otherLang"]); $i++) {
        if (empty(trim($_GET["otherLang"][$i])))
            continue;
        $otherLang[$_GET["otherLang"][$i]] = [
            "comprehension" => $_GET["comprehension"][$i],
            "reading" => $_GET["reading"][$i],
            "writing" => $_GET["writing"][$i]
        ];
    }
    $drivingLicense = $_GET["drivingLicense"];
    $formData = [];
    $formData["firstName"] = $firstName;
    $formData["lastName"] = $lastName;
    $formData["email"] = $email;
    $formData["phoneNumber"] = $phone;
    $formData["gender"] = $gender;
    $formData["birthDate"] = $birthDate;
    $formData["nationality"] = $nationality;
    $formData["companyName"] = $companyName;
    $formData["companyFrom"] = $companyFrom;
    $formData["companyTo"] = $companyTo;
    $formData["languages"] = $languages;
    $formData["speakingLanguages"] = $otherLang;
    $formData["drivingLicense"] = $drivingLicense;
}
require_once "view.php";
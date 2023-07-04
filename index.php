<?php

$password = readline("inserisci una password: ");

function checkRuleOne($password) {
    if (strlen($password) >= 10) {
        return true;
    }
    return false;
}

function checkRuleTwo($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    return false;
}

function checkRuleThree($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;
        }
    }
    return false;
}

function checkRuleFour($password) {
    $special = ["@", "-", "_", "&", "$", "!", "?", "*", "#", "§", "£"];

    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $special)) {
            return true;
        }
    }
    return false;
}

$ruleOne = checkRuleOne($password);
$ruleTwo = checkRuleTwo($password);
$ruleThree = checkRuleThree($password);
$ruleFour = checkRuleFour($password);


if ($ruleOne && $ruleTwo && $ruleThree && $ruleFour) {
    var_dump("Puoi procedere, password accettata");
} else {
    var_dump("Riprova, password non accettata");
}
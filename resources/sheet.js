$(document).ready(function(){
    calculateHealth();
    calculateWillPower();
    calculateDefense();
});

function calculateHealth(){
    stamina = parseInt($("#attributeStamina").val());
    size = parseInt($("#infoSize").val());
    
    maxHealth = (stamina + size) * 6;
    $("#statsMaxStatus").val(maxHealth);
}

function calculateWillPower(){
    resolve = parseInt($("#attributeResolve").val());
    composure = parseInt($("#attributeComposure").val());
    
    willPower = resolve+composure;
    $("#statsMaxWillPower").val(willPower);
    calculateHumanity();
    calculateNeuralCharge();
}

function calculateHumanity(){
    willPower = parseInt($("#statsMaxWillPower").val());
    
    humanity = willPower*5;
    $("#statsMaxHumanity").val(humanity);
}

function calculateNeuralCharge(){
    willPower = parseInt($("#statsMaxWillPower").val());
    
    humanity = willPower*3;
    $("#statsMaxNeuralCharge").val(humanity);
}

function calculateDefense(){
    wits = parseInt($("#attributeWits").val());
    dex = parseInt($("#attributeDex").val());
    
    defense = (wits+dex)*3;
    $("#infoDefense").val(defense);
}
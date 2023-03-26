var modal;
var background;

var btnG;
var btnSG;
var btnSSG;

var rechercheGroupe;

var aliments;

var AlimentSelectionner;
var alimentActuelle;
var alimentInput;

class Aliment{
    constructor(id, nom, groupe, sgroupe, ssgroupe){
        this.id = id;
        this.nom = nom;
        this.groupe = groupe;
        this.sgroupe = sgroupe;
        this.ssgroupe = ssgroupe;
    }
}

$(document).ready(init);

function init() {
    // Get the modal
    modal = document.getElementById("modal");
    background = document.getElementById("test-bg");
    // Get the button that opens the modal
    btnG = document.getElementById("button-groupe");
    btnSG = document.getElementById("button-sgroupe");
    btnSSG = document.getElementById("button-ssgroupe");
    rechercheGroupe = $('#input-recherche');

    $(".bloc-filtre-groupe").show();
    $(".bloc-filtre-sgroupe").hide();
    $(".bloc-filtre-ssgroupe").hide();

    $(".onglet-groupe").addClass("active");

    $(".blocage").on('click', function(){
        $('#selection-aliments').focus();
    })

    modalInitialisation();

    recupererGroupe();
    recupererAliments();
    alimentInput = $('.aliment-input');

    $('.flash-error').on('click', function(e){
        e.target.style.display = "none";
    })

    alimentInput.change( function(event) {
        let options = alimentInput.children('option[value="'+event.target.value+'"]');
        for(var i = 0; i < options.length; ++i){
            options[i].disabled = true;
        }
    });

    AlimentSelectionner = [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1];
    alimentActuelle = 0;
    alimentInput[alimentActuelle].classList.add("active");
    $('#next-aliment').on('click', setAliment)
}

function modalInitialisation() {
    window.onclick = function (event) {
        if (event.target == modal || event.target == background) {
            modal.style.display = "none";
            background.style.display = "none";

            $(".filtre").hide();
            rechercheGroupe.off('keyup');
        }
    };

    ongletModalInitialisation();
}

function modalApparition(event) {
    if(event.target == btnG) {
        $(".bloc-filtre-groupe").show();
        rechercheGroupe.on('keyup', filtrageGroupe);
    }
    else if(event.target == btnSG){
        $(".bloc-filtre-sgroupe").show();
        rechercheGroupe.on('keyup', filtrageSGroupe);
    }
    else{
        $(".bloc-filtre-ssgroupe").show();
        rechercheGroupe.on('keyup', filtrageSSGroupe);

    }
    modal.style.display = "flex";
    background.style.display = "block";
    rechercheGroupe.focus()
}

function ongletModalInitialisation(){
    $(".onglet-groupe").on('click', function(){
        $(".bloc-filtre-groupe").show();
        $(".bloc-filtre-sgroupe").hide();
        $(".bloc-filtre-ssgroupe").hide();

        rechercheGroupe.off('keyup');
        rechercheGroupe.on('keyup', filtrageGroupe);
        rechercheGroupe.focus()

        $(".onglet-groupe").addClass("active");
        $(".onglet-sgroupe").removeClass("active");
        $(".onglet-ssgroupe").removeClass("active");

    })

    $(".onglet-sgroupe").on('click', function(event){
        $(".bloc-filtre-groupe").hide();
        $(".bloc-filtre-sgroupe").show();
        $(".bloc-filtre-ssgroupe").hide();

        rechercheGroupe.off('keyup');
        rechercheGroupe.on('keyup', filtrageSGroupe);
        rechercheGroupe.focus()

        $(".onglet-groupe").removeClass("active");
        $(".onglet-sgroupe").addClass("active");
        $(".onglet-ssgroupe").removeClass("active");
    })

    $(".onglet-ssgroupe").on('click', function(){
        $(".bloc-filtre-groupe").hide();
        $(".bloc-filtre-sgroupe").hide();
        $(".bloc-filtre-ssgroupe").show();
        rechercheGroupe.off('keyup');
        rechercheGroupe.on('keyup', filtrageSSGroupe);
        rechercheGroupe.focus()

        $(".onglet-groupe").removeClass("active");
        $(".onglet-sgroupe").removeClass("active");
        $(".onglet-ssgroupe").addClass("active");
    })
}

function recupererGroupe() {
    $.ajax({
        async: false,
        url: "/php/getGroupes.php",
        dataType: "JSON",
        success: function (result) {
            setGroupe(result.groupe);
            setSGroupe(result.sgroupe);
            setSSGroupe(result.ssgroupe);
        },
    });
}

function setGroupe(groupe) {
    var elementGroupe = "";
    for (i = 0; i < groupe.length; ++i) {
        elementGroupe += createACheckBox(
            groupe[i].id,
            groupe[i].nom,
            "check-groupe"
        );
    }

    $("#liste-groupe").append(elementGroupe);
}

function setSGroupe(groupe) {
    var elementGroupe = "";
    for (i = 0; i < groupe.length; ++i) {
        elementGroupe += createACheckBox(
            groupe[i].id,
            groupe[i].nom,
            "check-sgroupe"
        );
    }

    $("#liste-sgroupe").append(elementGroupe);
}

function setSSGroupe(groupe) {
    var elementGroupe = "";
    for (i = 0; i < groupe.length; ++i) {
        elementGroupe += createACheckBox(
            groupe[i].id,
            groupe[i].nom,
            "check-ssgroupe"
        );
    }

    $("#liste-ssgroupe").append(elementGroupe);
}

function createACheckBox(num, name, className) {
    return (
        '<li><div class="bloc-check border-beige-dark thin"> <input type="checkbox" class="button-checkbox ' +
        className +
        '" name="' +
        num +
        '"> <label for="' +
        num +
        '" class="bt trois regular">' +
        name +
        "</label> </div></li>"
    );
}

function filtrageGroupe() {
    var input, filter, ul, li, a, i, txtValue;

    input = $("#input-recherche");
    filter = input.val().toUpperCase();
    ul = $("#liste-groupe");
    li = ul.children("li");

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("div")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function filtrageSGroupe() {
    var input, filter, ul, li, a, i, txtValue;

    input = $("#input-recherche");
    filter = input.val().toUpperCase();
    ul = $("#liste-sgroupe");
    li = ul.children("li");

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("div")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function filtrageSSGroupe() {
    var input, filter, ul, li, a, i, txtValue;

    input = $("#input-recherche");
    filter = input.val().toUpperCase();
    ul = $("#liste-ssgroupe");
    li = ul.children("li");

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("div")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function recupererAliments(){
    $.ajax({ 
        url: "/php/getAliments.php",
        type:"POST",
        contentType: "application/x-www-form-urlencoded",
        dataType: "JSON",
        success: function(result){
            ajouterAliments(result);
            rangerAliments(result);
        },
        error: function(result){
            console.log(result)
        }
        
    })
}

var alimentGroupe;
var alimentSGroupe;
var alimentSSGroupe;
var alimentSelectionner;

function rangerAliments(liste){
    alimentGroupe = new Map();
    alimentSGroupe = new Map();
    alimentSSGroupe = new Map();

    alimentSelectionner = new Set();
    
    for(let i = 0; i < liste.length; ++i){
        var alimTmp = new Aliment(liste[i].id, liste[i].nom_fr, liste[i].groupe_id, liste[i].sous_groupe_id, liste[i].sous_sous_groupe_id);
        if(alimentGroupe.has(alimTmp.groupe)){
            alimentGroupe.get(alimTmp.groupe).push(alimTmp);
        }
        else{
            alimentGroupe.set(alimTmp.groupe, [alimTmp]);
        }

        if(alimentSGroupe.has(alimTmp.sgroupe)){
            alimentSGroupe.get(alimTmp.sgroupe).push(alimTmp);
        }
        else{
            alimentSGroupe.set(alimTmp.sgroupe, [alimTmp]);
        }

        if(alimentSSGroupe.has(alimTmp.ssgroupe)){
            alimentSSGroupe.get(alimTmp.ssgroupe).push(alimTmp);
        }
        else{
            alimentSSGroupe.set(alimTmp.ssgroupe, [alimTmp]);
        }
    }

    $(".button-checkbox").on("click", filtrerAliments);
}

function ajouterAliments(liste){
    $("#aliments-filtrer").empty();
    for(i = 0; i < liste.length; ++i){
            $("#aliments-filtrer").append(createAnOption(liste[i].id, liste[i].nom_fr));
    }
}

function filtrerAliments(){
    alimentSelectionner.clear();

    var tmp = $(".check-groupe:checked");
    for(var i = 0; i < tmp.length; ++i ){
        let indicGroupe = alimentGroupe.get(parseInt(tmp[i].name));
        for(var m of indicGroupe){
            alimentSelectionner.add(m);
        }
    }

    tmp = $(".check-sgroupe:checked");
    for(var i = 0; i < tmp.length; ++i ){
        let indicGroupe = alimentSGroupe.get(parseInt(tmp[i].name));
        for(var m of indicGroupe){
            alimentSelectionner.add(m);
        }
    }

    tmp = $(".check-ssgroupe:checked");
    for(var i = 0; i < tmp.length; ++i ){
        let indicGroupe = alimentSSGroupe.get(parseInt(tmp[i].name));
        for(var m of indicGroupe){
            alimentSelectionner.add(m);
        }
    }

    updateAliment();
}

function updateAliment(){
    $("#aliments-filtrer").empty();
    for(var alim of alimentSelectionner){
        $("#aliments-filtrer").append(createAnOption(alim.id, alim.nom));
    }
}


function createAnOption(num, name){
    return '<option value="'+name+'" name="'+num+'"></option>';
}

function setAliment(){
    if($("#selection-aliments").val() != ""){
        var options = alimentInput.children('option[value="'+$('datalist option[value="'+$("#selection-aliments").val()+'"]').attr('name')+'"]');
        console.log(options);
        for(var i = 0; i < options.length; ++i){
            if(options[i].parentNode == alimentInput[alimentActuelle]){
                options[i].selected = true;
            }
            options[i].disabled = true;
        }

    }
    suivantInput();
}

function suivantInput(){
    alimentInput[alimentActuelle].classList.remove("active");
    $("#selection-aliments").val("");
    alimentActuelle = (alimentActuelle+1)%alimentInput.length;
    alimentInput[alimentActuelle].classList.add("active");
}



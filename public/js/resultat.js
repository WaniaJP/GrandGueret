google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(init);

const bg = "#ffffff";
const settingBG =  {
    fill: bg,
    fillOpacity: 1
  };
function init(){
    $.ajax({
        async: false,
        url: "/php/getAlimChoisi.php",
        dataType: "JSON",
        success: function (result) {
            console.log(result);
            tauxSucre(result);
            alimentCalorique(result);
        },
    });

    $.ajax({
        async: false,
        url: "/php/getVilleParSonde.php",
        dataType: "JSON",
        success: function (result) {
            console.log(result);
            villeParSonde(result);
        },
    });
}

function villeParSonde(liste){

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Ville');
    data.addColumn('number', 'Nombre de sondés');

    for (i=0; i<liste.length; ++i) {
        data.addRow(creerTab(liste[i].ville, liste[i].nombre));
    }

      var options = {
        title: 'Nombre de sondés par ville',
        backgroundColor: settingBG
      };

      var chart = new google.visualization.PieChart(document.getElementById('bloc-ville'));
      chart.draw(data, options);

}

function tauxSucre(liste){
    var data = new google.visualization.DataTable();
    data.addColumn('number', 'Taux de sucre');
    data.addColumn('number', 'Apparition');
    

    for (i=0; i<liste.length; ++i) {
        data.addRow(creerTab(liste[i].nombre, parseFloat(liste[i].sucre)));
    }

      var options = {
        title: "Apparition d'un aliment en fonction de son taux de sucre",
        vAxis: {title: 'Taux de sucre', minValue: 0, maxValue: 1},
          hAxis: {title: "Nombre d'apparition", minValue: 0, maxValue: 4},
          backgroundColor: settingBG

      };


      var chart = new google.visualization.ScatterChart(document.getElementById('bloc-alim-sucre'));
      chart.draw(data, options);
}

function alimentCalorique(liste){
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Aliment');
    data.addColumn('number', 'Taux de gras');

    for (i=0; i<liste.length; ++i) {
        data.addRow(creerTab(liste[i].nom_fr, parseFloat(liste[i].gras)*100));
    }
    var options = {
        title: 'Aliment les plus caloriques',
        backgroundColor: settingBG
      };

    var chart = new google.visualization.BarChart(document.getElementById("bloc-alim-calorique"));
    chart.draw(data, options);
}



function creerTab( nom, val){
    return [nom, val];
}
$(document).ready(function () {
    $('#ordersamsung').click(function () {
        localStorage.setItem("model", "samsung");
        location.href='.?stranica=kupovina';
    });
    $('#orderiphone').click(function () {
        localStorage.setItem("model", "iphone");
        location.href='.?stranica=kupovina';
    });
    $('#orderhuawei').click(function () {
        localStorage.setItem("model", "huawei");
        location.href='.?stranica=kupovina';
    });

    
      let selected = localStorage.getItem("model");
      if (selected!=null) {
          $('#model').val(selected);
          let cenaPrikaz = document.getElementById('cenaPrikaz');
          if (selected === 'iphone') {
              cenaPrikaz.innerHTML = "Cena: 60000 RSD"
          }else if(selected === 'samsung') {
             cenaPrikaz.innerHTML = "Cena: 50000 RSD";
          }else if(selected === 'huawei') {
              cenaPrikaz.innerHTML = "Cena: 40000 RSD";
         }
     }
});

function myFunction() {
    
    let cenaTelefona;
    let valuta;
    

    let cenaPrikaz = document.getElementById('cenaPrikaz');
    var menu = document.getElementById("model");

    var selected_option = menu.options[menu.selectedIndex].value;
    if (selected_option === 'IP') {
        console.log('1')
        cenaTelefona = 60000;
    }
    else if (selected_option === 'SA') {
        cenaTelefona = 50000;
    }
    else if (selected_option === 'HU') {
        cenaTelefona = 40000;
    }
    else {
          cenaTelefona = 0;
      }


    
    var menu2 = document.getElementById("valutaPlacanja");
    var valutaSelected = menu2.options[menu2.selectedIndex].value;
    //let valutaSelected = $('#valutaPlacanja :selected').val();
    console.log(valutaSelected, 'selected')

    if (valutaSelected === 'RSD') {
        valuta = 'RSD';
        cenaPrikaz.innerHTML="Cena: " + cenaTelefona + ' ' + valuta;
    }else if(valutaSelected === 'EUR'){
        valuta = 'EUR';
        let cenaeur = cenaTelefona/118;
        cenaPrikaz.innerHTML="Cena: " + cenaeur.toFixed(2) + ' ' + valuta;
    }else if (valutaSelected === 'USD'){
        valuta = 'USD';
        let cenausd = cenaTelefona/111;
        cenaPrikaz.innerHTML="Cena: " + cenausd.toFixed(2) + ' ' + valuta;

      
        

    }
}

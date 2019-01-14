var podrucja = document.getElementsByClassName("hover");
var fbihbutton = document.getElementById("prvi");
var rsbutton = document.getElementById("drugi");
var FBIHmap = document.getElementById("9");
var RSmap = document.getElementById("10");
var bosnjakButton = document.getElementById("bosnjak");
var hrvatButton = document.getElementById("hrvat");


hide();

function show ()
{
    bosnjakButton.style.visibility = "visible";
    hrvatButton.style.visibility = "visible";

}

function hide ()

{
    bosnjakButton.style.visibility = "hidden";
    hrvatButton.style.visibility = "hidden";
}





RSmap.addEventListener("click",function(){          


    hide();    
    $.get('Script/skript.php?id=Srbin', function(data) {
        $('#tabela').html(data);
    });
    $.get('Script/cifre.php?id=Srbin', function(data) {
        $('#brojevi').html(data);
    });

    $.get('Script/dropdownrs.php?id=Srbin', function(data) {
        $('#opcije').html(data);
    });

}) 



   


    FBIHmap.addEventListener("click",function(){          

        show();
        $.get('Script/skript2.php?id=Bošnjak', function(data) {
            $('#tabela').html(data);
        });

        $.get('Script/cifree.php', function(data) {
            $('#brojevi').html(data);
        });
        $.get('Script/dropdownfbih.php', function(data) {
            $('#opcije').html(data);
        });
    }) 


 // FUNKCIJA KAD KLIKNES NA MAPU DA SE ISPISE TABELA O GLASOVIMA
fbihbutton.addEventListener("click",function(){
    
        show();
        $.get('Script/skript2.php?id=Bošnjak' , function(data) {
            $('#tabela').html(data);
        });
        $.get('Script/cifre.php', function(data) {
            $('#brojevi').html(data);
        });
        $.get('Script/dropdownfbih.php', function(data) {
            $('#opcije').html(data);
        });

}); // KAD KLIKNES NA FBIH DUGME DA PRIKAZE TABELU
rsbutton.addEventListener("click",function(){

        hide();
        $.get('Script/skript.php?id=Srbin', function(data) {
            $('#tabela').html(data);
        });
        $.get('Script/cifre.php?id=Srbin', function(data) {
            $('#brojevi').html(data);
        });
        $.get('Script/dropdownrs.php?id=Srbin', function(data) {
            $('#opcije').html(data);
        });

}) // KAD KLIKNES NA RS DUGME DA PRIKAZE TABELU

bosnjakButton.addEventListener("click",function(){

    $.get('Script/skript.php?id=Bošnjak', function(data) {
        $('#tabela').html(data);
    });

})
hrvatButton.addEventListener("click",function(){

    $.get('Script/skript.php?id=Hrvat', function(data) {
        $('#tabela').html(data);
    });

})
FBIHmap.addEventListener("click",function(){ 
        FBIHmap.style.fill = "#f7c800";
        fbihbutton.style.backgroundColor = "#f7c800";
        
        
        rsbutton.style.backgroundColor = "#eeeeee";
        RSmap.style.fill = "#2a0e80";
;}) // PROMIJENI BOJU DUGMETA FBIH I FBIH KAD KLIKNES MAPU
fbihbutton.addEventListener("click",function(){
    
        FBIHmap.style.fill = "#f7c800";
        fbihbutton.style.backgroundColor = "#f7c800";
        
        
        rsbutton.style.backgroundColor = "#eeeeee";
        RSmap.style.fill = "#2a0e80";
;}) // PROMIJENU BOJU DUGMETA I FBIH KAD KLIKNES DUGME 
RSmap.addEventListener("click",function(){
    
        RSmap.style.fill = "#f7c800";
        rsbutton.style.backgroundColor = "#f7c800";
        
        
        fbihbutton.style.backgroundColor = "#eeeeee";
        FBIHmap.style.fill = "#2a0e80";
;}) // PROMIJENI BOJU DUGMETA RS I RS KAD KLIKNES MAPU
rsbutton.addEventListener("click",function(){
    
        RSmap.style.fill = "#f7c800";
        rsbutton.style.backgroundColor = "#f7c800";
        
        
        fbihbutton.style.backgroundColor = "#eeeeee";
        FBIHmap.style.fill = "#2a0e80";
;}) // PROMIJENI BOJU DUGMETA RS I RS KAD KLIKNES DUGME

function uradinesto()
{

        hide();
    $.get('Script/dropdowntabela.php?id=' +$("#opcije option:selected").text() , function(data) {
        $('#tabela').html(data);
    });

    $.get('Script/dropdowntabelacifre.php?id='+$("#opcije option:selected").text() , function(data) {
        $('#brojevi').html(data);
    });
}


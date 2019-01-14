var podrucja = document.getElementsByClassName("hover");
var fbihbutton = document.getElementById("prvi");
var rsbutton = document.getElementById("drugi");





ispisipodatke(); // POZOVI FUNKCIJU



   
function  ispisipodatke () { 
for (var i= 0; i < podrucja.length; i++)
{
    podrucja[i].addEventListener("click",function(){          

        
        $.get('Script/skript.php?id=', function(data) {
            $('#tabela').html(data);
        });
    }) }


}; // FUNKCIJA KAD KLIKNES NA MAPU DA SE ISPISE TABELA O GLASOVIMA
fbihbutton.addEventListener("click",function(){
    
        
        $.get('Script/skript.php?id=' + '9', function(data) {
            $('#tabela').html(data);
        });

}); // KAD KLIKNES NA FBIH DUGME DA PRIKAZE TABELU
rsbutton.addEventListener("click",function(){
    
        
        $.get('Script/skript.php?id=' + '10', function(data) {
            $('#tabela').html(data);
        });

}) // KAD KLIKNES NA RS DUGME DA PRIKAZE TABELU
fbihbutton.addEventListener("click",function(){
    
        document.getElementById("1").style.fill = "#f7c800";
        document.getElementById("4").style.fill = "#f7c800";
        document.getElementById("5").style.fill = "#f7c800";
        document.getElementById("3").style.fill = "#f7c800";
        document.getElementById("2").style.fill = "#f7c800";




        fbihbutton.style.backgroundColor = "#f7c800";
        
        
        rsbutton.style.backgroundColor = "#eeeeee";
        document.getElementById("6").style.fill = "#2a0e80";
        document.getElementById("7").style.fill = "#2a0e80";
        document.getElementById("8").style.fill = "#2a0e80";


;}) // PROMIJENU BOJU DUGMETA I FBIH KAD KLIKNES DUGME 
rsbutton.addEventListener("click",function(){
    
     
        rsbutton.style.backgroundColor = "#f7c800";        
        document.getElementById("7").style.fill = "#f7c800";
        document.getElementById("6").style.fill = "#f7c800";
        document.getElementById("8").style.fill = "#f7c800";
        
        
        fbihbutton.style.backgroundColor = "#eeeeee";
        
        document.getElementById("1").style.fill = "#2a0e80";
        document.getElementById("4").style.fill = "#2a0e80";
        document.getElementById("5").style.fill = "#2a0e80";
        document.getElementById("3").style.fill = "#2a0e80";
        document.getElementById("2").style.fill = "#2a0e80";

        


;}) // PROMIJENI BOJU DUGMETA RS I RS KAD KLIKNES DUGME
for (var i = 0 ; i < podrucja.length; i++)
{

        podrucja[i].addEventListener("click",function(){
            
            
                for (var i = 0; i < podrucja.length; i++)
                {
                    podrucja[i].style.fill = "#2a0e80";
                }
                this.style.fill = "#f7c800";

                
        $.get('Script/skript.php?id=' +  $(this).attr('id'), function(data) {
            $('#tabela').html(data);
        });

       
       

        $.get('Script/dropdown.php?id=' +  $(this).attr('id'), function(data) {
            $('#opcije2').html(data);
        });
        
        
        
        



            ;})

} // KAD KLIKNES NA PODRUCJE DA SE ISPISU PODACI 


$("#jedinica").change(function() {

   
   
    $.get('Script/skriptjedinica.php?id=' +  id, function(data) {
        $('#jedinica2').html(data);
    });


  });




  function stranka (regija,stranka)

  {
    $.get('Script/skriptstranka.php?regija=' + regija + '&stranka=' + stranka, function(data) {
        $('#tabela').html(data);
    });
  }


  function kakosi ()
{

    $.get('Script/dropdown2.php' , function(data) {
        $('#opcije').html(data);
    });

}

kakosi();


function uradinesto(){


    $.get('Script/dropdown3.php?id=' + $( "#opcije option:selected" ).attr('id')  , function(data) {
        $('#opcije2').html(data);
    });


}

 function uradinesto2()
 {

    $.get('Script/dropdowntabela.php?id=' + $( "#opcije2 option:selected" ).text()  , function(data) {
        $('#tabela').html(data);
    });
    

 }


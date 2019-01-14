var podrucja = document.getElementsByClassName("hover");
var rsbutton = document.getElementById("drugi");






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
        $.get('Script/dropdown.php?id=' + $(this).attr('id'), function(data) {
            $('#opcije').html(data);
        });
        $.get('Script/dropdowntabelacifre.php?id='+$("#opcije option:selected").text() , function(data) {
            $('#brojevi').html(data);
        });


            ;})

} // KAD KLIKNES NA PODRUCJE DA SE ISPISU PODACI 


function kakosi ()
{

    $.get('Script/dropdown2.php' , function(data) {
        $('#opcije').html(data);
    });

}

kakosi();


function uradinesto()
{

        
    $.get('Script/dropdowntabela.php?id=' +$("#opcije option:selected").text() , function(data) {
        $('#tabela').html(data);
    });

    $.get('Script/dropdowntabelacifre.php?id='+$("#opcije option:selected").text() , function(data) {
        $('#brojevi').html(data);
    });


    
    
}
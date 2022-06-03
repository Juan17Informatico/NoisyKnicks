//ejecutar funcion
document.getElementById("btn_open").addEventListener("click", open_close_menu);

//declaracion de variables
var menu_side = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

//ocultar y mostrar menu
    function open_close_menu(){
        body.classList.toggle("body_move");
        menu_side.classList.toggle("menu_side_move");
    }
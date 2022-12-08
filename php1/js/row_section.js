$(".roll_left").click(function(){
    $(".animal_roll li").eq(0).insertAfter(".animal_roll li:last-child");
});
$(".roll_right").click(function(){
    $(".animal_roll li").eq(-1).insertBefore(".animals_roll li:first-child")
});
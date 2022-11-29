var x = 10;
// function is not consider as block
function sleep(){
    var x = 5;
}
// block
if(true){
    var x = 33;
}
sleep();
console.log(x);
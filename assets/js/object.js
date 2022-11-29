let car = {
    name: "Toyota",
    model: "X16",
    owner: "foyez",
    speed: function() {
        return 15;
    }
};
console.log(car.speed());

const person = {
    firstName: "John",
    lastName : "Doe",
    id       : 5566,
    fullName : function() {
      return this.firstName + " " + this.lastName;
    }
  };
console.log(person.fullName());
console.log(person['id']);

const num = new Number(5);
console.log(num);
document.getElementById('object_text').innerHTML = "Name: " + car.name +" speed: "+car.name;

// String
let text = "We are the so-called from the north.";
document.getElementById('str_length').innerHTML =  text.length;
document.getElementById('str_slice').innerHTML =  text.slice(3, 15);
document.getElementById('str_slice').innerHTML =  text.slice(5);
document.getElementById('str_sub').innerHTML =  text.substring(7, 13);
document.getElementById('str_replace').innerHTML =  text.replace(/NORTH/i, 'south');



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

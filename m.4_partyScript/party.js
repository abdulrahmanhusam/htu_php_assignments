// Security Gaurd, allows people to enter to a party, only people between 18 and 35 years old can enter the party

const minage=18;
const maxage=35;
// Loop through number of people.
do {
    // ask each user about his/her age.
    // if younger than 18, print: you are too young
    // if older than 35, print: you are too old
    // if between 18 and 35, ask the user about his/her name and welcome the user to the party.
    let age= prompt("what is your age?")
    if (age>=minage && age<=maxage ){

        let name=prompt("what is your name");
        alert("Welcome to the party: "+name);
    }
    else if (age<minage){
        alert("you are too young");
    break;
    }
    else if (age>maxage){
        alert("you are too old");
        break;
    }
  } while (confirm("is there anyone else?"));
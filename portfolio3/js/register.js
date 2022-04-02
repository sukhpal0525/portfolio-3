var dateCheck = function(event) {
      let current = new Date();
      console.log("test");
      let Input = new Date(event.target.valueAsNumber);
      let dateToday = new Date(Date.UTC(current.getUTCFullYear(), current.getUTCMonth(), current.getUTCDate()));
//    let testTime = Input.getTime() + 1;

      if (Input.getTime() == (dateToday.getTime() + (1000*60*60*24*1))) {
        alert("This is a valid day.");
 	} 
      else if (Input.getTime() > dateToday.getTime()) {
        alert("This is a valid day.");
	}
      else if (Input.getTime() <= dateToday.getTime()) {
        alert("Sorry, this is not a valid day.");
	}
    }

function buttonClick() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let emailConfirm = document.getElementById("confirm-email").value;
  let password = document.getElementById("password").value;
  let date = document.getElementById("calender").value;
  let mobile = document.getElementById("mobile").value;
  let duration = document.getElementById("duration").value;
  let enquire = document.getElementById("enquire").value;

  let emailFirst = JSON.stringify(email);
  let emailSecond = JSON.stringify(emailConfirm);
    
  if (JSON.stringify(email) != JSON.stringify(emailConfirm)) {
      alert("\n" + "-------- [ERROR] --------" + "\n" + "Your emails do not match.");
  } else {
      alert("\n" + "--------------------- [To: 200045962@aston.ac.uk] ---------------------" + "\n" + "Name: " + name + "\n" + "Email: " + email + "      Pass: " + password + "\n" + "Mobile: " + mobile + "\n" + "Start Date: " + date + " (" + duration +" Day(s))" + "\n" + "Info: " + enquire + "\n" + "---------------------------------------------------------------------------");
  }
}
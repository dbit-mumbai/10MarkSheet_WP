function myFunction()
  {

    // FIRST NAME
	 var x = document.forms["form"]["fname"];
    if (x.value == "") {
        alert("First Name should not be blank !!");
        return false;
    }

	if (! allLetter(x)) {
		 alert("First Name should be all characters!!");
		 return false;
	}


// LAST NAME
	var y = document.forms["form"]["lname"];
	if(y.value==""){
		 alert("Last Name should not be blank !!");
        return false;
	}
	if (! allLetter(y)) {
		 alert("Last Name should be all characters!!");
		 return false;
	}

//MIDDLE NAME
	var z = document.forms["form"]["mname"];
  if(z.value==""){
     alert("Middle Name should not be blank !!");
        return false;
  }
  if (! allLetter(z)) {
		 alert("Middle Name should be all characters!!");
		 return false;
	}

//MOTHERS NAME
  var w = document.forms["form"]["moname"];
  if(w.value==""){
     alert("Mother's Name should not be blank !!");
        return false;
  }
  if (! allLetter(w)) {
     alert("Mother's Name should be all characters!!");
     return false;
  }

// DIVISIONAL BOARD
  var db = document.forms["form"]["db"];
  if (!deptselect(db)) {
     alert('Please select Divisional Board!!!');
      return false;
  }



// SEAT NO.
	var a = document.forms["form"]["seatno"];
	if(a.value=="")
  {
		 alert("Seat Number should not be blank !!");
        return false;
	}


// CENTER NO.
	var f = document.forms["form"]["centerno"];
	if(f.value=="")
  {
		 alert("Center Number should not be blank !!");
        return false;
	}
	if (!allnumeric(f))
   {
		 alert('Please input numeric characters only for center no.');
      return false;
	}

  //alert("ERROR");


	var c = document.forms["form"]["dnsno"];
	if(c.value=="")
  {
		 alert("DISTRICT AND SCHOOL NO. should not be blank !!");
        return false;
	}

	var d = document.forms["form"]["srno"];
	if(d.value=="")
  {
		 alert("SR. NO. OF STATEMENT should not be blank !!");
        return false;
	}
	if (!allnumeric(d))
  {
		 alert('Please input numeric characters only for sr. no. of statement');
      return false;
	}



 }
	function allLetter(inputtxt)
                {
                 var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }


	 function allnumeric(inputtxt)
               {
                  var numbers = /^[0-9]+$/;
                  if(inputtxt.value.match(numbers))
                  {
                    return true;
                  }
                  else
                  {
                    return false;
                  }
               }

	function limit(element,limit)
              {
                var max_chars = limit;

                  if(element.value.length > max_chars) {
                    element.value = element.value.substr(0, max_chars);
                  }
              }

  function deptselect(dept)
              {
                if(dept.value == "no")
                  {
                    return false;
                  }
                  else
                  {
                    return true;
                  }
              }

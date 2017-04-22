function myFunction()
{

 //MARKS

 var a = document.forms["form2"]["mar"];
	if(a.value=="")
 	{
		alert("MARATHI Marks should not be blank !!");
        return false;
	}
	if (! allnumeric(a))
	{
		 alert('Please input numeric characters only for marks');
      return false;
	}


	var b = document.forms["form2"]["hindi"];
	if(b.value=="")
	{
		alert("HINDI Marks should not be blank !!");
        return false;
	}
	if (! allnumeric(b))
	 {
		 alert('Please input numeric characters only for marks');
    	  return false;
	}

	var c = document.forms["form2"]["eng"];
	if(c.value=="")
	{
		alert(" ENGLISH Marks should not be blank !!");
        return false;
	}
	if (! allnumeric(c))
	 {
		 alert('Please input numeric characters only for marks');
      return false;
	}

	var d = document.forms["form2"]["maths"];
	if(d.value=="")
	{
		alert(" MATHS Marks should not be blank !!");
        return false;
	}
	if (! allnumeric(d))
	 {
		 alert('Please input numeric characters only for marks');
      return false;
	}


	var e = document.forms["form2"]["sci"];
	if(e.value=="")
	{
		alert("SCIENCE Marks should not be blank !!");
        return false;
	}
	if (! allnumeric(e))
	 {
		 alert('Please input numeric characters only for marks');
      return false;
	}

	var f = document.forms["form2"]["ss"];
	if(f.value=="")
	{
		alert(" SOCIAL SCIENCE Marks should not be blank !!");
        return false;
	}
	if (! allnumeric(f))
	 {
		 alert('Please input numeric characters only for marks');
      return false;
	}


/*//GRADES

 var m2 = document.forms["form2"]["m2"];
 if (!deptselect(m2)) {
    alert('Please select Grade fo M2!!!');
     return false;
 }

var p1 = document.forms["form2"]["p1"];
if (!deptselect(p1)) {
   alert('Please select Grade for P1!!!');
    return false;
}

 var p6 = document.forms["form2"]["p6"];
 if (!deptselect(p6)) {
    alert('Please select Grade for P6!!!');
     return false;
 }


 var p7 = document.forms["form2"]["p7"];
 if (!deptselect(p7)) {
    alert('Please select Grade for P7!!!');
     return false;
 }

 var p8 = document.forms["form2"]["p8"];
 if (!deptselect(p8)) {
    alert('Please select Grade for P8!!!');
     return false;
 }

 var p38 = document.forms["form2"]["p38"];
 if (!deptselect(p38)) {
    alert('Please select Grade for 38!!!');
     return false;
 }
*/
//alert("check");

//var s =( (a.value)+(b.value)+(c.value)+(d.value)+(e.value)+(f.value) );
var s =parseInt(a.value)+parseInt(b.value)+parseInt(c.value)+parseInt(d.value)+parseInt(e.value)+parseInt(f.value);
alert(s);
totalmarks(s);


//alert("check");
var p = (s/650) * 100;
alert(p);
percentage(p);




//alert("check");
res(p);
//alert("check result");


grades1(a);
grades2(b);
grades3(c);
grades4(d);
grades5(e);
grades6(f);


return false;
}

function allLetter(inputtxt)
                {
                 var letters = /^[A-Ha-h]+$/;
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
              function totalmarks(s)
                         {
                         // alert("check2");
                             var t = document.forms["form2"];

                               t.totalm.value= s;
                              //totalm.value=documet.write(s);
                         }


              function percentage(p)
              {
                    //alert("check3");
                var per = document.forms["form2"];
                  per.perct.value=p;

              }

              function res(p)
              {
                  //alert("check4");

                var r = document.forms["form2"];
                  if(p>35 && p<=100)
                  {
                    //alert("check5");
                    r.result.value='PASS';
                  }
                  else
                  {
                    r.result.value='FAIL';
                  }
              }
              function grades1(a)
              {
                var sum = document.forms["form2"];
                if(a.value>=60 && a.value<=100)
                  sum.m2.value="A";
                else if (a.value>=45 && a.value<=59)
                  sum.m2.value="B";
                else if(a.value>=35 && a.value<=44)
                  sum.m2.value="C";
                else
                  sum.m2.value="D";
              }
              function grades2(b)
              {
                var sum = document.forms["form2"];
                if(b.value>=60 && b.value<=100)
                  sum.p1.value="A";
                else if (b.value>=45 && b.value<=59)
                  sum.p1.value="B";
                else if(b.value>=35 && b.value<=44)
                  sum.p1.value="C";
                else
                  sum.p1.value="D";
              }
              function grades3(c)
              {
                var sum = document.forms["form2"];
                if(c.value>=60 && c.value<=100)
                  sum.p6.value="A";
                else if (c.value>=45 && c.value<=59)
                  sum.p6.value="B";
                else if(c.value>=35 && c.value<=44)
                  sum.p6.value="C";
                else
                  sum.p6.value="D";
              }
              function grades4(d)
              {
                var sum = document.forms["form2"];
                if(d.value>=90 && d.value<=150)
                  sum.p7.value="A";
                else if (d.value>=67 && d.value<=88)
                  sum.p7.value="B";
                else if(d.value>=52 && d.value<=66)
                  sum.p7.value="C";
                else
                  sum.p7.value="D";
              }
              function grades5(e)
              {
                var sum = document.forms["form2"];
                if(e.value>=60 && e.value<=100)
                  sum.p8.value="A";
                else if (e.value>=45 && e.value<=59)
                  sum.p8.value="B";
                else if(e.value>=35 && e.value<=44)
                  sum.p8.value="C";
                else
                  sum.p8.value="D";
              }
              function grades6(f)
              {
                var sum = document.forms["form2"];
                if(f.value>=60 && f.value<=100)
                  sum.p38.value="A";
                else if (f.value>=45 && f.value<=59)
                  sum.p38.value="B";
                else if(f.value>=35 && f.value<=44)
                  sum.p38.value="C";
                else
                  sum.p38.value="D";
              }

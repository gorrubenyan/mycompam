
var n1 = prompt('Ներմուծեք առաջին թիվը');
var op = prompt('Ներմուծեք Հաշվարկի նշանը (+ - * / )');
var n2 = prompt('Ներմուծեք երկրորդ թիվը');

n1 = parseInt(n1)
n2 = parseInt(n2)

if (op == '+') {
	alert(n1 + n2);
}


else if (op == '-') {
	alert(n1 - n2);
}


else if (op == '*') {
	alert(n1 * n2);
}


else if (op == '/'&& n2 !=0) {
	
	alert(n1 / n2);
}

else
{
	alert('Ինչ որ սխալ է առաջացել, խնդրում ենք փորձել մի փոքր զգույշ:');
}






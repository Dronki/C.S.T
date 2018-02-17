function CheckMatch(pass1, pass2)
{
    if(pass1 != pass2){
        return "Lösenorden stämmer inte överens!";
    }else{
        return "Lösenorden stämmer överens!";
    }
}
 
 function checkMail(mail){
     if(mail.match(/.[@]/)){
         return "Mailen verkar vara giltig";
     }else{
         return "Ange en giltig mail";
     }
 }
 
function CheckPassword(password)
{
	var strength = new Array();
	strength[0] = "Tomt";
	strength[1] = "Väldigt svagt";
	strength[2] = "Svagt";
	strength[3] = "Medium";
	strength[4] = "Starkt";
	strength[5] = "Väldigt starkt";

	var score = 1;

	if (password.length < 1)
		return strength[0];

	if (password.length < 4)
		return strength[1];

	if (password.length >= 8)
		score++;
	if (password.length >= 10)
		score++;
	if (password.match(/\d+/))
		score++;
	if (password.match(/[a-z]/) &&
		password.match(/[A-Z]/))
		score++;
	if (password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,£,(,)]/))
		score++;

	return strength[score];
}
		
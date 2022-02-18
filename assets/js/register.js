function DoubleCheck() {
	MDP1 = document.getElementById('mdp1');
	MDP2 = document.getElementById('mdp2');
	MAIL1 = document.getElementById('mail1');
	MAIL2 = document.getElementById('mail2');
	Sub = document.getElementById('submit');

	if (MDP1.value == MDP2.value && MAIL1.value == MAIL2.value) 
	{	
		Sub.disabled = false;
		if (MDP1.value.length > 0)
		{
			MDP2.style.borderColor = "green";
		}
		if (MAIL1.value.length > 0)
		{
			MAIL2.style.borderColor = "green";
		}
	}
	else 
	{
		if (MDP1.value.length > 0 && MDP1.value != MDP2.value)
		{
			MDP2.style.borderColor = "red";
		}
		if (MAIL1.value.length > 0 && MAIL1.value != MAIL2.value)
		{
			MAIL2.style.borderColor = "red";
		}
		Sub.disabled = true;
	};
};
	document.getElementById('mail2').onpaste = function(){
    alert('Merci de ne pas copier/coller');        // on prévient
    return false;        // on empêche
};

 	/*date = document.getElementById('date');

    function getAge(date) { 
        var diff = Date.now() - date.getTime();
        var age = new Date(diff); 

        return Math.abs(age.getUTCFullYear() - 1970);
    }

    alert(getAge(new Date(date))); //Date(année, mois, jour)
	console.log('date');*/   

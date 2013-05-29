function set() {


		//var auteur = document.getElementById("auteur").value;

		  localStorage.auteur=document.getElementById("auteur").value;
		  localStorage.nationalite=document.getElementById("nationalite").value;
		  localStorage.titre=document.getElementById("titre").value;
		  localStorage.annee=document.getElementById("annee").value;
		  localStorage.prix=document.getElementById("prix").value;
		  
		  return false;
}


function gpsGet() {

	if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(afficherPosition);      
    }
	
  else{alert('pas supporté');}
  
	
}

function afficherPosition(position)
{
	console.log(position);
    document.getElementById("gps").href= 'https://maps.google.com/maps?q='+position.coords.latitude+',+'+position.coords.longitude+'+(APLON FRANCE)&iwloc=A&hl=fr';
    
    
}



document.onreadystatechange = function(){
	
    if(document.readyState=='loaded' || document.readyState=='complete') {
  
    	gpsGet();
    	 
    }
}




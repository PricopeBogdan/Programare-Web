function Cauta()
{
    var x = document.getElementById("search_field").value;
   if(x == "")
   {alert("Completați elementul / elementele căutate!");}
   else
   {alert("Textul " + x + " nu a fost găsit în pagină !");}

   document.getElementById("search_field").value="";

   return 0;
}

function Data()
{
   var data_checkin = document.getElementById('data_checkin').value;
   var data_checkout = document.getElementById('data_checkout').value;
   var today = new Date();

   if(((today.getMonth()+1)>=10) && (today.getDate()>=10) )
   var datacurenta = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
   if(((today.getMonth()+1)>=10) && (today.getDate()<10) )
   var datacurenta = today.getFullYear()+'-'+(today.getMonth()+1)+'-0'+today.getDate();
   if(((today.getMonth()+1)<10) && (today.getDate()>=10) )
   var datacurenta = today.getFullYear()+'-0'+(today.getMonth()+1)+'-'+today.getDate();
   if(((today.getMonth()+1)<10) && (today.getDate()<10) )
   var datacurenta = today.getFullYear()+'-0'+(today.getMonth()+1)+'-0'+today.getDate();

   if(data_checkin < datacurenta) 
   {alert("Atenție ! Data de CHECK IN nu poate fi mai mică decât data curentă !") ;}

   if(data_checkin == data_checkout) 
   {alert("Atenție ! Nu se poate face CHECK IN și CHECK OUT în aceeași zi ! ");}

   if((data_checkin > data_checkout) && (data_checkout!=""))
   {alert("Atenție ! Data de CHECK OUT nu poate fi mai mică decât data de CHECK IN ! ");}   
}
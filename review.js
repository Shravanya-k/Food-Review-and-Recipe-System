function re()
{
    alert("Reset Done!!");
    return false;
}
function submits()
{
    var name=document.getElementById("name").value;
    var mail=document.getElementById("mail").value;
    var phone=document.getElementById("phone").value;
    var review=document.getElementById("reviews").value;
    var a=0,str="";
    if(name=="")
    {
        str+="No Name !!!!!\n";
        a=1;
    }
    if(phone.length!=10)
    {
        str+= "Phone no. is not 10 digits !!!!!\n";
        a=1;
    }
    if(mail=="")
    {
        str+= "Provide Email !!!!!\n";
        a=1;
    }
    if(review=="")
    {
        str+="Please give Review !!!!!\n";
        a=1;
    }
    if(a==0)
    {
        str+="Submitted Successfully !!!!!";
        alert(str);
        return true;
    }else
    {
        alert(str);
        return false;

    }
}
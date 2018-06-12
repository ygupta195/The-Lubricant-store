function m(){
    window.alert("hi");
 }
 function check()
 {
    // var usr=document.forms["login"]["username"].value;
    // if( usr=="")
    // {
    //   window.alert("space cant be empty");
    // }
    // else
    // {
    //         window.alert("hi");
    //         window.open="1-MainPage.html";
    // }
    // var pass=document.forms["login"]["password"].value;
    // if( pass=="")
    // {
    //   window.alert("space cant be empty");
    // }
    // else
    // {
    //         window.alert("hi");
    //         window.location.href="1-MainPage.html";
    // }
    var pass1=document.forms["login"]["pwd"].value;
    var pass2=document.forms["login"]["rpwd"].value;
    if(pass1==pass2)
    {
      alert("hi");
    }
    else
    {
      alert("password mismatch");
    }
 }
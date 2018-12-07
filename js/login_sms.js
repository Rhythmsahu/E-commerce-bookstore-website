  var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {

      var currentScrollpos = window.pageYOffset;
      if(prevScrollpos > currentScrollpos) {
            document.getElementById("nav").style.top = "0";
      } else {
            document.getElementById("nav").style.top = "-100px";
      }

      prevScrollpos = currentScrollpos;

      }
      
     
     
    // initialize Account Kit with CSRF protection
    AccountKit_OnInteractive = function(){
      AccountKit.init ({
          appId:"149062709125328",
          state:"2c2454d3d5a40fec18f4eaf2dff410ab",
          version:"v1.0",
          debug: true
});
    };
 
 
    // login callback
    function loginCallback(response) {
      if (response.status === "PARTIALLY_AUTHENTICATED") {
        document.getElementById("login_code").value = response.code;
        document.getElementById("frm_login").submit();
      }
      else if (response.status === "NOT_AUTHENTICATED") {
        alert("Auth failure");
        return false;
      }
      else if (response.status === "BAD_PARAMS") {
        alert("BAD_PARAMS");
        return false;
      }
    }
 
 
    function loginWithSMS(){
      document.getElementById("login_via").value = 1;
      AccountKit.login("PHONE",{}, loginCallback);
    }
 
 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



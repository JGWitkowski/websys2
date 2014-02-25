 $(document).ready(function() {
  //Initialize my facebook app and retrieve the SDK
  $.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/en_UK/all.js', function(){
    FB.init({
      appId: '143466399084617',
      status     : true,
      xfbml      : true
    });
  //Login into Facebook using Oauth provided by fb SDK     
  $('#loginbutton,#feedbutton').removeAttr('disabled');
      FB.login(function(response) {
   if (response.status === 'connected') {
      var uid = response.authResponse.userID;
      var accessToken = response.authResponse.accessToken;
      console.log('logged in and authenticated. joob jerb');
      FB.login(function(response) {
      //retrieve user info for work, education, name, and location
      FB.api("/me", function (response) {
        if (response && !response.error) {
          console.log(response.id);
          console.log(response.name);
          console.log(response.location.name);
          console.log(response.work[0].employer.name);
          console.log(response.education[response.education.length -1].school.name);
          $("#header h1").append(response.name);
          $("#work-details h5").html(response.location.name + " |<br />" + response.work[0].employer.name);
          $("#edu-details h5").html(response.education[response.education.length -1].school.name + '<br />Class of ' + response.education[response.education.length -1].year.name);
        }
      });
      //retrieve some recent photos from the user
      FB.api("/me/photos?fields=picture", function (response) {
        if (response && !response.error){
           for (var i = 0; i < 18; i++){
            $("#photo-details").append("<li><img src='" + response.data[i].picture +"'/></li>");
          }  
        }
      });
      //retrieve recent status updates
      FB.api("/me/statuses", function (response) {
        if (response && !response.error){ 
           for (var i = 0; i < 9; i++){
            var timestamp = response.data[i].updated_time;
            var d = new Date(timestamp);
            d = d.toDateString();
            $("#tweet-details ul").append("<li>" + response.data[i].message + " - <span class='date'>" + d + "</span></li>");

          }
        }
      });
 }, {scope: 'read_stream'});
    } 
    else if (response.status === 'not_authorized') {
    console.log('user logged in but not authenticated');
    } 
    else {
    // the user isn't logged in to Facebook.
    console.log('user not logged in');
    }

  });
 });
});
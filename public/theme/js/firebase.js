// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyC7tsWaTRZRoJ8Loj3K4WIcPKgQAWpejqY",
  authDomain: "fala-666.firebaseapp.com",
  projectId: "fala-666",
  storageBucket: "fala-666.appspot.com",
  messagingSenderId: "696409371960",
  appId: "1:696409371960:web:b2a3659306fe085446fdcd",
  measurementId: "G-1YLC6S3ZMP"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

function firebasePopup(provider, method) {
  firebase.auth().signInWithPopup(provider).then(function (result) {
    var token = result.credential.accessToken;
    var user = result.user;

    data = new FormData();
    data.append("_token", _token);
    data.append("email", user.email);
    data.append("name", user.displayName);
    data.append("firebase_token", token);
    data.append("firebase_uid", user.uid);
    data.append("login_by", method);
    $.ajax({
      data: data,
      type: "POST",
      url: _firebase,
      cache: false,
      contentType: false,
      processData: false,
      success: function (res) {
        parent.location.reload();
      },
      error: function (xhr, status, error) {
        console.log(status + ': ' + error);
      }
    });
   
  }).catch(function (error) {
    console.error('Error: hande error here>>>', error.code)
  })
}

function loginGoogle() {
  var ggProvider = new firebase.auth.GoogleAuthProvider();
  firebasePopup(ggProvider, 'google');
}

function loginFacebook() {
  var fbProvider = new firebase.auth.FacebookAuthProvider();
  firebasePopup(fbProvider, 'facebook');
}

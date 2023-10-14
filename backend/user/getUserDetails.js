
function userDetails(accessToken, baseUrl) {
    return new Promise((resolve, reject) => {
      fetch(`${baseUrl}/user/`, {
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + accessToken
        }
      })
      .then(response => response.json())
      .then(data => {
        console.log("user", data);
  
        if (data.user) {
          console.log("data.user", data.user);
          const userData = {
            "fname": data.user.first_name,
            "lname": data.user.last_name,
            "email": data.user.email,
            "uname": data.user.username,
            "id": data.user.id
          };
          resolve(userData);
        } else {
          reject(new Error("User data not found"));
        }
      })
      .catch(error => {
        console.error(error);
        reject(error);
      });
    });
}
  
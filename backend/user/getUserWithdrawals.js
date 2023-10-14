
function userWithdrawals(access_token) {
    return new Promise((resolve, reject) => {
      fetch(`${baseUrl}/withdrawals/`, {
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + access_token
        }
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        console.log("Withdrawal", data);
        resolve(data);
      })
      .catch(error => {
        console.error(error);
        reject(error);
      });
    });
}
  


function userWithdrawalDetail(access_token, Withdrawal_id) {
    return new Promise((resolve, reject) => {
      fetch(`${baseUrl}/withdrawal/${Withdrawal_id}`, {
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + access_token
        }
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        console.log("Withdrawal", data);
        resolve(data);
      })
      .catch(error => {
        console.error(error);
        reject(error);
      });
    });
  }


  


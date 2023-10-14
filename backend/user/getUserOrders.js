
function userOrders(access_token) {
    return new Promise((resolve, reject) => {
      fetch(`${baseUrl}/orders/`, {
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
        console.log("orders", data);
        resolve(data);
      })
      .catch(error => {
        console.error(error);
        reject(error);
      });
    });
}
  


function userOrderDetail(access_token, order_id) {
    return new Promise((resolve, reject) => {
      fetch(`${baseUrl}/order/${order_id}`, {
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
        console.log("orders", data);
        resolve(data);
      })
      .catch(error => {
        console.error(error);
        reject(error);
      });
    });
  }


  function updateUserOrderPaymentProof(access_token, order_id, file) {
    return new Promise((resolve, reject) => {
      // Create a FormData object to send the file
      const formData = new FormData();
      formData.append('file', file);
        
      console.log(formData)
      
      // Make a POST request to the Django endpoint
      fetch(`${baseUrl}/update-order-proof/${order_id}/`, {
        method: 'POST',
        headers: {
          'Authorization': 'Bearer ' + access_token
        },
        body: formData // Send the file as the request body
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          console.log("/update-order-proof/", data.transaction);
          resolve(data);
        })
        .catch(error => {
          console.error(error);
          reject(error);
        });
    });
  }
  
  


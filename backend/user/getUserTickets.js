
function userTickets(access_token) {
    return new Promise((resolve, reject) => {
      fetch(`${baseUrl}/tickets/`, {
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
        console.log("ticket", data);
        resolve(data);
      })
      .catch(error => {
        console.error(error);
        reject(error);
      });
    });
}
  


function userTicketDetail(access_token, ticket_id) {
    return new Promise((resolve, reject) => {
      fetch(`${baseUrl}/ticket/${ticket_id}`, {
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
        console.log("ticket", data);
        resolve(data);
      })
      .catch(error => {
        console.error(error);
        reject(error);
      });
    });
  }


  



function userTicketComments(access_token, ticket_id) {
    return new Promise((resolve, reject) => {
      fetch(`${baseUrl}/ticket/${ticket_id}/comments/`, {
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
  


function userTicketCreateComment(access_token, ticket_id, content) {
  return new Promise((resolve, reject) => {
    fetch(`${baseUrl}/ticket/${ticket_id}/comments/`, {
      method: 'POST',
      headers: {
        'Authorization': 'Bearer ' + access_token,
        'Content-Type': 'application/json', 
      },
      body: JSON.stringify({ content: content }), 
    })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        console.log("created ticket comment", data);
        resolve(data);
      })
      .catch(error => {
        console.error(error);
        reject(error);
      });
  });
}



  


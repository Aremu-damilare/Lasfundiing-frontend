
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


function userTicketsSortStatus(access_token, status) {
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

      
        const ticketData = data        
        // Filter the array based on the 'status' variable
        const filteredData = ticketData.filter(ticket => ticket.status === status);
        
        // Log the filtered data
        console.log("Filtered Ticket Data:", filteredData);
        
        // Resolve with the filtered data
        resolve(filteredData);
      
      
    })
    .catch(error => {
      console.error(error);
      reject(error);
    });
  });
}

function userTicketsSortDate(access_token, status=null, dateSort=null) {
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

      if(dateSort != null){
        const ticketData = data
        
        // Function to compare dates for sorting
        const compareDates = (a, b) => {
          const dateA = new Date(a.created_at);
          const dateB = new Date(b.created_at);
          
        
          if (dateSort === 'newest') {
            return dateB - dateA; // Sort in descending order for newest
          } else {
            return dateA - dateB; // Sort in ascending order for oldest
          }
        };
        
        // Sort the array based on the 'created_at' property
        const sortedData = ticketData.sort(compareDates);
        
        // Log the sorted data
        console.log("Sorted Ticket Data:", sortedData);
        
        // Resolve with the sorted data
        resolve(sortedData);
      } 
      
    })
    .catch(error => {
      console.error(error);
      reject(error);
    });
  });
}

function userTicketsSortDateRange(access_token, EndTimeSortValue, StartTimeSortValue, Order) {
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
      console.log("data", data);

      // Filter data based on updated_at falling between StartTimeSortValue and EndTimeSortValue
      const filteredData = data.filter(item => {
        const updatedAt = item.updated_at; // Date is in string format
        const startTime = StartTimeSortValue;
        const endTime = EndTimeSortValue;

        return updatedAt >= startTime && updatedAt <= endTime;
      });

      // Sort the filteredData based on Order and updated_at
      if (Order === 'newest') {
        filteredData.sort((a, b) => new Date(b.updated_at) - new Date(a.updated_at));
      } else if (Order === 'oldest') {
        filteredData.sort((a, b) => new Date(a.updated_at) - new Date(b.updated_at));
      }

      console.log("filteredData", filteredData);
      resolve(filteredData);
    })
    .catch(error => {
      console.error(error);
      reject(error);
    });
  });
}


  


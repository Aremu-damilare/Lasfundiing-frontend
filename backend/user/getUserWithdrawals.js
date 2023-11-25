
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



function userWithdrawalsSortStatus(access_token, status) {
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

      
        const withdrawalData = data        
        // Filter the array based on the 'status' variable
        const filteredData = withdrawalData.filter(withdrawal => withdrawal.status === status);
        
        // Log the filtered data
        console.log("Filtered Withdrawal Data:", filteredData);
        
        // Resolve with the filtered data
        resolve(filteredData);
      
      
    })
    .catch(error => {
      console.error(error);
      reject(error);
    });
  });
}

function userWithdrawalsSortDate(access_token, status=null, dateSort=null) {
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

      if(dateSort != null){
        const withdrawalData = data
        
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
        const sortedData = withdrawalData.sort(compareDates);
        
        // Log the sorted data
        console.log("Sorted Withdrawal Data:", sortedData);
        
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

function userWithdrawalsSortDateRange(access_token, EndTimeSortValue, StartTimeSortValue, Order) {
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


  


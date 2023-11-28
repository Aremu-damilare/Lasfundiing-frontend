async function getUsers(baseUrl, access_token) {
    const url = `${baseUrl}/custom/admin/users`;
  
    try {
      const response = await fetch(url, {
        method: 'GET',
        headers: {
          Authorization: `Bearer ${access_token}`,
        },
      });
  
      if (response.ok) {
        const data = await response.json();
        return data;
      } else {
        return false;
      }
    } catch (error) {
      console.error('Error:', error);
      return false;
    }
  }


  async function getUser(baseUrl, access_token, user_id) {
    const url = `${baseUrl}/custom/admin/user/${user_id}/`;
  
    try {
      const response = await fetch(url, {
        method: 'GET',
        headers: {
          Authorization: `Bearer ${access_token}`,
        },
      });
  
      if (response.ok) {
        const data = await response.json();
        return data;
      } else {
        return false;
      }
    } catch (error) {
      console.error('Error:', error);
      return false;
    }
  }


  async function updateUser(baseUrl, access_token, user_id, formData) {
    const url = `${baseUrl}/custom/admin/user/${user_id}/`;
  
    try {
      const response = await fetch(url, {
        method: 'PUT',
        headers: {
          Authorization: `Bearer ${access_token}`,
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(Object.fromEntries(formData)),
      });
  
      if (response.ok) {
        const data = await response.json();
        return data;
      } else {
        return false;
      }
    } catch (error) {
      console.error('Error:', error);
      return false;
    }
  }



  //
function userUsersSortStatus(access_token, status) {
  return new Promise((resolve, reject) => {
    fetch(`${baseUrl}/custom/admin/users`, {
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
        const userData = data        
        // Filter the array based on the 'status' variable
        const filteredData = userData.filter(user => user.status === status);
        
        // Log the filtered data
        console.log("Filtered User Data:", filteredData);
        
        // Resolve with the filtered data
        resolve(filteredData);            
    })
    .catch(error => {
      console.error(error);
      reject(error);
    });
  });
}



function userUsersSortDate(access_token, status=null, dateSort=null) {
  return new Promise((resolve, reject) => {
    fetch(`${baseUrl}/custom/admin/users`, {
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
        const userData = data
        
        // Function to compare dates for sorting
        const compareDates = (a, b) => {
          const dateA = new Date(a.created_at);
          const dateB = new Date(b.created_at);
                  
          if (dateSort === 'newest') {
            return dateB - dateA; // Sort in descending user for newest
          } else {
            return dateA - dateB; // Sort in ascending user for oldest
          }
        };
        
        // Sort the array based on the 'created_at' property
        const sortedData = userData.sort(compareDates);
        
        // Log the sorted data
        console.log("Sorted User Data:", sortedData);
        
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



function userUsersSortDateRange(access_token, EndTimeSortValue, StartTimeSortValue, Order) {
  return new Promise((resolve, reject) => {
    fetch(`${baseUrl}/custom/admin/users`, {
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


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
async function getOrders(baseUrl, access_token) {
    const url = `${baseUrl}/custom/admin/store/orders`;
  
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


  async function getOrder(baseUrl, access_token, order_id) {
    const url = `${baseUrl}/custom/admin/store/order/${order_id}/`;
  
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


  async function updateOrder(baseUrl, access_token, order_id, formData) {
    const url = `${baseUrl}/custom/admin/store/order/${order_id}/`;
  
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
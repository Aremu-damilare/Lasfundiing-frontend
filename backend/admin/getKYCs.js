async function getKYCs(baseUrl, access_token) {
    const url = `${baseUrl}/custom/admin/kycs`;
  
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


async function getKYC(baseUrl, access_token, kyc_id) {
    const url = `${baseUrl}/custom/admin/kyc/${kyc_id}/`;
  
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


async function updateKyc(baseUrl, access_token, kyc_id, formData) {
  const url = `${baseUrl}/custom/admin/kyc/${kyc_id}/`;

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
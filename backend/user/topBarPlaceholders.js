

function topBarPlaceholders(data){
    console.log("topBarPlaceholders(data)", data, data.email)
    const firstNameElement = document.querySelector('.user-fname');
    const profileName = document.querySelector('body > div.topbar > div.profile > div > span.profile-name');
    const profileEmail = document.querySelector('body > div.topbar > div.profile > div > span.profile-email');

    if(!firstNameElement){
        
    } else {
        firstNameElement.textContent = `${data.fname}!`;
    }
    
    profileName.textContent = `${data.fname} ${data.lname}`;
    profileEmail.textContent =`${data.email}`;
    return true
}
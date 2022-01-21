first_name.onchange = () => {
                              
    if (first_name.value.match(/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}/)){
        messagefirst_name.innerHTML ='<p class ="text-success">Le prénom est correct</p>';

    } else {
        messagefirst_name.innerHTML = '<p class ="text-danger">Le prénom est incorrect</p>';
    }
}

last_name.onchange = () => {
    if (last_name.value.match(/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}/)){
        messagelast_name.innerHTML ='<p class ="text-success">Le nom est correct</p>';

    } else {
        messagelast_name.innerHTML = '<p class ="text-danger">Le nom est incorrect</p>';
    }
}

phonenumber.onchange = () => {
    if (phonenumber.value.match(/^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}/)){
        messagephonenumber.innerHTML ='<p class ="text-success">Le numéro de téléphone est correct</p>';

    } else {
        messagephonenumber.innerHTML = '<p class ="text-danger">Le numéro de téléphone est incorrect</p>';
    }
}
